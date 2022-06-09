<?php

namespace App\Controllers;

class Direktor extends BaseController
{
    public function index()
    {
        echo view('sablon/header_direktor');
        echo view('sablon/footer');
    }

}
