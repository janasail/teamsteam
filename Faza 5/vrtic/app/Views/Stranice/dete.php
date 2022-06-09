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
  var y = document.getElementById("komentari");

    x.style.display = "block";
    y.style.display = "none";

}

function myFunction2() {
  var x = document.getElementById("informacije");
  var y = document.getElementById("komentari");

    x.style.display = "none";
    y.style.display = "block"

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
                            <a class="nav-link active" href="#" aria-current="page" onclick= myFunction()> <b> Info</b></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" onclick= myFunction2()><b>Komentari</b></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>





        <div class="row">
            <div class="col-12 col-md-4 offset-md-4 text-center">
                <h2>Polaznik grupe</h2>
                <div class="mb-3" id="informacije">
                    <table class="table-strpped">
                        <tr>
                            <td>
                                <b>Ime i prezime:</b>
                            </td>
                            <td>
                               Nikola Nikolić 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>JMBG:</b>
                            </td>
                            <td>
                                25060007865111
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Datum rođenja:</b>
                            </td>
                            <td>
                                25.06.2007.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Roditelji:</b>
                            </td>
                            <td>
                                Maja Nikolić, Nenad Nikolić
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <b> E-mail roditelja: </b>
                            </td>
                            <td>
                                maja@gmail.com, nnikol@gmail.com
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Adresa stanovanja: </b>
                            </td>
                            <td>
                                Oslobođenja 44, Beograd, Srbija
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="komentari" >
               
                    <div class="text-center">
                        <div class="card-body">
                          <h5 class="card-title">Datum: 27.2.2022. </h5>
                          <p class="card-text"> Nikola je nacrtao prelep crtež za izložbu</p>
                        </div>
                        <div class="card-footer text-muted">
                            Napisao/la: <b>Vaspitača Nina</b>
                        </div>
                      </div>
                  <div class="text-center">
                    <div class="card-body">
                      <h5 class="card-title">Datum: 1.2.2022. </h5>
                      <p class="card-text"> Nikola se razboleo</p>
                    </div>
                    <div class="card-footer text-muted">
                        Napisao/la: <b>Mama Maja</b>
                    </div>
                  </div>
              </div>

                    <div class="mb-3">
                        <button class="btn btn-secondary"><a class="nav-link active" style="color: black;"  href="Postavi-komentar.html">Dodaj komentar</a></button>
                      </div>
                    <div class="mb-3">
                        <button class="btn btn-info"><a class="nav-link active" style="color: black;" href="Postavi-sadrzaj.html">Dodaj sadržaj</a></button>
                      </div>
                    </div>
                </div>
      </div>
  </body>
</html>