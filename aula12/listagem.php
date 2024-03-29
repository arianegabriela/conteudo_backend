<?php 
include "dados.php";
?>

<!doctype html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Bootstrap demo</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
 </head>
 <body>

 <!-- carousel -->
 <div id="carouselExampleIndicators" class="carousel slide">
 <div class="carousel-indicators">
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
 <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
 <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
 </div>
 <div class="carousel-inner">
 <div class="carousel-item active">
 <img src="imagem/foto1.jpg" class="d-block w-100" alt="...">
 </div>
 <div class="carousel-item">
 <img src="imagem/foto2.jpg" class="d-block w-100" alt="...">
 </div>
 <div class="carousel-item">
 <img src="imagem/foto3.jpg" class="d-block w-100" alt="...">
</div>
 </div>
 <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
 <span class="visually-hidden">Previous</span>
 </button>
 <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
 <span class="carousel-control-next-icon" aria-hidden="true"></span>
 <span class="visually-hidden">Next</span>
 </button>
</div>
 <!-- final do carousel --> 

 <!-- Menu principal -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
 <div class="container-fluid">
     <a class="navbar-brand" href="#">Navbar</a>
 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
 <li class="nav-item">
 <a class="nav-link active" aria-current="page" href="#">Home</a>
 </li>
<li class="nav-item">
 <a class="nav-link" href="#">Link</a>
 </li>
 <li class="nav-item dropdown">
 <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
 Dropdown
 </a>
 <ul class="dropdown-menu">
 <li><a class="dropdown-item" href="#">Action</a></li>
 <li><a class="dropdown-item" href="#">Another action</a></li>
 <li><hr class="dropdown-divider"></li>
 <li><a class="dropdown-item" href="#">Something else here</a></li>
 </ul>
 </li>
 <li class="nav-item">
 <a class="nav-link disabled">Disabled</a>
 </li>
 </ul>
 <form class="d-flex" role="search">
 <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
 <button class="btn btn-outline-success" type="submit">Search</button>
 </form>
 </div>
 </div>
</nav>
 <!-- final do menu -->

 <!-- noticias -->
 <div class="container">
 <?php foreach($noticias as $noticia): ?>

 <div class="card" style="width: 18rem;">
 <img src="<?php echo $noticia["foto"];?>" class="card-img-top" alt="...">
 <div class="card-body">
 <h5 class="card-title">Card title</h5>
 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
 <a href="#" class="btn btn-primary">Go somewhere</a>
 </div>
</div>
<?php endforeach; ?>
</div>
<!-- fim noticias -->


 <h1>Hello, world!</h1>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
