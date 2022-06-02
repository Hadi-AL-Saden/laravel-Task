<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- CSS only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


<script src="https://kit.fontawesome.com/41d0e79cb4.js" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="{{ asset('style/ss.css') }}" >


</head>
<body>
  <!-- ===================================================================================================== -->


<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarCenteredExample"
      aria-controls="navbarCenteredExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div
      class="collapse navbar-collapse justify-content-center"
      id="navbarCenteredExample"
    >
      <!-- Left links -->
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-warning" aria-current="page" href="#"><i class="fa-solid fa-house-chimney"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-warning" href="#"><i class="fa-solid fa-phone"></i> Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-warning" href="#"><i class="fa-solid fa-address-card"></i> Contact</a>
        </li>
        <!-- Navbar dropdown -->
        <!-- <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle text-warning"
            href="#"
            id="navbarDropdown"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"><i class="fa-solid fa-address-card"></i> Dropdown</a>
           Dropdown menu 
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="#">Action</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Another action</a>
            </li>
            <li><hr class="dropdown-divider" /></li>
            <li>
              <a class="dropdown-item" href="#">Something else here</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled"
            >Disabled</a
          >
        </li>
      </ul> -->
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>


</header>





<br><br><br><br><br>


<!-- ===================================================================================================== -->
<main>
  @section('homecon')
<div class="container">
  <div class="row  ">

  <div class="card col" style="width: 18rem;">
  <img src="https://www.spanglercandy.com/media/catalog/product/cache/9f94d793cdc52b8dc9fc57acf74d30dc/d/u/dumdums20018a_1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" type="button" class="btn btn-outline-warning">Go somewhere</a>
  </div>
</div>

<div class="card col order-5" style="width: 18rem;">
  <img src="https://www.amazingclubs.ca/img/candyofthemonthclub.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-outline-warning">Go somewhere</a>
  </div>
</div>
<div class="card col order-1" style="width: 18rem;">
  <img src="https://target.scene7.com/is/image/Target/GUEST_8b41c803-e717-4ee8-9c2b-5589a0415ef8?wid=488&hei=488&fmt=pjpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-outline-warning">Go somewhere</a>
  </div>
</div>
  </div>
</div>
@section
<br><br><br><b></b>

<div class="container">
  <div class="row  ">

  <div class="card col" style="width: 18rem;">
  <img src="https://www.spanglercandy.com/media/catalog/product/cache/9f94d793cdc52b8dc9fc57acf74d30dc/d/u/dumdums20018a_1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" type="button" class="btn btn-outline-warning">Go somewhere</a>
  </div>
</div>

<div class="card col order-5" style="width: 18rem;">
  <img src="https://www.amazingclubs.ca/img/candyofthemonthclub.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-outline-warning">Go somewhere</a>
  </div>
</div>
<div class="card col order-1" style="width: 18rem;">
  <img src="https://target.scene7.com/is/image/Target/GUEST_8b41c803-e717-4ee8-9c2b-5589a0415ef8?wid=488&hei=488&fmt=pjpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-outline-warning">Go somewhere</a>
  </div>
</div>
  </div>
</div>






</main>


<br><br><br><br><br>
<br>


<!-- ===================================================================================================== -->

<footer class="bg-dark text-center" id="footr">
  <!-- Grid container -->
  <div class="container p-4 pb-0 text-warning ">
    <p></p>
    <!-- Section: Social media -->
    <section class="mb-4 ">
      <!-- Facebook -->
      <a class="btn btn-outline-warning btn-floating m-1 text-warning" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-warning btn-floating m-1 text-warning" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-warning btn-floating m-1 text-warning" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      
      </div>
</footer>



</body>
</html>