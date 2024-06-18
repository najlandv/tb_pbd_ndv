<?php

namespace App\Models;

use CodeIgniter\Model;

class PemesananModel extends Model
{
    protected $table = 'pemesanan';
    protected $allowedFields = ['email', 'metodePembayaran','metodePengiriman', 'jumlahBarang', 'alamatPelanggan'];

    public function getPemesanan($id = false){
        if($id == false){
            return $this->findAll();
        }

        return $this->where(['Id'=>$id])->first();
    }

    public function kurangiStokBarang($idBarang, $jumlah){
        // Fetch the barang details
        $barangModel = new BarangModel();
        $barang = $barangModel->getBarang($idBarang);

        // Check if the barang exists and if the stock is sufficient
        if ($barang && $barang['stokBarang'] >= $jumlah) {
            // Reduce the stock
            $newStok = intval($barang['stokBarang'])-intval($jumlah);

            // Update the barang's stock
            $barangModel->update($idBarang, ['stokBarang' => $newStok]);
            return true; // Return true to indicate success
        }

        return false; // Return false if stock reduction fails
    }
}