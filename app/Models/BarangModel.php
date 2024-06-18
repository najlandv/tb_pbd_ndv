<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $primaryKey = 'idBarang';
    protected $table      = 'barang';
    protected $allowedFields = ['idBarang', 'idKategori','namaBarang', 'stokBarang', 'deskripsi', 'caraPemakaian', 'komposisiBarang', 'klaimBarang', 'tanyaJawab', 'noBpom', 'hargaBarang', 'gambar'];
    protected $useAutoIncrement = false;

    public function getBarang($id = false){
        
        if($id == false){
            return $this->findAll();
        }

        return $this->where(['idBarang'=>$id])->first();
    }
    public function updateStokBarang($id, $jumlahPesanan)
    {
        $barang = $this->getBarang($id);
        if ($barang && $barang['stokBarang'] >= $jumlahPesanan) {
            $newStok = $barang['stokBarang'] - $jumlahPesanan;
            return $this->update($id, ['stokBarang' => $newStok]);
        }
        return false;
    }
    

}