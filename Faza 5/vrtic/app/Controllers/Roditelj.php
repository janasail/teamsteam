<?php

namespace App\Controllers;
use App\Models\KorisnikModel;
use App\Models\RoditeljModel;
use App\Models\DeteModel;

class Roditelj extends BaseController
{
    protected function prikaz($page, $data)
    {
        $KorisnikModel=new KorisnikModel();
        $korisnik=$KorisnikModel->findAll();
        $d=$this->session->get('korisnik')->email;
    
        $RoditeljModel=new RoditeljModel();
        $roditelj=$RoditeljModel->findAll();
       foreach($roditelj as $row){
            if($row->email == $d){
                $r=$row->jmbgRod;
            }
        }
    
        $DeteModel=new DeteModel();
        $dete=$DeteModel->findAll(); 




       $data['controller']='Roditelj';
       $data['korisnik']=$this->session->get('korisnik');
       $data['r']=$r; 
       $data['dete']=$dete;
       echo view('sablon/header_roditelj');
       echo view ("stranice/$page", $data);
       echo view('sablon/footer');
    }
    public function index($korisnik=null, $r=null, $dete=null)
    {
    
        $this->prikaz('roditelj', ['korisnik'=>$korisnik, 'r'=>$r, 'dete'=>$dete]);
    }

    

    public function roditeljDete(){
        $deteModel=new DeteModel();
        $dete=$deteModel->find($this->request->getVar('imeDet'));
    
        $this->session->set('dete', $dete);
        $this->prikaz('/dete', []);
    }

    public function izlogujSe(){
        $this->session->destroy();
         return redirect()->to("/Gost");
     }
}



