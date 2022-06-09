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
        function myFunction() {
  var x = document.getElementById("informacije");
  var y = document.getElementById("komentari");
  var z = document.getElementById("sadrzaj");

    x.style.display = "block";
    y.style.display = "none";
    z.style.display = "none";

}

function myFunction2() {
  var x = document.getElementById("informacije");
  var y = document.getElementById("komentari");
  var z = document.getElementById("sadrzaj");

    x.style.display = "none";
    y.style.display = "block";
    z.style.display = "none";

}
function myFunction3() {
  var x = document.getElementById("informacije");
  var y = document.getElementById("komentari");
  var z = document.getElementById("sadrzaj");

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
                            <a class="nav-link active" href="#" aria-current="page" onclick= myFunction()><b>Info</b></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" onclick= myFunction2()><b>Komentari</b></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" onclick= myFunction3()><b>Sadrzaj</b></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>





        <div class="row">
            <div class="col-12 col-md-4 offset-md-4 text-center">
                <h2>Grupa 5</h2>
                <div class="col-12 offset-md-2 mb-3 text-center" id="informacije">
                    <table>
                        <tr>
                            <td>
                                <b>Vaspitačica:</b>
                            </td>
                            <td>
                                Nina Milin 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Početak nastave:</b>
                            </td>
                            <td>
                                08h, svakog radnog dana
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Broj polaznika:</b>
                            </td>
                            <td>
                                24
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-12 text-center" id="komentari">
                    <div class="row">
                      <div class="mt-3 mb-3">
                       <h2><i>Ovonedeljni komentari</i></h2>
                    </div>
                    <div class="row">
                      <div class="mb-3">
                        <table width="100%">
                          <tr>
                            <td colspan="4">
                             <b>DIREKTOR</b>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="4">
                            Vrtić neće raditi sledećeg ponedeljka zbog državnog praznika!
                            </td>
                          </tr>
                          <tr>
                            <td colspan="2">
                             <b> Vaspitačica Maja </b>
                            </td>
                            <td colspan="2">
                             <b> Vaspitačica Dijana </b>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="2">
                                 Grupa 5 ima izlozbu sutra!
                            </td>
                            <td colspan="2">
                              Molim sve roditelje da se oglase povodom izleta
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <b>Mama Milenković </b>
                            </td>
                            <td>
                            <b>  Anja Jokić </b>
                            </td>
                            <td>
                             <b> Slađa </b>
                            </td>
                            <td>
                             <b> Nikolina mama </b>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Vidimo se sutra!
                            </td>
                            <td>
                              Hvala Vam
                            </td>
                            <td>
                              SUper
                            </td>
                            <td>
                              Nikola je bolestan
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    </div>
                </div>

                <div class="col-12 offset-md-2 mb-3 text-center" id="sadrzaj">
                    <table>
                        <tr>
                            <td>
                                <b>Nina Milin:</b>
                            </td>
                            <td>
                                <b>Direktor:</b>
                            </td>
                            <td>
                                Adrea:
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="vrtic1.jpg" width="100" height="100">
                            </td>
                            <td>
                                <img src="vrtic2.jpg" width="100" height="100">
                            </td>
                            <td>
                                <img src="vrtic3.jpg" width="100" height="100">
                            </td>
                        </tr>
                    </table>
                </div>

                    <div class="mb-3">
                        <button class="btn btn-secondary"><a class="nav-link active" style="color: black;"  href="Postavi-komentar.html">Dodaj komentar</a></button>
                      </div>
                    <div class="mb-3">
                        <button class="btn btn-info"><a class="nav-link active" style="color: black;"  href="Postavi-sadrzaj.html">Dodaj sadržaj</a></button>
                      </div>
                    </div>
                </div>
      </div>
  </body>
</html>