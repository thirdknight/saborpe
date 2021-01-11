<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html class="no-js" lang="">
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <link rel="apple-touch-icon" href="icon.png">
  <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
  <link href="build/css/styles.css" rel="stylesheet">
  <title>html Boilerplate Edi</title>
</head>

<body>
  <div class="page">
    <section id="contact" class="main-header hero is-full-height">
      <?php include("includes/header.php");?>
    </section>
    <section class="contact">
      <h2 class="title">Contáctenos</h2>
      <div class="container container-flex">
        <div class="contact-information  formular column column-50">
          <?php 
              $Msg = "";
              if(isset($_GET['error']))
              {
                  $Msg = " Por favor rellene los espacios en blanco ";
                  echo '<div class="alert alert-danger">'.$Msg.'</div>';
              }

              if(isset($_GET['success']))
              {
                  $Msg = " Su mensaje se envio con exito ";
                  echo '<div class="alert alert-success">'.$Msg.'</div>';
              }
          ?>
          <h3>Informacion de Contacto</h3>
          <p>Si desea más información sobre nuestras ofertas no dude en contactarnos por cualquiera de estos medios. Nuestro equipo estara encantado de responder sus preguntas.
          </p>
          <p><span class="icon-phone"></span>Telefono1 : 8999900000</p>
          <p><span class="icon-location"></span>Urb. Los Santos 234 Lima 14, Peru</p>
          <p><span class="icon-mail"></span>consultas@saborpe.com</p>
        </div>
        <form action="process.php" method="post" class="formular column column-50">
              <label class="formular-label">Nombre:</label>
              <input type="text" name="UName" placeholder="Usuario" class="formular-input-txt">
              <label class="formular-label">Correo:</label>
              <input type="email" name="Email" placeholder="Email" class="formular-input-txt" >
              <label class="formular-label">Asunto:</label>
              <input type="text" name="Subject" placeholder="Asunto" class="formular-input-txt"">
              <textarea name="msg" cols="30" rows="10" class="formular-textarea" placeholder="Escribir mensaje"></textarea>
              <input type="submit" class="btn formular-btn" name="btn-send" value="Enviar">
              <!-- <button class="btn btn-success" name="btn-send"> Send </button> -->
        </form>
      </div>
    </section>
    <?php include("includes/footer.php");?>
  </div>
</body>
<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="js/darkmode.js"></script>
</html>