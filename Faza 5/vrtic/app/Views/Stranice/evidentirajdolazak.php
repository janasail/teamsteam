<!-- Milica Krneta -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Steam</title>
    <link rel = "icon" href = "Steam.png" type = "image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stil.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"></script>
</head>
<body onload="startTime()" style="background-color:grey ">
    <script>
        $( document ).ready(function() {
            let cardElement = document.querySelector(".card");
            
            cardElement.addEventListener("click", flip);
            
            function flip(){
                cardElement.classList.toggle("flipped")
            }
        });
            
            function startTime() {
                var weekday = new Array();
                weekday[0] =  "Sunday";
                weekday[1] = "Monday";
                weekday[2] = "Tuesday";
                weekday[3] = "Wednesday";
                weekday[4] = "Thursday";
                weekday[5] = "Friday";
    weekday[6] = "Saturday";
    var month = new Array();
    month[0] = "Januar";
    month[1] = "Februar";
    month[2] = "Mart";
    month[3] = "April";
    month[4] = "Maj";
    month[5] = "Jun";
    month[6] = "Jul";
    month[7] = "Avgust";
    month[8] = "Septembar";
    month[9] = "Oktobar";
    month[10] = "Novembar";
    month[11] = "Decembar";
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    var d = today.getDate();
    var y = today.getFullYear();
    var wd = weekday[today.getDay()];
    var mt = month[today.getMonth()];
    
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('date').innerHTML = d;
 document.getElementById('day').html =
    wd;
 document.getElementById('month').innerHTML =
    mt + "/" + y;
    
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};
    return i;

}

function myFunction() {
var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
var dateTime = date+' '+time;
    if ( document.getElementById("r1").checked){
          document.getElementById('nazad').innerHTML =date;
          document.getElementById('nazad2').innerHTML ="Nikola Nikolić je došao u " + time;
          document.getElementById(today.getDate()).style.color = "green";
        }else if(document.getElementById("r2").checked) { 
            document.getElementById('nazad').innerHTML = date;
            document.getElementById('nazad2').innerHTML ="Nikola Nikolić je otišao u " + time;
        } else if( document.getElementById("r3").checked) {
            document.getElementById('nazad').innerHTML = date;
            document.getElementById('nazad2').innerHTML ="Nikola Nikolić je odsutan";
            document.getElementById(today.getDate()).style.color = "red";
        }

    }

    </script>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-4 offset-md-4 text-center">
        <h2>Evidentiraj dolazak</h2>
        <h3 id="glupost"></h3>
        <h4><i>Polaznik: </i> Nikola Nikolić</h4>
     Došao/la<input type="radio" name="dolazak" id="r1">
     Otišao/la<input type="radio" name="dolazak" id ="r2" >
     Odsutan/na<input type="radio" name="dolazak" id="r3">
     <br>
     <button onclick="myFunction()">Potvrdi</button>
     </div>
     </div>
        <div class="card">
          <div class="front">
            <div class="contentfront">
              <div class="month">
                <table>
                  <tr class="whiteTr">
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th id="1" style="color: red;">1</th>
                    <th id="2" style="color: green;">2</th>
                    <th id="3" style="color: red;">3</th>
                  </tr>
                  <tr class="whiteTr">
                    <th id="4">4</th>
                    <th id="5">5</th>
                    <th id="6">6</th>
                    <th id="7">7</th>
                    <th id="8">8</th>
                    <th id="9">9</th>
                    <th id="10">10</th>
                  </tr>
                  <tr class="whiteTr">
                    <th id="11">11</th>
                    <th id="12">12</th>
                    <th id="13">13</th>
                    <th id="14">14</th>
                    <th id="15">15</th>
                    <th id="16">16</th>
                    <th id="17">17</th>
                  </tr>
                  <tr class="whiteTr">
                    <th id="18">18</th>
                    <th id="19">19</th>
                    <th id="20">20</th>
                    <th id="21">21</th>
                    <th id="22">22</th>
                    <th id="23">23</th>
                    <th id="24">24</th>
                  </tr>
                  <tr class="whiteTr">
                    <th id="25">25</th>
                    <th id="26">26</th>
                    <th id="27">27</th>
                    <th id="28">28</th>
                    <th id="29">29</th>
                    <th id="30">30</th>
                    <th></th>
                  </tr>
                </table>
              </div>
              <div class="date">
                <div class="datecont">
                  <div id="date"></div>
                  <div id="day"></div>
                  <div id="month"></div>
                  <i class="fa fa-pencil edit" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="back">
            <div class="contentback">
              <div class="backcontainer">
                  <p id="nazad"></p>
                  <p id="nazad2"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      </div>
  </body>
</html>