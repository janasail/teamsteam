<link rel="stylesheet" href="./nicepage-rod.css">
   <link rel="stylesheet" href="./roditelj.css">
   <script src="<?php echo base_url('./js/nicepage.js');?>" ></script>
   <script src="<?php echo base_url('./js/jquery.js');?>" ></script>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('./css/nicepage-rod.css'); ?> ">
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('./css/roditelj.css'); ?> ">


   <script>
    function function1() {
      var ul = document.createElement("ul");
      ul.name = "lista";
      ul.id = "lista"
    <?php 
    $niz=array();  
    $niz2=array();  
   
    foreach($dete as $row){
      if(($row->jmbgRod1) == $r){
        array_push($niz,$row->imeDet);
        array_push($niz2,$row->idDet);

      }
      if(($row->jmbgRod2) == $r){
        array_push($niz,$row->imeDet);
        array_push($niz2,$row->idDet);
      } 
    }   //isprobati da se dohvati id deteta i da se on stavi u name ili tako nesto i onda preko toga da se dohvata u roditelju pa u session
    ?>
    var values= <?php echo json_encode($niz); ?>;
    var values2= <?php echo json_encode($niz2); ?>;
    /*for (const val of values)
    {
      var input= document.createElement("input");
      //input.appendChild(document.createTextNode(val));
      input.type="submit";
      input.name=1;
      input.value=val;
      var li = document.createElement("li");
      li.appendChild(input);
      ul.appendChild(li);
    }*/

    values.forEach((num1, index) => {
        const num2 = values2[index];
        var input= document.createElement("input");
        input.type="submit";
        input.name="imeDet";
        input.value=num1;
        var li = document.createElement("li");
        li.appendChild(input);
        ul.appendChild(li);
    });


    

      var label = document.createElement("label");

document.getElementById('linkovi').appendChild(label).appendChild(ul); 
}

   </script>

<section class="u-align-center u-clearfix u-palette-3-light-2 u-section-1" id="carousel_4e08">
  <div class="u-clearfix u-sheet u-sheet-1">
    <p class="u-text u-text-1">Moj nalog</p>
    <div class="u-list u-list-1">
      <div class="u-repeater u-repeater-1">
        <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white">
          <div class="u-container-layout u-similar-container u-container-layout-1">
            <img class="u-image u-image-default u-preserve-proportions u-image-1" src="images/profil2.jpg" alt="" data-image-width="230" data-image-height="230">
            <h3 class="u-align-left u-text u-text-default u-text-palette-2-base u-text-2"> <?php  echo $korisnik->imeKor." ".$korisnik->prezimeKor." "; ?></h3>
            <div class="col-12 text-center" id="deca">
                    <div class="row">
                    <form name="roditeljDete" action="<?= site_url("Roditelj/roditeljDete") ?>" method="post">
                      <div id="linkovi">
                      </div>
                    </form>
                    </div>
                </div>
            <div class="u-table u-table-responsive u-table-1" id="informacije">
              <table class="u-table-entity">
                <colgroup>
                  <col width="50%">
                  <col width="50%">
                </colgroup>
                <tbody class="u-table-body">
                  <tr style="height: 47px;">
                    <td class="u-table-cell">E-mail:</td>
                    <td class="u-table-cell"> <?php  echo $korisnik->email?>  </td>
                  </tr>
                  <tr style="height: 47px;">
                    <td class="u-table-cell">Adresa:</td>
                    <td class="u-table-cell"> <?php  echo $korisnik->adresa?> </td>
                  </tr>
                </tbody>
              </table>
            </div><span class="u-file-icon u-icon u-icon-1"><img src="images/149028.png" alt=""></span>
            <form name="izlogujSe" action="<?= site_url("Roditelj/izlogujSe") ?>" method="post">
            <input type="submit" value="Odjavi me" class="u-align-left   u-text-palette-2-light-1 u-text-3">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
