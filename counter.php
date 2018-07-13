<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Simple Meditation Timer</title>
    <style>
      .circle {
        width: 100px;
        height: 100px;
        background-color: #ADD8E6;
        margin: 0 auto;
        border-radius: 50%;
        margin-top: 130px;
        -webkit-animation: breathing 7s ease-out infinite normal;
        animation: breathing 7s ease-out infinite normal;
      }

      @-webkit-keyframes breathing {
      0% {
        -webkit-transform: scale(3);
        transform: scale(3);
      }

      50% {
        -webkit-transform: scale(1);
        transform: scale(1);
      }

      80% {
        -webkit-transform: scale(3);
        transform: scale(3);
      }

      100% {
        -webkit-transform: scale(3);
        transform: scale(3);
      }
    }

    @keyframes breathing {
      0% {
        -webkit-transform: scale(3);
        -ms-transform: scale(3);
        transform: scale(3);
      }

      50% {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
      }

      80% {
        -webkit-transform: scale(3);
        transform: scale(3);
      }

      100% {
        -webkit-transform: scale(3);
        -ms-transform: scale(3);
        transform: scale(3);
      }
    }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#">Simple Meditation Timer</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="http://limzhiyang.com/codetolearn/" target="_blank">Code to Learn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://limzhiyang.com/profile/" target="_blank">About Me</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container mt-3">
      <div class="row pt-5">
          <div class="col-1 col-sm-3"></div>
          <div class="col-10 col-sm-6">
            <h2 class="text-center"><div id="myTimer"></div></h2>
            <div class="circle"></div>
          </div>
          <div class="col-1 col-sm-3"></div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>

<script>
var currURL = window.location.href;
var url = new URL(currURL);
var myRange = url.searchParams.get("myRange");


/* Code for timer */
document.getElementById('myTimer').innerHTML = myRange + ":00";

startTimer();

function startTimer() {
  var presentTime = document.getElementById('myTimer').innerHTML;
  var timeArray = presentTime.split(":");
  //console.log(timeArray);
  
  var min = timeArray[0];
  var sec = checkSecond((timeArray[1] - 1));
  //console.log("min: " + min);
  //console.log("sec: " + sec);

  // when second counter return to 59 minute minus 1
  if (sec == 59) {
    min = min - 1;
  } 

  if (min < 0) {
    window.history.back();
  }

  document.getElementById("myTimer").innerHTML = min + ":" + sec;
    //run the function every 1 second
    setTimeout(startTimer, 1000);
  }

  function checkSecond(sec) {
    //if second reaches 9, add a zero in front of the number
    if (sec < 10 && sec >= 0) {
      sec = "0" + sec;
    //if second reaches 0, set second to 59 seconds again
    } else if (sec < 0) {
      sec = "59";
    }
    return sec;
  }

  // https://codepen.io/ishanbakshi/pen/pgzNMv
</script>