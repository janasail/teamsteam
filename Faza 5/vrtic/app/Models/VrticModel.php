<?php

namespace App\Models;

use CodeIgniter\Model;

class VrticModel extends Model
{
    protected $table      = 'vrtic';
    protected $primaryKey = 'idVrtica';
    protected $returnType = 'object';
    protected $allowedFields = ['PIB','naziv', 'adresa', 'brojTel', 'email'];
}
