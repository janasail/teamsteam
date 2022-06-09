<?php

namespace App\Controllers;
use App\Models\KorisnikModel;
use App\Models\VrticModel;

class Gost extends BaseController
{
    

   protected function prikaz($page, $data)
    {
       $data['controller']='Gost';
       echo view('sablon/header_gost');
       echo view ("stranice/$page", $data);
       echo view('sablon/footer');
    }

    public function index()
    {
      $this->prikaz('pocetna', []);
       /*echo view('sablon/header_gost');
       echo view("Stranice/pocetna");
       echo view('sablon/footer');*/
    }

    public function prijavime($poruka=null, $poruka1=null)
    {
        $this->prikaz('prijavime', ['poruka'=>$poruka,'poruka1'=> $poruka1]);
       /*echo view('sablon/header_gost');
        echo view("Stranice/prijavime");
        echo view('sablon/footer');*/
    }

    public function kreirajnalog($vrtici=null, $vecpostoji=null)
    {
        $VrticModel=new VrticModel();
        $vrtici=$VrticModel->findAll();
        $this->prikaz('kreirajnalog', ['vrtici'=>$vrtici, 'vecpostoji'=> $vecpostoji]);
    }

    public function registrujvrtic($vecpostoji=null)
    {
        $this->prikaz('registrujvrtic',  ['vecpostoji'=> $vecpostoji]);
       /*echo view('sablon/header_gost');
        echo view("Stranice/prijavime");
        echo view('sablon/footer');*/
    }

    public function registrujvrticSubmit($vecpostoji=null){
      if(!$this->validate([
          'naziv' =>[
            'label'=>'naziv',
            'rules'=>'required',
            'errors'=>[
              'required'=>'Ovo polje je obavezno'  
            ]
        ],
             'adresa' =>[
            'label'=>'adresa',
            'rules'=>'required',
            'errors'=>[
              'required'=>'Ovo polje je obavezno'
            ]
        ],
             'email' =>[
            'label'=>'email',
            'rules'=>'required|valid_email',
            'errors'=>[
              'required'=>'Ovo polje je obavezno' ,
              'valid_email'=>'E-mail mora da bude u dobrom formatu'  
            ]
        ],
         'brojTel' =>[
            'label'=>'brojTel',
            'rules'=>'required|min_length[9]|max_length[15]',
            'errors'=>[
              'required'=>'Ovo polje je obavezno' ,
              'min_lenght[9]'=>'Broj telefona mora imati najmanje 9 cifara'  
            ]
         ], 
                    'PIB' =>[
                        'label'=>'tipNaloga',
                        'rules'=>'required|min_length[8]|max_length[20]',
                        'errors'=>[
                          'required'=>'Ovo polje je obavezno',
                          'min_lenght[8]'=>'PIB mora imati najmanje 8 cifara'    
                        ]
                    ],  
   ])) return $this->prikaz('registrujvrtic', [ 'errors'=>$this->validator->getErrors()]);

   $VrticModel2=new VrticModel();
       $vrtic=$VrticModel2->findAll();
       foreach($vrtic as $row){
         if($row->PIB == ($this->request->getVar('PIB'))){
           return $this->registrujvrtic( 'Vrtic sa ovim PIb-om već postoji');
         }
        }
        $VrticModel=new VrticModel();
        $VrticModel->insert([
            'naziv'=>$this->request->getVar('naziv'),
            'PIB'=>$this->request->getVar('PIB'),
            'adresa'=>$this->request->getVar('adresa'),
            'email'=>$this->request->getVar('email'),
            'brojTel'=>$this->request->getVar('brojTel'),
        ]);
        return redirect()->to(site_url("/Gost"));


    }


    public function kreirajnalogSubmit($vrtici=null, $vecpostoji=null) {
      $VrticModel=new VrticModel();
        $vrtici=$VrticModel->findAll();
        foreach($vrtici as $row){
          if($row->naziv == ($this->request->getVar('vrtici'))){
            $p=$row->PIB;
          }
        }
        if(!$this->validate([
            'potvrda' =>[
                'label'=>'potvrda',
                'rules'=>'required|matches[lozinka]',
                'errors'=>[
                  'required'=>'Ovo polje je obavezno',
                  'matches[lozinka]'=>'Lozinke se ne podudaraju'  
                ]
            ],
              'imeKor' =>[
                'label'=>'imeKor',
                'rules'=>'required',
                'errors'=>[
                  'required'=>'Ovo polje je obavezno'  
                ]
            ],
                 'prezimeKor' =>[
                'label'=>'prezimeKor',
                'rules'=>'required',
                'errors'=>[
                  'required'=>'Ovo polje je obavezno'  
                ]
            ],
                 'adresa' =>[
                'label'=>'adresa',
                'rules'=>'required',
                'errors'=>[
                  'required'=>'Ovo polje je obavezno'
                 
                ]
            ],
                 'email' =>[
                'label'=>'email',
                'rules'=>'required|valid_email',
                'errors'=>[
                  'required'=>'Ovo polje je obavezno' ,
                  'valid_email'=>'E-mail mora da bude u dobrom formatu'  
                ]
            ],
             'brojTel' =>[
                'label'=>'brojTel',
                'rules'=>'required|min_length[9]|max_length[15]',
                'errors'=>[
                  'required'=>'Ovo polje je obavezno' ,
                  'min_lenght[9]'=>'Broj telefona mora imati najmanje 9 cifara'  
                ]
             ],
                'lozinka' =>[
                        'label'=>'lozinka',
                        'rules'=>'required',
                        'errors'=>[
                          'required'=>'Ovo polje je obavezno',  
                        ]
                    ], 
                        'tipNaloga' =>[
                            'label'=>'tipNaloga',
                            'rules'=>'required',
                            'errors'=>[
                              'required'=>'Ovo polje je obavezno'  
                            ]
                        ],  
       ])) return $this->prikaz('kreirajnalog', ['vrtici'=>$vrtici, 'errors'=>$this->validator->getErrors()]);
      
       $KorisnikModel2=new KorisnikModel();
       $korisnici=$KorisnikModel2->findAll();
       foreach($korisnici as $row){
         if($row->email == ($this->request->getVar('email'))){
           return $this->kreirajnalog($vrtici, 'Korisnik sa ovom email adresom vec postoji, da li želite da se prijavite?');
         }
        $KorisnikModel=new KorisnikModel();
        $KorisnikModel->insert([
            'PIB'=>$p,
            'imeKor'=>$this->request->getVar('imeKor'),
            'prezimeKor'=>$this->request->getVar('prezimeKor'),
            'adresa'=>$this->request->getVar('adresa'),
            'email'=>$this->request->getVar('email'),
            'brojTel'=>$this->request->getVar('brojTel'),
            'lozinka'=>$this->request->getVar('lozinka'),
            'tipNaloga'=>$this->request->getVar('tipNaloga')
        ]);
        return redirect()->to(site_url("/Gost"));
      }
    }

    public function prijavimeSubmit(){
        
        if(!$this->validate(['email'=>'required', 'lozinka'=>'required'])){
            return $this->prikaz('prijavime', 
                ['errors'=>$this->validator->getErrors()]);
        }
        $korisnikModel=new KorisnikModel();
        $korisnik=$korisnikModel->find($this->request->getVar('email'));
        if($korisnik==null)
            return $this->prijavime('Korisnik ne postoji; Kliknite za registraciju!', null);
        if($korisnik->lozinka!=$this->request->getVar('lozinka'))
            return $this->prijavime(null, 'Pogresna lozinka');
        
        $this->session->set('korisnik', $korisnik);
        switch ($korisnik->tipNaloga){
            case 'R': return redirect()->to(site_url('roditelj'));
            case 'D': return redirect()->to(site_url('direktor'));
            case 'V': return redirect()->to(site_url('vaspitac'));
        }
    }

    
}