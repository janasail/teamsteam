<?php

namespace App\Models;

use CodeIgniter\Model;

class RoditeljModel extends Model
{
    protected $table      = 'roditelj';
    protected $primaryKey = 'email';
    protected $returnType = 'object';
    protected $allowedFields = ['jmbgRod', 'email'];
}
