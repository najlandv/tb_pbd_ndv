<?php

namespace App\Models;

use CodeIgniter\Model;

class PengirimanModel extends Model
{
    protected $table      = 'metode_pengiriman';
    protected $allowedFields = ['metodePengiriman'];
    
    public function getPengiriman($id = false){
        
        if($id == false){
            return $this->findAll();
        }

        return $this->where(['Id'=>$id])->first();
    }
}