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
        tr:nth-child(odd) {
    background-color: #f2f2f2;
  }
      </style>
  </head>
  <body>
    <script language="JavaScript">
      window.onload = function() {
  document.getElementById("grupa").style.display = "none";
};
        function myFunction() {
  var x = document.getElementById("informacije");
  var y = document.getElementById("grupa");

    x.style.display = "block";
    y.style.display = "none";

}

function myFunction2() {
  var x = document.getElementById("informacije");
  var y = document.getElementById("grupa");
    x.style.display = "none";
    y.style.display = "block";

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
                            <a class="nav-link active" href="#" aria-current="page" onclick= myFunction()><b>Info</b></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" onclick= myFunction2()><b>Moja grupa</b></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>





        <div class="row">
            <div class="col-12 col-md-4 offset-md-4 text-center">
                <h2>Vaspitač-Moj nalog</h2>
                <div class="col-12 mb-3 text-center" id="informacije">
                    <table>
                        <tr>
                            <td>
                                <b>Ime i prezime:</b>
                            </td>
                            <td>
                                Nina Milin 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>JMBG:</b>
                            </td>
                            <td>
                                1312999765234
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Datum rođenja:</b>
                            </td>
                            <td>
                                13.12.1999.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Moja grupa:</b>
                            </td>
                            <td>
                                Grupa 5
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <b> E-mail: </b>
                            </td>
                            <td>
                                niki@gmail.com
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Adresa stanovanja: </b>
                            </td>
                            <td>
                               Bulevar Kralja Aleksandra 2, Beograd, Srbija
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Broj licence: </b>
                            </td>
                            <td>
                               846282072
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-12 text-center" id="grupa">
                    <div class="row">
                      <div class="mt-3 mb-3">
                       <h3><i>Moja grupa</i></h3>
                    </div>
                      <div>
                        <a class="nav-link active" href="Grupa.html" aria-current="page">Grupa 5</a>
                      </div>
                    </div>
                </div>

                    </div>
                </div>
      </div>
  </body>
</html>