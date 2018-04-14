<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link  href="/css/stylesheet.css" rel="stylesheet">
    <title> Sports Week - @yield('title') </title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
  <!-- Brand/logo -->
    <a class="navbar-brand" href="{{ route('home') }}">Sports Week</a>
  <button class="navbar-toggler " data-toggle="collapse" data-target="#collapse-target">
<span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapse-target" >




  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('home') }}">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('about') }}">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('contactus') }}">Contact us</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Activities
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Games</a>
        <a class="dropdown-item" href="#">Poetry</a>
        <a class="dropdown-item" href="#">Darama</a>
        <a class="dropdown-item" href="#">Songs</a>
        <a class="dropdown-item" href="#">Other</a>
      </div>
    </li>
  </ul>
</div>
</nav>
    </header>

    <section >
      <article class="container-fluid bg-secondary">
        <div class="container ">

  <img class=" col-sm-12 border border-danger roundad" src="img/image1.jpeg" width="1000" height="400">

        </div>
          </article>
      </section>

      @yield('contents')


    <footer class="container-fluid">
      <hr>
      <div class="row">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-2">
      <p>© 2008-2018 Abasyn University Islamabad Campus</p>
      <p>Park Road, Chak Shahzad, Islamabad</p>
      <p>Tel: +92-51-9247000-9247002 and 9049802</p>
      <p>UAN: +92-51-111-001-007</p>
      </div>
      <div class="col-sm-3">

      </div>
      <div class="col-sm-2  ">

        <p1> <a href="#">MYWEb</a> </p1>

      </div>

            </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
