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
      label {
        display: block;
        text-align: center;
      }

      .submit-btn {
        width: 100%;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#">Meditation Timer</a>
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

    <div class="container mt-5">
      <div class="row pt-5">
          <div class="col-1 col-sm-3"></div>
          <div class="col-10 col-sm-6">
            <h1 class="text-center">Meditation Timer</h1>
            <p class="text-center mt-3 mb-4">Meditation can wipe away the day's stress, bringing with it inner peace. Take a break now and let your stress melt away!</p>

            <!-- form section starts here -->
            <form action="counter.php" method="get">
              <div class="form-group mt-4">
                <label for="controlRange"><h5><b>Set Duration</b></h5></label>
                <input type="range" min="1" max="15" value="5" class="form-control-range pt-2 pb-2" id="myRange" name="myRange">
              </div>
              <p class="text-center">Duration: <b><span id="duration">5</span> mins</b></p>
              <button type="submit" class="submit-btn btn btn-primary btn-lg">Meditate</button>
            </form>
            <!-- form section ends here -->

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
  var slider = document.getElementById("myRange");
  var output = document.getElementById("duration");

  slider.oninput = function() {
    output.innerHTML = this.value;
  }
</script>