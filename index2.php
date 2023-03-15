<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="shortcut icon" type="image/png" href="img/logo.png">
    <title>FitnessFiver</title>

</head>

<body>
  <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
    <a class="navbar-brand" href="index2.php">
      <img src="img/logo.png" width="30" height="30" class="d-inline-block border border-light align-top rounded"
        alt="logo">
      FitnessFiver
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index2.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="yoga.php">Yoga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gym.php">Gym</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="diet.php">Diet</a>
        </li>        
      </ul>
        <form class="form-inline my-2 my-lg-0" action ="logoutindex.php">
        <p>&nbsp;&nbsp;&nbsp;</p>
        <button class="btn btn-outline-success my-3 my-sm-0" type="submit">Log Out</button></form>
    </div>
  </nav>



  <section class="background firstsection" id="home">
    <h6 class="alert alert-success">Welcome, <?php echo $_SESSION['name'];?></h6>
    <div class="boxmain">
      <div class="fhalf">
        <h2 class="font-weight-bold text-left text-monospace">Fitness Fiver</h2>
        <p class="lead text-left text-monospace">Gyms Near Me</p>
        <div class="buttons">
            <a class="btn btn-success" href="https://tinyurl.com/fndgym" role="button">Find</a>
        </div>
      </div>
      <div class="shalf">
        <img src="img/FitnessFiver.gif" alt="logo" class="rounded-circle">
      </div>
    </div>
  </section>

  <section id="property">
    <hr>
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="img/gym.jpg" alt="logo">
              <div class="card-body">
                <h4>GYM</h4>
                <p class="card-text">"A few months back I had trouble climbing four steps, now I can't wait to take the field. It is like starting a new life." - Yuvraj Singh</span></p>
                <div class="d-flex justify-content-between align-items-center">
                    <a class="btn btn-lg btn btn-outline-success" href="gym.php" role="button">Click Here</a>
                </div>
              </div>
            </div>
          </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img src="img/yoga.jpg" alt="logo">
                <div class="card-body">
                  <h4>YOGA</h4>
                  <p class="card-text">"Life hits you hard. But it takes you three seconds to decide if you are a superhero or not. I am." - Hrithik Roshan</span></p>
                  <div class="d-flex justify-content-between align-items-center">
                      <a class="btn btn-lg btn btn-outline-success" href="yoga.php" role="button">Click Here</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img src="img/diet.jpg" alt="logo">
                <div class="card-body">
                  <h4>DIET</h4>
                  <p class="card-text">"You need to respect your body. Only then will you have the zeal to maintain it."  - Arjun Rampal</span></p>
                  <div class="d-flex justify-content-between align-items-center">
                      <a class="btn btn-lg btn btn-outline-success" href="diet.php" role="button">Click Here</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>



  <script src="java/js.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
    crossorigin="anonymous"></script>
</body>
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #929fba"
          >

    <div class="container p-4 pb-0">
      <section class="">
        <div class="row">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              FitnessFiver
            </h6>
            <p>
              Choose from thousands of exercises, calming meditations, and professional articles for a holistic approach to feeling fantastic.
            </p>
          </div>
          <hr class="w-100 clearfix d-md-none" />
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
            <p>
              <a class="text-white">GYM</a>
            </p>
            <p>
              <a class="text-white">YOGA</a>
            </p>
            <p>
              <a class="text-white">DIET</a>
            </p>
          </div>

          <hr class="w-100 clearfix d-md-none" />

          <hr class="w-100 clearfix d-md-none" />

          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> West Bengal, India</p>
            <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </div>

          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #3b5998"
               href="#!"
               role="button"
               ><i class="fab fa-facebook-f"></i
              ></a>

            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #55acee"
               href="#!"
               role="button"
               ><i class="fab fa-twitter"></i
              ></a>

            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #dd4b39"
               href="#!"
               role="button"
               ><i class="fab fa-google"></i
              ></a>

            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #ac2bac"
               href="#!"
               role="button"
               ><i class="fab fa-instagram"></i
              ></a>

            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #0082ca"
               href="#!"
               role="button"
               ><i class="fab fa-linkedin-in"></i
              ></a>
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #333333"
               href="#!"
               role="button"
               ><i class="fab fa-github"></i
              ></a>
          </div>
        </div>
      </section>
    </div>
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2022 Copyright:
      <a class="text-white" href="#"
         >FitnessFiver</a
        >
    </div>
  </footer>
</html>