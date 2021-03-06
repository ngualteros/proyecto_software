<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" /> 
<meta http-equiv="content-type" content="Mime-Type; charset=iso-8859-1" />  

    <title>BADBUNNY</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <?php
    include "navegacion_botones.php";
    ?>


    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>BAD BUNNY</strong>
            </h1>
            <br>
          </div>
          <div class="col-lg-8 mx-auto">
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#noticias">Echa un vistazo!</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="noticias">
      <div class="container">
        <div>
          <div>
            <center><h1 class="section-heading text-white">??LTIMAS NOTICIAS</h1><br><br><br></center>
            <?php
            require_once('noticiasCliente.php');
            ?>
            <center><br><br><a class="btn btn-light btn-xl js-scroll-trigger" href="#giras">SIGUIENTE</a></center>
          </div>
        </div>
      </div>
    </section>

    <section id="giras">
          <?php
          require_once('Modelos/gira/crud_gira.php');
          require_once('Modelos/gira/gira.php');
          require_once('Modelos/gira/girasCliente.php');


          ?>
      <div>
        <center><br><br>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#prensa">SIGUIENTE</a>
        </center>
      </div>
    </section>

    <section class="p-0" id="prensa">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/prensa1.jpg">
              <img class="img-fluid" src="img/prensa1.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Bad Bunny
                  </div>
                  <div class="project-name">
                    Ciudad de Puerto Rico
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/prensa2.jpg">
              <img class="img-fluid" src="img/prensa2.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Bad Bunny
                  </div>
                  <div class="project-name">
                    Visita a USA por primera ves
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/prensa3.jpg">
              <img class="img-fluid" src="img/prensa3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Bad Bunny
                  </div>
                  <div class="project-name">
                    Tour por europa
                  </div>
                </div>
              </div>
            </a>
          </div>

    </section>

    <section class="bg-dark text-white">
      <?php
      require_once('ruedaCliente.php');
      ?>

      <center><br><br><a class="btn btn-light btn-xl js-scroll-trigger" href="#historia">SIGUIENTE</a></center>
    </section>


    <section id="historia">
      <div class="container">
        <center>
            <div>
              <center><h1 class="section-heading text-dark">HISTORIA BADBUNNY</h1><br><br><br></center>
              <?php
              require_once('historiaCLiente.php');
              ?>
            </div>
            <br>
            <br>
            <br>
            <table>
              <tr>
                <td>
                  <?php
                  require_once('discografia.php');
                  ?>
                </td>
                <td>
<br>
                </td>
                <td>
<br>
                </td>
                <td>
<br>
                </td>
                <td>
<br>
                </td>
                <td>
<br>
                </td>
                <td>
<br>
                </td>
                <td>
                  <?php
                  require_once('calificacion.php');
                  ?>
                </td>
              </tr>
            </table>
        </center>
      </div>

      <div>
        <center><br><br>
          <a class="btn btn-dark text-light btn-xl js-scroll-trigger" href="#contact">SIGUIENTE</a>
        </center>
      </div>


        </section>

    <section class="text-light bg-dark" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">S??gueme en las redes sociales!</h2>
            <p class="mb-5">Noticias diarias, fotos, v??deos y contenido exclusivo s??lo en las redes sociales, S??GUEME</p>
          </div>
        </div>
        <center>
      <table align="center" width="100%" >


        <tr>
        <td><center>
        <a href="https://www.instagram.com/badbunnypr/?hl=es-la"><img src="img/instagram12.png" width="20%"></a>
        </center></td>
        <td><center>
        <a href="https://es-la.facebook.com/BadBunnyOfficial/"><img src="img/facebook.png" width="15%"></a>
        </center></td>
        <td><center>
        <a href="https://twitter.com/bad_bunnypr?lang=es"><img src="img/twitter.png" width="20%"></a>
        </center></td>
        <td><center>
        <a href="https://www.youtube.com/channel/UCmBA_wu8xGg1OfOkfW13Q0Q"><img src="img/youtube1.png" width="20%"></a>
        </center></td>
        </tr>
      </table>
    </center>
        </div>
      </div>
    </section>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
