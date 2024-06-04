<?php

namespace App\Models;

use CodeIgniter\Model;

class PemesananModel extends Model
{
    protected $table      = 'pemesanan';
    protected $allowedFields = ['email', 'metodePembayaran','metodePengiriman', 'jumlahBarang', 'alamatPelanggan'];
    public function getPemesanan($id = false){
        
        if($id == false){
            return $this->findAll();
        }

        return $this->where(['Id'=>$id])->first();
    }
}