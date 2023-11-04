<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="style-index.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="IMG/LOGO.jpg" class="img-fluid" width="300" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>

  <div>
    <nav class="nav">
      <div class="borde"><i class="cas link bi bi-house-door-fill"></i></div>
      <input class="link form-control me-2 " type="search" name="Buscar" placeholder="Buscar..." id="Buscar">
      <div ><i class="wa link bi bi-whatsapp"><a href="" class="text text-light">Únete a nuestra comunidad</a></i></div>
    </nav>
  </div>


  <!-- IMG PRINCIPAL -->
  <div>
    <h1 class="disfruta"><b>DISFRUTA</b></h1>
    <h1 class="disfruta2"><b>COMPARTIENDO</b></h1>
    <h1 class="disfruta3"><b>TUS</b></h1>
    <h1 class="disfruta4"><b>GUSTOS</b></h1>
    <img class="img-2" src="img/portada.png" class="img-fluid" alt="" width="100%" height="500">
  </div>


  <!-- Carrusel -->
  <div class="carrusel">
    <div class="gallery js-flickity" data-flickity-options='{ "wrapAround":true, "pageDots": false, "autoPlay": true}'>
      <div class="gallery-cell">
        <h1 class="di">#Diversión</h1>
        <img class="img1" src="img/carrusel1.png" class="img-fluid" alt="">
      </div>
      <div class="gallery-cell">
        <h1 class="di">#Diversión</h1>
        <img class="img1" src="img/carrusel2.png" class="img-fluid" alt="">
      </div>
      <div class="gallery-cell">
        <h1 class="di">#Diversión</h1>
        <img class="img1" src="img/carrusel3.png" class="img-fluid" alt="">
      </div>
    </div>
  </div>
  <!-- ENCABEZADO-->
  <div  >
    <h2 class="enc"><b> ES</b></h2>
    <h2 class="enc1"><b>HORA</b></h2>
    <h2 class="enc2"><b> DE</b></h2>
    <h2 class="enc3"><b>EXPRESAR </b></h2>
    <h2 class="enc4"><b>TU</b></h2>
    <h2 class="enc5"><b>CULTURA </b></h2>

   
  </div>
  <img class="img0" src="img/encabezado 2.png" alt="" >

  <!-- RECOMENDACIONES-->
  <section id="recomendaciones">
    <h1 class="morado">Recomendaciones</h1>
    <h1 class="negro">que</h1>
    <h1 class="negro2">te</h1>
    <h1 class="negro3">inspirarán</h1>
    <h3 class="gris">Potencia</h3>
    <h3 class="gris2">tu</h3>
    <h3 class="gris3">creatividad</h3>
    <h3 class="gris4">segun</h3>
    <h3 class="gris5">tu</h3>
    <h3 class="gris6">identidad</h3>

    <div class="fila">
      <div class="item">
        <div class="icono">
          <img class="img1" class="img-fluid" src="img/VIDEO.png"  alt="">
        </div>
        <div class="info">
          <a href="#" class="link"></a>
        </div>
      </div>
      <div class="item">
        <div class="icono">
          <img class="img2 " src="img/FOTOGRAFIA.png"   class="img-fluid"alt="">
        </div>
        <div class="info">
          <a href="#" class="link"></a>
        </div>
      </div>
      <div class="item">
        <div class="icono">
          <img class="img3" src="img/HISTORIA.png"  class="img-fluid" alt="">
        </div>
        <div class="info">
          <a href="#" class="link"></a>
        </div>
      </div>
    </div>

    <div class="fila">
      <div class="item">
        <div class="icono">
          <img class="img4" src="img/MUSICA.png"  class="img-fluid" alt="">
        </div>
        <div class="info">
          <a href="#" class="link"></a>
        </div>
      </div>
      <div class="item">
        <div class="icono">
          <img class="img5" src="img/ARTE.png" class="img-fluid" alt="">
        </div>
        <div class="info">
          <a href="#" class="link"></a>
        </div>
      </div>
      <div class="item">
        <div class="icono">
          <img class="img6" src="img/DANZA.png" class="img-fluid" alt="">
        </div>
        <div class="info">
          <a href="#" class="link"></a>
        </div>
      </div>
    </div>
  </section>
  <!-- BANNER-->
  <div>
    <img class="banner" src="img/BANENER.png" class="img-fluid" alt="">
  </div>

  <!-- ANUNCIO -->
  <div class="container">
    <div class="ANUNCIO">
      <img class="ANUNCIO2"  class="img-fluid"src="img/ANUNCIO.png"  alt="">
      <h1 class="uno">ÚNETE A LA COMUNIDAD DE </h1>
      <h1 class="dos">CONEXION CULTURAL </h1>
      <h1 class="tres">CHOCÓ</h1>
    </div>
  </div>
  <!-- FOOTER-->
  <!-- Footer -->
  <footer class="text-center1">
    <!-- Section: Social media -->
    <div class="wrappe">
      <ul>
        <li class="facebook"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i> <a class="an" href="#"></a>
        </li>
      </ul>
    </div>
    <div class="wrappe">
      <ul>
        <li class="instagram"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i> <a class="an" href="#"></a>
        </li>
      </ul>
    </div>
    <div class="wrappe">
      <ul>
        <li class="twitter"><i style="color=red" class="fa fa-twitter fa-2x" aria-hidden="true"></i> <a class="an"
            href="#"></a>
        </li>
      </ul>
    </div>
    <div class="wrappe">
      <ul>
        <li class="whatsapp2"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i> <a class="an" href="#"></a>
        </li>
      </ul>
    </div>
    <div class="wrappe">
      <ul>
        <li class="youtube"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i> <a class="an" href="#"></a>
        </li>

      </ul>
    </div>
    <!-- Section: Links  -->
    <section class="te">
      <div class=" text-center mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 ">
            <!-- Content -->
            <h6 class="text-uppercase ">
              <img src="img/LOGOb.png" width="230" height="100" alt="">
            </h6>
            <p>___________________________________</p>
            <p class="h6">Plataforma Digital aprenderás</p>
            <p class="h6">Cultura y Desarrollo</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 ">
            <!-- Links -->
          <br>
            <p class="h6">La informacion que encuentres</p>

            <p class="h6">en este sitio web no la vas a encontrar</p>

            <p class="h6">en ningun otro sitio web</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class=" somo col-md-3  col-lg-2 col-xl-2">
            <!-- Links -->
            <h6 class="text-uppercase ">
              
            </h6>
           
            <div class="somos" >
            <p class="h6">Diseñado por</p>
            <p class="h6">SOMOSPOWERSOFTWARE</p>
            <p class="h6 mb-3">Alex Yesid</p>
            <p class="h6 mb-3">Stivinson Correa</p>
            <p class="h6 mb-3">William Andres </p>
            </div >
           
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mb-md-0 mb-4">
            <!-- Links -->
            <p class="h6">Etiquetas</p>
            <p class="h6">Educación-Blog-Tradicional-Arte</p>
            <p class="h6">Danza-Comidas-Tradiciones-Conocimiento</p>
            <p class="h6">Creatividad-Expresiones-Ferías-Identidad</p>
            <p class="h6">Multicuturalidad-Patrimonio-Inmaterial</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4 ">
      <div class="wi">
        Información legal | Politica de privacidad | copyrigh.2023
      </div>

    </div>
    <!-- Copyright -->
  </footer>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>

</html>