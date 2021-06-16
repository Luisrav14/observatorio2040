<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <title>Observatorio del Desarrollo de Durango</title>
</head>

<body>
  <nav>
    <input id="nav-toggle" type="checkbox" />
    <div class="logo">
      <a href=""><img class="logo" src="./assets/images/logo.png" alt="logo" /></a>
    </div>
    <ul class="links">
      <li><a href="#">Inicio</a></li>
      <li><a href="./public/acerca.php">Acerca</a></li>
      <li><a href="./public/indicadores.php">Indicadores</a></li>
      <li><a href="#">Compara</a></li>
      <li><a href="#contacto">Contacto</a></li>
    </ul>
    <label for="nav-toggle" class="icon-burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </label>
  </nav>

  <main>
    <section class="inicio">
      <div class="container">
        <div class="">
          <div class="inicio-content">
            <h1 class="t-inicio">
              Observatorio del desarrollo <br />
              de Durango
            </h1>
            <a href="./public/indicadores.php" class="btn-inicio">Ver Indicadores</a>
          </div>
        </div>
      </div>
    </section>

    <section id="acerca" class="acerca justify-content-center align-content-center">
      <div class="row inf-acerca">
        <div class="col-12 mt-5">
          <h1 class="t-acerca text-center">¿QUÉ ES EL OBSERVATORIO DEL DESARROLLO DE DURANGO?</h1>
          <hr />
        </div>
        <div class="col-12 col-sm-12 col-lg-6 mt-lg-5">
          <p class="txt-acerca text-justify">
            El observatorio de Desarrollo de Durango permite a la sociedad y al gobierno conocer el avance del estado desde tres perspectivas, respecto a la historia, respecto de otras entidades federativas y respecto de las metas a lograr en el 2040
            planteadas en los escenarios elaborados.
          </p>
          <a href="./public/acerca.php" class="btn-inicio btn-acerca mb-3">Saber más acerca</a>
        </div>
        <div class="col-12 col-sm-12 col-lg-5 mt-lg-5 mt-sm-5 ml-lg-5 m-auto mb-sm-5 w-100 d-block">
          <img class="img-acerca w-100" src="./assets/images/Catedral-img.jpg" alt="" />
        </div>
      </div>
    </section>

    <section id="indicadores" class="indicadores">
      <div class="container-fluid w-75">
        <div class="col-12">
          <div class="row">
            <div class="col-8">
              <h1 class="t-acerca text-left">INDICADORES</h1>
            </div>
          </div>
          <hr />
        </div>
        <div class="row mt-3">
          <div class="col-12 col-md-6 col-lg-4 mb-2">
            <div class="card">
              <img src="./assets/images/DS.png" class="card-img-top img-card-indicador" alt="Desarrollo-Sostenible">
              <div class="card-body">
                <h5 class="card-title">Desarrollo Sostenible</h5>
                <p class="card-text">Conoce acerca de los objetivos del desarrollo Sostenible.</p>
                <a href="./public/indicadores.php" class="btn-indicador">Ver más...</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-2">
            <div class="card">
              <img src="./assets/images/EG.png" class="card-img-top img-card-indicador" alt="Desarrollo-Sostenible">
              <div class="card-body">
                <h5 class="card-title">Ejes de Gobierno</h5>
                <p class="card-text">Conoce más acerca de los ejes de gobierno.</p>
                <a href="./public/indicadores.php" class="btn-indicador">Ver más...</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-2">
            <div class="card">
              <img src="./assets/images/P2040.png" class="card-img-top img-card-indicador" alt="Desarrollo-Sostenible">
              <div class="card-body">
                <h5 class="card-title">Proyecto 2040</h5>
                <p class="card-text">Conoce acerca de las dimenciones del proyecto Durango 2040.</p>
                <a href="./public/indicadores.php" class="btn-indicador">Ver más...</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="relacionados" class="relacionados">
      <div class="container-fluid w-75">
        <div class="row">
          <div class="col-12">
            <h1 class="t-acerca text-left">Sitios Relacionados</h1>
            <hr />
          </div>
          <div class="col-6 col-lg-3 w-25">
            <img class="w-100" src="./assets/images/codech2.png" alt="" />
          </div>
          <div class="col-6 col-lg-3 w-25">
            <img class="w-100" src="./assets/images/codesin - top.png" alt="" />
          </div>
          <div class="col-6 col-lg-3 w-25">
            <img class="w-100" src="./assets/images/conl.svg" alt="" />
          </div>
          <div class="col-6 col-lg-3 w-25">
            <img class="w-100" src="./assets/images/logo-imagcs-ft.gif" alt="" />
          </div>
        </div>
      </div>
    </section>

    <section id="contacto" class="contacto">
      <div class="content">
        <div class="contact-wrapper animated bounceInUp">
          <div class="contact-form">
            <h3>Contáctanos</h3>
            <form action="">
              <p>
                <label>Nombre</label>
                <input type="text" name="nombre" />
              </p>
              <p>
                <label>Apellidos</label>
                <input type="text" name="apellidos" />
              </p>
              <p>
                <label>Email</label>
                <input type="email" name="email" />
              </p>
              <p>
                <label>Asunto</label>
                <input type="text" name="asunto" />
              </p>
              <p class="block">
                <label>Mensaje</label>
                <textarea name="mensaje" rows="3"></textarea>
              </p>
              <p class="block">
                <button>Enviar</button>
              </p>
            </form>
          </div>
          <div class="contact-info">
            <h4>CODEDUR</h4>
            <ul>
              <li><i class="fas fa-map-marker-alt"></i> Baker Street</li>
              <li><i class="fas fa-phone"></i> (111) 111 111 111</li>
              <li><i class="fas fa-envelope-open-text"></i> contact@website.com</li>
            </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero provident ipsam necessitatibus repellendus?</p>
            <p>Company.com</p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-5 col-md-6 mt-3">
          <div class="row">
            <div class="col-6">
              <img class="w-75" src="./assets/images/20-1611585957-20-1535046526-logoDurangoBlanco.png" alt="" />
            </div>
            <div class="col-6 mt-4">
              <h3 class="tit-footer">INDICADORES</h3>
              <ul class="links-footer">
                <li><a href="">Objetivos de Desarrollo Sostenible</a></li>
                <li><a href="">Ejes de Gobierno</a></li>
                <li><a href="">Dimenciones Proyecto 2040</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-4 col-lg-2 col-md-4 mt-3">
          <img class="w-100" src="./assets/images/peg2040.png" alt="" />
        </div>
        <div class="col-12 col-lg-5 col-md-12 mt-3">
          <div class="row">
            <div class="col-6 mt-3">
              <div class="col-6 links-footer">
                <h3 class="tit-footer">SECCIONES</h3>
                <ul class="links-footer">
                  <li><a href="#inicio">Inicio</a></li>
                  <li><a href="./public/acerca.php">Acerca de</a></li>
                  <li><a href="./public/indicadores.php">Indicadores</a></li>
                  <li><a href="">Compara</a></li>
                </ul>
              </div>
            </div>
            <div class="col-6 col-md-4 mt-5">
              <img class="w-100" src="./assets/images/CODEDUR.png" alt="" />
            </div>
          </div>
        </div>
        <div class="col-6 footer-icons mt-4 mb-2">
          <a class="ml-1" href=""><i class="bi bi-facebook"></i></a>
          <a class="ml-1" href=""><i class="bi bi-twitter"></i></a>
          <a class="ml-1" href=""><i class="bi bi-youtube"></i></a>
        </div>
      </div>
    </div>
    <div class="copyright-footer">
      Copyright © 2021 CODEDUR - Todos los derechos reservados.
      <a class="text-right" href="./admin/index.php"> <i class="bi bi-speedometer"></i> </a>
    </div>
  </footer>

</body>

<span class="ir-arriba"><img class="w-100" src="./assets/images/arriba.gif" alt="Ir-Arriba" /></span>

<!-- CDN's -->

<script src="./js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js" crossorigin="anonymous"></script>

<!-- Ir arriba -->

<script>
  $(document).ready(function() {
    $(".ir-arriba").click(function() {
      $("body, html").animate({
          scrollTop: "0px",
        },
        500
      );
    });

    $(window).scroll(function() {
      if ($(this).scrollTop() > 0) {
        $(".ir-arriba").slideDown(300);
      } else {
        $(".ir-arriba").slideUp(300);
      }
    });
  });
</script>

</html>