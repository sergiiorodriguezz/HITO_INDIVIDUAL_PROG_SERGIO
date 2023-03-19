<?php 
#Ponemos la hora de españa
date_default_timezone_set('Europe/Madrid');
#Creamos la cookie con la ip del equipo y la fecha de inicio
setcookie("ip", $_SERVER["REMOTE_ADDR"]);
setcookie("fecha", date('d-m-Y h:i:s'));
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <script src="https://kit.fontawesome.com/81e592c019.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HITO GRUPAL LENGUAJE DE MARCAS</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poor+Story&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/averta-blackitalic" rel="stylesheet">
  </head>
<body id="cuerpo">
  <!-- AlpineJS para gestionar el evento Clic -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Header -->
<header x-data="{ open: false }" class="header">
  <!-- Boton abrir -->
  <button class="header__button-nav--open" x-on:click="open = true"><i class="fa-solid fa-bars"></i></button>
  <!-- Navegador -->
  <nav class="nav" x-bind:class="open ? 'nav--show' : ''">
    <!-- Boton cerrar -->
    <div class="nav__button" x-on:click="open = false">
      <button class="header__button-nav--close">Cerrar</button>
    </div>
    <!-- Menu -->
    <ul class="nav__ul">
      <li class="nav__item"><a href="#" class="nav__link"><strong>HOME</strong></a></li>
      <li class="nav__item"><a href="paginas/xml.html" class="nav__link">XML</a></li>
      <li class="nav__item"><a href="paginas/json.html" class="nav__link">JSON</a></li>
      <li class="nav__item"><a href="paginas/contacto.html" class="nav__link">CONTACTO</a></li>
    </ul>
</header>
    <h1 id="tituloPresentacion">PRESENTACIÓN</h1>
  <div id="fotosHome">
    <div id="fotos">
      <div id="borjafoto">
        <img src="img/Borja.png" alt="" class="borja">
        <p>Borja Pérez</p>
      </div>
      <div id="sergiofoto">
        <img src="img/Sergio.png" alt="" class="sergio">
        <p>Sergio Rodríguez</p>
      </div>
      <div id="davidfoto">
        <img src="img/David.png" alt="" class="david">
        <p>David Díez </p>
      </div>
    </div>
    
    
</body>
<footer>
  <div class="container__footer"> 
      <div class="box__footer">
        <section class="redes_sociales">
          <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!" role="button"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!" role="button"><i class="fab fa-google"></i></a>
          <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!" role="button"><i class="fab fa-instagram"></i></a>
          <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
        </section>
      </div>
      <div class="box__footer">
          <h2>Contacto</h2>
          <a href="#">+123 45 67 89</a>
          <a href="#">gruposdb@campusfp.es</a>
          <a href="#">Chat Online</a>
          <a href="#">C/ del Campus 27</a>
      </div>
      <div class="box__footer">
        <h2>Acceso directo</h2>
        <a href="index.html">HOME</a>
        <a href="paginas/xml.html">XML</a>
        <a href="paginas/json.html">JSON</a>  
    </div>
    </div>
    <div id="consulta">
      <section class="">
        <form action="">
          <div id="posicionconsulta" class="d-flex justify-content-left">
            <div class="col-auto">
              <p class="pt-2">
                <strong>Para cualquier consulta ponte en contacto con nosotros</strong>
              </p>
            </div>
            <div class="col-md-3 col-8">
              <div id="barra" class="form-outline form-white mb-3">
                <input type="email" id="form4Example21" class="form-control" />
              </div>
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-outline-light mb-4">
                Enviar
              </button>
            </div>
          </div>
        </form>
      </section>
    </div>
      <div class="text-center p-3" style="background-color: #B9D6F2" style="color: black;">
        <strong>© 2023 Copyright</strong>
      </div>
</footer>
