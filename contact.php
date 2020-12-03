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
      <h2>Contáctenos</h2>
      <div class="container container-flex">
        <div class="contact-information  formular column column-50">
          <h3>Informacion de Contacto</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt nulla non vero, eligendi eius reiciendis illum tempora veritatis quaerat facilis, dignissimos perspiciatis suscipit impedit voluptates in esse. Fuga, eveniet perferendis.Consequatur, laborum quos ut a consectetur inventore dolor, distinctio maiores cupiditate repellendus aut consequuntur et at vel eligendi sed facere. Ut maiores facere veniam neque in ab reiciendis similique ipsum.
          </p>
          <p><span class="icon-phone"></span>Telefono1 : 8999900000</p>
          <p><span class="icon-location"></span>Urb. Los Santos 234 Lima 14, Peru</p>
          <p><span class="icon-mail"></span>consultas@saborpe.com</p>
        </div>
        <form action="enviar-prueba.php" method="post" class="formular column column-50">
           <label for="" class="formular-label">Nombre:</label>
           <input type="text" class="formular-input-txt" name="nombre">
           <label for="" class="formular-label">Correo:</label>
           <input type="text" class="formular-input-txt" name="correo">
           <label for="" class="formular-label">Telefono:</label>
           <input type="text" class="formular-input-txt" name="telefono">
           <label for="" class="formular-label">Mensaje:</label>
           <textarea name="mensaje" id="" cols="30" rows="10" class="formular-textarea"></textarea>
           <input type="submit" class="btn formular-btn " value="Enviar">
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