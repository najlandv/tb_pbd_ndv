<?php

namespace App\Models;

use CodeIgniter\Model;

class PelangganModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email','alamatPelanggan'];
    
    public function getPelanggan($id = false){
        
        if($id == false){
            return $this->findAll();
        }

        return $this->where(['Id'=>$id])->first();
    }
}
