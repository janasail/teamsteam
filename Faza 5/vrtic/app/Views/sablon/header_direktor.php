<!---<html>
    <head>
        <title>Moj vrtić</title>
    </head>
    <body>
        <div style="float: right">
            <?= anchor("Direktor/login", "Uloguj se") ?>
        </div>
        <br>
        <hr> --->   


        
<!-- Milica Krneta -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stil.css">
    <title>Steam</title>
    <link rel = "icon" href = "Steam.png" type = "image/x-icon">
    <style>
        tr:nth-child(even) {
    background-color: #f2f2f2;
  }
      </style>
  </head>
  <body>
    <script language="JavaScript">
        function myFunction() {
  var x = document.getElementById("informacije");
  var y = document.getElementById("alatke-izmeni");
  var z = document.getElementById("alatke-stranica");

    x.style.display = "block";
    y.style.display = "none";
    z.style.display = "none";

}

function myFunction2() {
  var x = document.getElementById("informacije");
  var y = document.getElementById("alatke-izmeni");
  var z = document.getElementById("alatke-stranica");

    x.style.display = "none";
    y.style.display = "block";
    z.style.display = "none";

}

function myFunction3() {
  var x = document.getElementById("informacije");
  var y = document.getElementById("alatke-izmeni");
  var z = document.getElementById("alatke-stranica");

    x.style.display = "none";
    y.style.display = "none";
    z.style.display = "block";

}


      </script>

      <div class="container-fluid">
        <div class="row" id="navigacija">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-time">
                                <img src="mojvrtic.png" width="80" height="60">
    
                              </li>
                          <li class="nav-item">
                            <?= anchor("Direktor/index", "Info") ?> 
                          </li>
                          <li class="nav-item">
                          <?= anchor("Direktor/login", "Izmeni nalog") ?>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" onclick= myFunction3()><b>Kreiraj stranicu</b></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>