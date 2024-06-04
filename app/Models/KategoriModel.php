<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $primaryKey = 'idKategori';
    protected $table      = 'kategori';
    protected $allowedFields = ['idKategori', 'namaKategori'];
    protected $useAutoIncrement = false;
    
    public function getKategori($id = false){
        if($id == false){
            return $this->findAll();
        }

        return $this->where(['idKategori' => $id])->first();
    }
}
