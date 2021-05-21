<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Estación Gourmet</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Fjalla+One&family=Nanum+Gothic&display=swap" rel="stylesheet">
    
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/ac45cc33a3.js" crossorigin="anonymous"></script>

    <!-- CSS COSTUM -->
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./styles/desktop.css" media="screen and (min-width: 1024px)">

  </head>

  <body>
    <!-- HEADER -->
    <header class="sticky-top">
      <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <a class="navbar-brand" href="#main">
              <img src="./images/logo-black.svg" alt="logo de estación gourmet" >
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="#about_us">Sobre nosotros</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Servicios
                  </a>
                  <ul class="dropdown-menu menu__services--items" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#our_services">Menú semanal</a></li>
                    <li><a class="dropdown-item" href="#our_services">Eventos sociales</a></li>
                    <li><a class="dropdown-item" href="#our_services">Eventos corporativos</a></li>
                    <li><a class="dropdown-item" href="#our_services">Clases de cocina</a></li>
                    <li><a class="dropdown-item" href="#our_services">Cajas corporativas</a></li>
                    <li><a class="dropdown-item" href="#our_services">Cookie boxes</a></li>
                    <li><a class="dropdown-item" href="#our_services">Pastelería</a></li>
                  </ul>
                  <li class="nav-item">
                    <a class="nav-link" href="#talk_to_us">Cotización</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#gallery">Galería</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#container">Contacto</a>
                  </li>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </header>
    <!-- /HEADER -->

    <!-- MAIN -->
    <main class="main" id="main">
      <!-- Home -->
      <section id="carousel" class="carousel slide carousel-fade main" data-bs-ride="carousel" data-pause="false">
        <div class="carousel-inner">
          <picture class="carousel-item active" data-bs-interval="1500">
            <img src="./images/home/atun.jpg" class="d-block w-100" alt="patillos de atun">
          </picture>
          <picture class="carousel-item" data-bs-interval="1500">
            <img src="./images/home/cookies.jpg" class="d-block w-100" alt="deliciosas galletas con dulce de leche">
          </picture>
          <picture class="carousel-item" data-bs-interval="1500">
            <img src="./images/home/mousse.jpg" class="d-block w-100" alt="imagen de porcion de mousse">
          </picture>
          <picture class="carousel-item" data-bs-interval="1500">
            <img src="./images/home/products.jpg" class="d-block w-100" alt="muestra de productos en la mesa">
          </picture>
        </div>
        <div class="overlay">
          <div class="col-12 col-md-12 title">
            <h1 class="text-center">Somos el mejor aliado para tus eventos</h1>
          </div>
        </div>
      </section>
      
      <!-- About us -->
      <section class="about_us" id="about_us">
        <div class="container">
          <div class="row align-items-center">
            <h2 class="mb-3 mt-5 text-center">Sobre nosotros</h2>
            <div class="col-12 col-md-6 col-lg-5 offset-lg-1 mt-3 mb-3">
              <p class="px-3 mb-5">Andrea Durán , es la chef y propietaria de Estación Gourmet creó la empresa en el 2006, amante de la buena cuchara, apasionada por su trabajo el cual disfruta de principio a fin.</p>
              <p class="px-3 mb-5">Estación Gourmet nace de la creatividad de Andrea quien transmite todo su amor a través de cada platillo.</p>
              <p class="px-3 mb-5">Les ofrecemos todos los servicios para su evento. Tenemos experiencia en eventos corporativos, clases de cocina, eventos privados en su casa, bodas, fiestas temáticas, etc.</p>
              <p class="px-3 mb-5">Todos nuestros productos son elaborados con los mejores ingredientes y dedicación para entregarle a nuestros clientes el mejor resultado en su mesa.</p>
            </div>
            <picture class="col-12 col-md-6 about_us--picture d-flex justify-content-center my-3 px-0">
              <img class="picture--item" src="./images/about_us/adrea.jpg" alt="">
            </picture>
        </div>
        </div>
      </section>

      <!-- Our services -->
      <section class="our_services" id="our_services">
        <h2 class="text-center mt-5 mb-5">
          Nuestros servicios
        </h2>
        <div class="container mb-5">
          <div class="card-group mb-5">
            <div class="row d-flex justify-content-center">
              <div class="card col-12 mb-3 mt-3" >
                <div class="row g-0">
                  <div class="col-3 col-md-4">
                    <img src="./images/services/menu_semanal.jpg" class="card-img-top" alt="...">
                  </div>
                  <div class="col-9 col-md-8">
                    <div class="card-body pt-1">
                      <h5 class="card-title">Menú Semanal</h5>
                      <p class="card-text">Comida casera para toda la familia, sabores y productos naturales, entregados en la puerta de su casa.</p>
                      <p class="card-text">El menú cambia todas las semanas para beneficio de todos.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card col-12 mb-3 mt-3" >
                <div class="row g-0">
                  <div class="col-3 col-md-4">
                    <img src="./images/services/social_event.jpg" class="card-img-top" alt="...">
                  </div>
                  <div class="col-9 col-md-8">
                    <div class="card-body pt-1">
                      <h5 class="card-title">Eventos Sociales y Corporativos</h5>
                      <p class="card-text">Bautizos, cumpleaños, aniversarios, bodas, primera comunión, compromisos, parrilladas y eventos para empresas.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card col-12 mb-3 mt-3 " >
                <div class="row g-0">
                  <div class="col-3 col-md-4">
                    <img src="./images/services/classes.jpg" class="card-img-top" alt="...">
                  </div>
                  <div class="col-9 col-md-8">
                    <div class="card-body pt-1">
                      <h5 class="card-title">Clases de Cocina</h5>
                      <p class="card-text">Clases de cocina basados en la necesidad y gusto de cada familia.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card col-12 mb-3 mt-3 " >
                <div class="row g-0">
                  <div class="col-3 col-md-4">
                    <img src="./images/services/cookie_boxes.jpg" class="card-img-top" alt="...">
                  </div>
                  <div class="col-9 col-md-8">
                    <div class="card-body pt-1">
                      <h5 class="card-title">Cookie boxes</h5>
                      <p class="card-text">Mensajes dulces y especiales.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card col-12 mb-3 mt-3 " >
                <div class="row g-0">
                  <div class="col-3 col-md-4">
                    <img src="./images/services/corporation_boxes.jpg" class="card-img-top" alt="...">
                  </div>
                  <div class="col-9 col-md-8">
                    <div class="card-body pt-1">
                      <h5 class="card-title">Cajas corporativos</h5>
                      <p class="card-text">Cajas para reuniones virtuales o presenciales.</p>
                      <p class="card-text">Desayunos, refrigerios, almuerzos o cenas.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card col-12 mb-3  mt-3" >
                <div class="row g-0">
                  <div class="col-3 col-md-4">
                    <img src="./images/services/bakery.jpg" class="card-img-top" alt="...">
                  </div>
                  <div class="col-9 col-md-8">
                    <div class="card-body pt-1">
                      <h5 class="card-title">Pastelería</h5>
                      <p class="card-text">Pastelería artesanal con recetas originales.</p>
                    </div>
                  </div>
                </div>
              </div>



              <!-- <div class="card col-6 col-lg-3 mt-1 px-2 align-items-center ">
                <img src="../images/services/social_event.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Menú Semanal</h5>
                  <p class="card-text text-center">Comida casera para toda la familia, sabores y productos naturales, entregados en la puerta de su casa.</p>
                  <p class="card-text text-center">El menú cambia todas las semanas para beneficio de todos.</p>
                </div>
              </div> -->
              <!-- <div class="card col-6 col-lg-3 mt-1 px-2 align-items-center">
                <img src="../images/services/social_event.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Eventos Sociales</h5>
                  <p class="card-text text-center">Bautizos, cumpleaños, aniversarios, bodas, primera comunión, compromisos, parrilladas.</p>
                </div> -->
              <!-- </div>
              <div class="card col-6 col-lg-3 mt-2 px-2 align-items-center">
                <img src="../images/services/corporation_event.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Eventos Corporativos</h5>
                  <p class="card-text text-center">Eventos para empresas.</p>
                </div>
              </div> -->
              <!-- <div class="card col-6 col-lg-3 mt-2 px-2 align-items-center">
                <img src="../images/services/classes.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Clases de Cocina</h5>
                  <p class="card-text text-center">Clases de cocina basados en la necesidad y gusto de cada familia.</p>
                </div>
              </div> -->
              <!-- <div class="card col-6 col-lg-4 mt-2 px-2 align-items-center">
                <img src="../images/services/cookie_boxes.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Cookie boxes</h5>
                  <p class="card-text text-center">Mensajes dulces y especiales.</p>
                </div>
              </div> -->
              <!-- <div class="card col-6 col-lg-4 mt-2 px-2 align-items-center">
                <img src="../images/services/corporation_boxes.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Cajas corporativos</h5>
                  <p class="card-text text-center">Cajas para reuniones virtuales o presenciales.</p>
                  <p class="card-text text-center">Desayunos, refrigerios, almuerzos o cenas.</p>
                </div>
              </div> -->
              <!-- <div class="card col-6 col-lg-4 mt-2 px-2 align-items-center">
                <img src="../images/services/bakery.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Pastelería</h5>
                  <p class="card-text text-center">Pastelería artesanal con recetas originales.</p>
                  <p class="card-text text-center">Mi pasión realmente es la pastelería.</p>
                </div>
            </div>
          </div>
        </div> -->
      </section>

      <!-- Talk with us -->
      <section class="talk_to_us" id="talk_to_us">
        <div class="container">
          <div class="row">
            <h2 class="mb-3 mt-5 text-center">Cotiza con nosotros</h2>
            <picture class="mt-5 col-12 col-md-6 col-md-6 col-lg-5 offset-lg-1 px-5 d-flex justify-content-center">
              <img class="picture--item " src="./images/talk_to_us/contact.svg"  alt="">
            </picture>
            <div class="mt-5 mb-5 px-5 col-12 col-md-6 col-lg-5 ">
              <form action="index.php" method="POST" class="mt-5">
                <div class="mb-3 mt-3">
                  <label for="name" class="form-label">Nombre Completo</label>
                  <input type="name" name="name" class="form-control" id="name" aria-describedby="emailHelp" autofocus placeholder="Ingresa tu nombre">
                </div>
                <div class="mb-3 mt-3">
                  <label for="phone" class="form-label">Teléfono</label>
                  <input type="phone" name="phone" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Ingresa tu número de teléfono">
                </div>
                <div class="mb-3 mt-3">
                  <label for="email" class="form-label">Correo</label>
                  <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingresa tu correo de contacto">
                </div>
                <div class="mb-3 mt-3">
                  <label for="numberPeople" class="form-label">Cantidad de personas</label>
                  <select id="numberPeople" name="numberPeople" class="form-select">
                    <option>10</option>
                    <option>10 - 30</option>
                    <option>30 - 50</option>
                    <option>50 - 100</option>
                  </select>
                </div>
                <div class="mb-3 mt-3">
                  <label for="place" class="form-label">Lugar</label>
                  <input type="place" name="place" class="form-control" id="place" aria-describedby="emailHelp" placeholder="Ingresa el lugar del evento">
                </div>
                <div class="mb-3 mt-3">
                  <label for="date" class="form-label">Fecha y Hora</label>
                  <input type="date" name="date" class="form-control" id="date">
                </div>
                <div class="mb-3 mt-3">
                  <label for="message" class="form-label">Requerimiento especial</label>
                  <textarea name="massage" class="form-control" rows="4" placeholder="Qué deberíamos saber"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary mt-4">Envia la cotización</button>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- Gallery -->
      <section class="gallery" id="gallery">
        <h2 class="text-center mb-3 mt-5">Galería</h2>
        <div class="container-fluid mb-5">
          <div class="card-group">
            <div class="row col-sm-12 col-lg-10 offset-lg-1">
              <div class="card item-picture col-6 col-lg-3" >
                <img src="./images/gallery/2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="card item-picture col-6 col-lg-3" >
                <img src="./images/gallery/3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="card item-picture col-6 col-lg-3" >
                <img src="./images/gallery/4.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="card item-picture col-6 col-lg-3" >
                <img src="./images/gallery/5.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="card item-picture col-6 col-lg-3" >
                <img src="./images/gallery/6.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="card item-picture col-6 col-lg-3" >
                <img src="./images/gallery/7.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="card item-picture col-6 col-lg-3" >
                <img src="./images/gallery/8.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="card item-picture col-6 col-lg-3" >
                <img src="./images/gallery/9.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /GALLERY 2 -->
    </main>
    <!-- /MAIN -->


    <!-- FOOTER -->
    <footer id="container">
      <section class="container">
        <div class="row pb-4 mx-0 pt-5 text-center">
          <div class="col-12 col-md-6 col-lg-4 pb-3 px-5 footer_description">
            <h3>Catering Service</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime minima perspiciatis ullam blanditiis quaerat quos.</p>
          </div>
          <div class="col-12 col-md-6 col-lg-4 px-5 footer_description">
            <h3>Horario</h3>
            <p class="mb-0">Lunes - Viernes: 8:00 am - 5:00 pm</p>
            <p>Sábado: 8:00 am - 5:00 pm</p>
          </div>
          <div class="col-12 col-md-6 col-lg-4 px-5 mt-4 footer_description">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime minima perspiciatis ullam blanditiis quaerat quos.</p>
          </div>
          <div class="col-12 col-md-6 col-lg-12 footer_description mt-3">
            <h3 class="d-flex justify-content-center">Siguenos en las apps</h3>
            <ul class="text-center">
              <li><i class="fab fa-facebook-square"></i>    Estación Gourmet</li>
              <li><i class="fab fa-instagram"></i>    estaciongourmet.cs</li>
              <li><i class="fab fa-whatsapp"></i>    8488-1111</li>
            </ul>
        </div>
      </section>
      <div class="row text-center mx-0 profile">
        <div class="col-12">
          <h6 class="mt-4 mb-5"><span><a href="#">alexgbcr.com</a> made this site</span></h6>
        </div>
      </div>
    </footer>
    <!-- /FOOTER -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->

    <!-- JS Custom -->
    <!-- <script src="./index.js"></script> -->
  </body>
</html>