<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $primaryKey = 'idBarang';
    protected $table      = 'barang';
    protected $allowedFields = ['idBarang', 'idKategori','namaBarang', 'deskripsi', 'caraPemakaian', 'komposisiBarang', 'klaimBarang', 'tanyaJawab', 'noBpom', 'hargaBarang', 'gambar'];
    protected $useAutoIncrement = false;

    public function getBarang($id = false){
        
        if($id == false){
            return $this->findAll();
        }

        return $this->where(['idBarang'=>$id])->first();
    }
}