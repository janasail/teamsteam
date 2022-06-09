
    <link rel="stylesheet" href="./nicepage.css">
  <link rel="stylesheet" href="./kreiraj-nalog.css">
  <script src="<?php echo base_url('./js/nicepage.js');?>" ></script>
  <script src="<?php echo base_url('./js/jquery.js');?>" ></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('./css/nicepage.css'); ?> ">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('./css/kreiraj-nalog.css'); ?> ">
  <script>

function myFunction() {
  var select = document.createElement("select");
  select.name = "vrtici";
  select.id = "vrtici"

  <?php
$niz=array();
  foreach($vrtici as $row){
    array_push($niz,$row->naziv);
  } ?>

var values= <?php echo json_encode($niz); ?>;

 for (const val of values)
 {
     var option = document.createElement("option");
     option.value = val;
     option.text = val.charAt(0).toUpperCase() + val.slice(1);
     select.appendChild(option);
 }

 var label = document.createElement("label");

 document.getElementById('container').appendChild(label).appendChild(select); 
}

window.onload = myFunction;
  </script>
    
    <section class="u-align-left u-clearfix u-image u-section-1" src="" data-image-width="1500" data-image-height="1000" id="sec-f4ba">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h1 class="u-text u-text-default u-text-palette-4-dark-2 u-text-1">Kreiraj nalog</h1>
            <div class="u-expanded-width u-table u-table-responsive u-table-1">
            <form name="loginform" action="<?= site_url("Gost/kreirajnalogSubmit") ?>" method="post">
              <table class="u-table-entity">
                <colgroup>
                  <col width="50%">
                  <col width="50%">
                </colgroup>
                <tbody class="u-align-center u-custom-color-4 u-table-alt-white u-table-body u-table-body-1">
                  <tr style="height: 60px;">
                    <td class="u-table-cell"> 
                      Izaberi vrtić:
                    </td>
                    <td class="u-table-cell" id="container">
                    </td>
                  </tr>
                  <tr style="height: 60px;">
                    <td class="u-table-cell">Izaberi tip naloga:</td>
                    <td class="u-table-cell"><select name="tipNaloga" value="<?= set_value('tipNaloga') ?>">
                      <option value="D">Direktor</option>
                      <option value="V">Vaspitač</option>
                      <option value="R">Roditelj</option>
                    </select></td>
                  </tr>
                  <tr style="height: 60px;">
                    <td class="u-table-cell">Ime:</td>
                    <td class="u-table-cell"><input type="text" name="imeKor" value="<?= set_value('imeKor') ?>"></td>
                    <td> <p style="color:red"> <?php if(!empty($errors['imeKor']))  echo $errors['imeKor']; ?></p> </td>
                  </tr>
                  <tr style="height: 60px;">
                    <td class="u-table-cell">Prezime:</td>
                    <td class="u-table-cell"><input type="text" name="prezimeKor" value="<?= set_value('prezimeKor') ?>" ></td>
                    <td> <p style="color:red"> <?php if(!empty($errors['prezimeKor']))  echo $errors['prezimeKor']; ?></p> </td>
                  </tr>
                  <tr style="height: 60px;">
                    <td class="u-table-cell">Adresa:</td>
                    <td class="u-table-cell"><input type="text" name="adresa" value="<?= set_value('adresa') ?>" ></td>
                    <td> <p style="color:red"> <?php if(!empty($errors['adresa']))  echo $errors['adresa']; ?></p> </td>
                  </tr>
                  <tr style="height: 60px;">
                    <td class="u-table-cell">Broj telefona:</td>
                    <td class="u-table-cell"><input type="text" name="brojTel" value="<?= set_value('brojTel') ?>" ></td>
                    <td> <p style="color:red"> <?php if(!empty($errors['brojTel']))  echo $errors['brojTel']; ?></p> </td>
                  </tr>
                  <tr style="height: 60px;">
                    <td class="u-table-cell">E-mail:</td>
                    <td class="u-table-cell"><input type="text" name="email" value="<?= set_value('email') ?>" ></td>
                    <td> <p style="color:red"> <?php if(!empty($errors['email']))  echo $errors['email']; ?></p> </td>
                  </tr>
                  <tr style="height: 60px;">
                    <td class="u-table-cell">Lozinka:</td>
                    <td class="u-table-cell"><input type="password" name="lozinka" value="<?= set_value('lozinka') ?>" ></td>
                    <td> <p style="color:red"> <?php if(!empty($errors['lozinka']))  echo $errors['lozinka']; ?></p> </td>
                  </tr>
                  <tr style="height: 60px;">
                    <td class="u-table-cell"> Potvrda lozinke:</td>
                    <td class="u-table-cell"><input type="password" name="potvrda" value="<?= set_value('potvrda') ?>" ></td>
                    <td> <p style="color:red"> <?php if(!empty($errors['potvrda']))  echo $errors['potvrda']; ?></p> </td>
                  </tr>  
                </tbody>
              </table>
              <a href="prijavime"> <?php if(isset($vecpostoji)) echo "<font color='red'>$vecpostoji</font><br>"; ?>  </a>
              <input type="submit" value="Potvrdi" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-3 u-hover-feature u-radius-9 u-btn-1">
              <a href="/Gost" class="u-btn u-btn-round u-button-style u-hover-feature u-hover-palette-2-dark-2 u-palette-2-dark-1 u-radius-6 u-btn-2">Odustani</a>
             </form>
            </div>
          </div>
        </div>
      </div>
      
      
    </section>
    