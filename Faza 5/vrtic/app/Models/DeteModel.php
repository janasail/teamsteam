<?php

namespace App\Models;

use CodeIgniter\Model;

class DeteModel extends Model
{
    protected $table      = 'dete';
    protected $primaryKey = 'idDet';
    protected $returnType = 'object';
    protected $allowedFields = ['idDet','imeDet', 'prezimeDet', 'adresa', 'jmbgRod1', 'jmbgRod2', 'datumRodj', 'imeVrtica'];
}
