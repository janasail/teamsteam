<?php

namespace App\Controllers;

class Vaspitac extends BaseController
{
    public function index()
    {
        echo view('sablon/header_vaspitac');
        echo view('sablon/footer');
    }

}
