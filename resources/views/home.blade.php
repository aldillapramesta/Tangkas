<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- my fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- My css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/home.css') }}">
    <style type="text/css">
      .jempol{
        border-radius: 500px;
      }
      .h2{
        margin-top: -70px;
        margin-left: 270px;
      }
  
    </style>
    <title>Home</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container"> 
  <a class="navbar-brand" href="#"> <img class="jempol" src="{{asset('assets/img/tangkas.png')}}" width="130" height="47"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-link active" href="/home">Home <span class="sr-only">(current)</span></a>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Learn
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <a class="nav-link" href="#">About Us</a>
      <a class="btn tombol" href="#">Donate &nbsp;<img src="{{asset('assets/img/right.png')}}" width="20"></a>
      <div class="nav-login">
        <a class="btn tombol1" href="#">Log in</a>
        <a class="btn tombol2" href="#">Sign Up</a>
      </div>
    </div>
  </div>
</div>
</nav>
    <!-- akhir navbar -->
    <!-- awal jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h5 class="narasi-menu narasi">Realizing a system of prevention and handling of cases of gender based violence that is safe and independent</h5>
            <h5 class="narasi-menu">We provide good services to make it comes true.</h5>
          </div>
          <div class="col-md-2">
          </div>
          <div class="col-md-4">
            <div class="survey">
              <p class="p1">Sexual Harrasment Cases <br>Occured (International Data) :</p>
              <p class="p2">10.000.000 Cases</p>
            </div>
            <div class="survey">
              <p class="p1">Sexual Harrasment Cases <br>Occured (Indonesia Data) :</p>
              <p class="p2">100.000 Cases</p>
            </div>
            <div class="survey">
              <p class="p1">Case on Hand in<br> Indonesia : </p>
              <p class="p2">20.000 Cases</p>
            </div>
          </div>
      </div>
      <a href="#"><p class="check">Check services below</p> <img src="{{asset('assets/img/down.png')}}" width="20"></a>
      <p class="bahasa">L<br>A<br>N<br>G<br>U<br>A<br>G<br>E<br>S</p>
      <p class="bahasa1">English | <img src="{{asset('assets/img/globe.png')}}" width="30"></p>
      </div>
    </div>

    <!-- akhir jumbotron -->

    <!--cintainer  -->
   
    <!-- akhir panel -->

    <!-- working -->
<div class="service">
    <div class="container">
      <h3>Our Services</h3>
      <div class="row workingspace">

        <div class="col-lg-1">
          
          
        </div>

        <div class="col-lg-3">
          <a href=" "><p>Reporting <img src="{{asset('assets/img/right1.png')}}" width="30" align="right"></p></a>
          <a href=" "><p>Panic Button <img src="{{asset('assets/img/right1.png')}}" width="30" align="right"></p></a>
          <a href=" "><p>Consultation <img src="{{asset('assets/img/right1.png')}}" width="30" align="right"></p></a>
          
        </div>

         <div class="col-lg-8">
          <a href=""><img src="{{asset('assets/img/download.png')}}"></a>
         </div>


      </div>
      <div class="row garis">
          <div class="col-lg-1">
            <img src="{{asset('assets/img/point.png')}}">
          </div>
          <div class="col-lg-11">
          </div>
      </div>
    </div>
</div>








    <!-- akhir working -->

<!-- testimonial -->

<section class="testimonial">
    <div class="justify-content-center">
       
          <p><img src="{{asset('assets/img/give.png')}}"></p>
            <p align="center">Walk together with us to reduce cases of sexual harassment and violence.</p>
           <p align="center">Make a contribution by give your best donation</p>
        
    </div>
    

    <div class=" justify-content-center don" align="center">
      <div class="donate">
        <a href="">Donate here</a>
      </div>
    </div>
</section>

    

<div class="tangkas">
  <div class="container">
    <div class="row">

      <div class="col-lg-6">
        <h1 class="h1">About Us</h1>
          <p><img src="{{asset('assets/img/logotangkas.png')}}" width="100%"></p>
          
      </div>
      <div class="col-lg-1">
      </div>
      <div class="col-lg-5">
          <p class="deskripsi">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p><img src="{{asset('assets/img/partner.png')}}" width="65%"></p>
          
      </div>
      
    </div>
  </div>
</div>

  <!--footer--------------->
 <footer>
   <div class="container">
    <p><img src="{{asset('assets/img/tangkas.png')}}" width="15%"></p>
    <div class="row">


      <div class="col-lg-3">
        <p>Address:</p>
        <p>Pondok Labu, No.98, Jakarta.</p>
        <p>0219876543</p>
        <p>tangkas_id@gmail.com</p>
      </div>

      <div class="col-lg-3">
        <p>Social Media : </p>
      </div>

      <div class="col-lg-3">
        <p>Our Services :</p>
        <p>Reporting</p>
        <p>Panic Button</p>
        <p>Consultation</p>
      </div>

      <div class="col-lg-3 kontak">
        <center><h5>Contact Us</h5></center>
<center><table border="0" cellpadding="0" cellspacing="0" width="300">
    <tr><td>Email</td>
           <td>:</td>
           <td><input type="text" size="25"></td>
    </tr>
    <tr><td>Title</td>
           <td>:</td>
           <td><input type="text" size="25"></td>
    </tr>
    <tr><td>Text</td>
           <td>:</td>
           <td><textarea rows="5" cols="25"></textarea></td>

    </tr>
    <tr>
      <td colspan="3" align="center"><button>Send</button></td>
    </tr>
      </div>

    </div>
  </div>
 </footer>
<!-- akhir testi -->
    <!-- akhir container -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>