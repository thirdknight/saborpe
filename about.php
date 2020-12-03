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
  <link href="build/css/styles.css" rel="stylesheet">
  <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
  <title>html Boilerplate Edi</title>
</head>

<body>
  <div class="page">
    <section id="about" class="main-header hero is-full-height">
      <?php include("includes/header.php");?>
    </section>
    <div class="section section-banner">
      <h2 class="title">Sobre Nosotros</h2>
      <div class="container container-flex">
        <div class="column column-50">
          <p>El 8 de Enero del 2017 en el distrito de los Olivos se inaugura el Restaurante "Bahía", bajo el concepto de ofrecer los mejores platos de nuestra cocina peruana, excediendo las expectativas de nuestros clientes.</p>
          <p>Desde nuestros inicios hasta hoy, seguimos manteniendo el alto compromiso de brindar un producto de calidad, respetando las tendencias de la gastronomía moderna, tratar a nuestros clientes bajo el concepto de calidez y profesionalismo en el servicio, sin dejar de lado la competitividad y amplia experiencia de nuestros cheffs; ideales que hoy en día nos han permitido ser reconocidos dentro de este rubro tan competitivo.</p>
        </div>
        <div class="column column-50">
          <img src="build/assets/images/nosotros.jpg" alt="nosotros">
        </div>
      </div>
    </div>
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