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
                            <a class="nav-link active" href="#" aria-current="page" onclick= myFunction()><b>Info</b></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" onclick= myFunction2()><b>Izmeni nalog</b></a>
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





        <div class="row">
            <div class="col-12 col-md-4 offset-md-4 text-center">
                <h2><u>Direktor-Moj nalog-dfghjk</u></h2>
                <div class="col-12 offset-md-2 mb-3 text-center" id="informacije">
                    <table>
                        <tr>
                            <td>
                                <b>Ime i prezime:</b>
                            </td>
                            <td>
                                Jasmina Katić 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>JMBG:</b>
                            </td>
                            <td>
                                2211987654123
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Datum rođenja:</b>
                            </td>
                            <td>
                               22.11.1987.
                            </td>
                        </tr>
                        <tr>
                            <td>
                              <b> E-mail: </b>
                            </td>
                            <td>
                                jasminakatic@gmail.com
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Adresa stanovanja: </b>
                            </td>
                            <td>
                               Makedonska 3, Pančevo, Srbija
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Broj licence: </b>
                            </td>
                            <td>
                               111765
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-12 text-center" id="alatke-izmeni">
                    <div class="row">
                      <div class="mt-3 mb-3">
                       <h3><i>Alatke-Izmeni grupu</i></h3>
                    </div>
                    <form action="" method="">
                        <div class="mb-6">
                            <label for="sta" class="form-label">Izmeni grupu</label>
                              <select>
                                <option>Grupa 12</option>
                                <option>Grupa 2</option>
                                <option>Grupa 7</option>
                                  <option>Grupa 5</option>
                              </select>
                          </div>
                        <div class="mb-6">
                            <button class="btn btn-success">Dodaj</button>  <button class="btn btn-danger">Izbaci</button>
                          </div>
                          <div class="mb-3">
                            <select>
                                <option>Dete</option>
                                <option>Vaspitač</option>
                              </select>
                              <select>
                                <option>Dete</option>
                                <option>Vaspitač</option>
                              </select>
                          </div>
                        <div class="mb-3">
                          <label for="korime" class="form-label">JMBG:</label>
                          <input type="text"disabled>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-info mb-3" id="promeni">Promeni</button>
                      </form>

                    </div>
                </div>


                <div class="col-12 text-center" id="alatke-stranica" style="border:1px solid black;">
                    <div class="row" >
                      <div class="mt-3 mb-3">
                       <h3><i>Alatke-Kreiraj stranicu</i></h3>
                    </div>
                    <div class="row">
                        <div class="col-md-4 offset-md-5 mb-3">
                            Izaberi tip naloga:
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 offset-md-5 mb-3">
                            <select name="Izaberi tip naloga">
                              <option>Dete</option>
                              <option>Vaspitač</option>
                              <option>Roditelj</option>
                              
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 offset-md-3 mb-3">
                            Ime:
                        </div>
                        <div class="col-md-3 mb-3">
                            <input type="text" id="ime" name="ime" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 offset-md-3 mb-3">
                            Uzrast:
                        </div>
                        <div class="col-md-3 mb-3">
                            <input type="text" id="uzrast" name="uzrast" >
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-3 offset-md-3 mb-3">
                            Ime:
                        </div>
                        <div class="col-md-3 mb-3">
                            <input type="text" id="ime" name="ime" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 offset-md-3 mb-3">
                            Prezime:
                        </div>
                        <div class="col-md-3 mb-3">
                            <input type="text" id="ime" name="Prezime" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 offset-md-3 mb-3">
                            Adresa:
                        </div>
                        <div class="col-md-3 mb-3">
                            <input type="text" id="ime" name="adresa" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 offset-md-3 mb-3">
                            Broj telefona:
                        </div>
                        <div class="col-md-3 mb-3">
                            <input type="text" id="ime" name="broj" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 offset-md-3 mb-3">
                            e-mail:
                        </div>
                        <div class="col-md-3 mb-3">
                            <input type="text" id="ime" name="email" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 offset-md-3 mb-3">
                            Lozinka:
                        </div>
                        <div class="col-md-3 mb-3">
                            <input type="text" id="ime" name="lozinka" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 offset-md-3 mb-3">
                            Potvrda lozinke:
                        </div>
                        <div class="col-md-3 mb-3">
                            <input type="text" id="ime" name="potvrdalozinke" >
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-6 offset-md-4">
                            <button class="btn btn-success">Potvrdi</button> <button class="btn btn-danger">Odustani</button>
                        </div>
                    </div>

                    </div>
                </div>


                    </div>
                </div>
      </div>
  </body>
</html>