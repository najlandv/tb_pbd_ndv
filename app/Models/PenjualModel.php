<?php

namespace App\Models;

use CodeIgniter\Model;

class PenjualModel extends Model
{
    protected $table      = 'penjual';
    protected $allowedFields = ['namaPenjual', 'alamatPenjual','emailPenjual', 'socialMedia'];
    
}