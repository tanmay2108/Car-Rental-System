<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
     crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />

    <!-- css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg" style="background-color:aqua">
  <div class="container-fluid">
    <img src="./images/logo.jpg" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total price</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<nav class="navbar navbar-expand-lg" style="background-color: aquamarine;">
<ul class="navbar-nav me-auto">
<li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
</ul>
</nav>

<!-- website ka introduction wala part -->
<div class="bg-light">
  <h3 class="text-center">Car Rental</h3>
  <p class="text-center">Welcome to Car Adda - your go-to destination for convenient and affordable car rentals. Discover a seamless booking experience, a diverse fleet of top-notch vehicles, and transparent pricing. Whether for a weekend getaway or daily commuting, we've got the perfect ride for you. Your journey begins with us.
</p>
</div>

<!-- side nav bar aur product ke liye ye code hey -->
<div class="row">
  <div class="col-md -10">
    <!-- product -->
    <div class="row">
      <div class="col-md-4  mb-2">
      <div class="card">
      <img src="./images/audi.png" class="image_product" alt="...">
      <div class="card-body">
      <h5 class="card-title">Audi</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Book</a>
    </div>
    </div></div>
      <div class="col-md-4 mb-2">
      <div class="card">
      <img src="./images/jeep.png" class="image_product" alt="...">
      <div class="card-body">
      <h5 class="card-title">Jeep</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Book</a>
    </div></div></div>
      <div class="col-md-4  mb-2">
      <div class="card">
      <img src="./images/suzuki.png" class="image_product" alt="...">
      <div class="card-body">
      <h5 class="card-title">Suzuki</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Book</a>
      </div>
      </div>
    </div>
    <div class="col-md-4  mb-2">
      <div class="card">
      <img src="./images/ferrari.png" class="image_product" alt="...">
      <div class="card-body">
      <h5 class="card-title">BMW</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Book</a>
      </div>
      </div>
    </div>
    <div class="col-md-4  mb-2">
      <div class="card">
      <img src="./images/toyota.png" class="image_product" alt="...">
      <div class="card-body">
      <h5 class="card-title">toyota</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Book</a>
      </div>
      </div>
    </div>
    <div class="col-md-4  mb-2">
      <div class="card">
      <img src="./images/ferrari.png" class="image_product" alt="...">
      <div class="card-body">
      <h5 class="card-title">ferrari</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Book</a>
      </div>
      </div>
    </div>
  </div></div>
  
  <!-- sidebar -->
  <div class="col-md-2" style="background-color: aquamarine; padding:0%">
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h3>Car Brands</h3></a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link"><h5>Audi</h5></a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link"><h5>Suzuki</h5></a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link"><h5>Hyundai</h5></a>
      </li>
    </ul>
    
    
  </div>
</div>






<!--footer wala page hey ye -->
<footer class="footer" style="background-color: aqua; padding: 3px; text-align:center">
<p>All right is been reserved Designed by Harshit , Tanmay , Praveen</p>
</div>
    

<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
 crossorigin="anonymous"></script>
</body>
</html>