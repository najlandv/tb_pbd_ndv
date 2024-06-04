<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table      = 'metode_pembayaran';
    protected $allowedFields = ['metodePembayaran'];
    
    public function getPembayaran($id = false){
        
        if($id == false){
            return $this->findAll();
        }

        return $this->where(['Id'=>$id])->first();
    }
}