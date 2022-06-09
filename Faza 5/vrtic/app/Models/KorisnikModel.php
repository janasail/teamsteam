<?php

namespace App\Models;

use CodeIgniter\Model;

class KorisnikModel extends Model
{
    protected $table      = 'korisnik';
    protected $primaryKey = 'email';
    protected $returnType = 'object';
    protected $allowedFields = ['PIB', 'imeKor', 'prezimeKor', 'adresa', 'email', 'brojTel', 'lozinka', 'tipNaloga'];

    public function dohvatiemail($emailkor) {
        return $this->where('emailkor', $emailkor)->findAll();      
    }

    public function dohvatiadresu($adresakor) {
        return $this->where('emailkor', $adresakor)->findAll();      
    }
}
