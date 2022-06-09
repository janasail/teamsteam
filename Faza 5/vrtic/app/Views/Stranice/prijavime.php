
  <link rel="stylesheet" href="./nicepage.css">
  <link rel="stylesheet" href="./prijavi-me.css">
  <script src="<?php echo base_url('./js/nicepage.js');?>" ></script>
  <script src="<?php echo base_url('./js/jquery.js');?>" ></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('./css/nicepage.css'); ?> ">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('./css/prijavi-me.css'); ?> ">


            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-left u-clearfix u-image u-section-1" src="" data-image-width="1500" data-image-height="1000" id="sec-f4ba">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h1 class="u-text u-text-default u-text-palette-4-dark-2 u-text-1">Prijavi me</h1>
            <div class="container-fluid">
              <div class="row">
                  <div class="col-12 col-md-4 offset-md-4 text-center">
                      <div class="row">
                    
      <form name="loginform" action="<?= site_url("Gost/prijavimeSubmit") ?>" method="post">
      <table>
        <tr>
          <td>E-mail:</td>
          <td><input type="text" name="email" value="<?= set_value('email') ?>"/></td>
          <td> <p style="color:red"> <?php if(!empty($errors['email']))  echo $errors['email']; ?></p> </td>
        </tr>
        <tr>
          <td>Lozinka:</td>
          <td><input type="password" name="lozinka"/></td>
          <td> <p style="color:red"> <?php if(!empty($errors['lozinka']))  echo $errors['lozinka']; ?></p> </td>
      </table>
      <div class="row">
        <div class="">
       <a href="Gost/"> <?php if(isset($poruka)) echo "<font color='red'>$poruka</font><br>"; ?>  </a>
        <?php if(isset($poruka1)) echo "<font color='red'>$poruka1</font><br>"; ?>
          <input type="submit" value="Prijavi me"  class="u-border-none u-btn u-btn-round u-button-style u-custom-color-2 u-hover-custom-color-3 u-hover-feature u-radius-9 u-btn-1"/>
        </div>
      </div>
</form>    
    </section>