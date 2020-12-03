<?php include("includes/a_config.php");?>
<!DOCTYPE html>
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
    <div class="popup" id="popup">
      <div class="popup-content">
        <img src="" alt=""id="popup-img" class="popup-img">
      </div>
      <div id="popup-button" class="popup-button">+</div>
    </div>
    
    <section id="gallery" class="main-header hero is-full-height">
      <?php include("includes/header.php");?>
    </section>
    <main>
      <div class="gallery">
        <h2>Nuestra Galeria</h2>
        <div class="container container-flex ">
          <div class="column column-25">
            <img src="build/assets/images/gallery/g1.jpg" alt="g1" class="gallery-img gallery-img-big">
            <img src="build/assets/images/gallery/g2.jpg" alt="g2" class="gallery-img gallery-img-small">
          </div>
          <div class="column column-25">
            <img src="build/assets/images/gallery/g3.jpg" alt="g3" class="gallery-img gallery-img-small">
            <img src="build/assets/images/gallery/g4.jpg" alt="g4" class="gallery-img gallery-img-big">
          </div>
          <div class="column column-25">
            <img src="build/assets/images/gallery/g5.jpg" alt="g5" class="gallery-img gallery-img-big">
            <img src="build/assets/images/gallery/g6.jpg" alt="g5" class="gallery-img gallery-img-small">
          </div>
          <div class="column column-25">
            <img src="build/assets/images/gallery/g7.jpg" alt="g7" class="gallery-img gallery-img-small">
            <img src="build/assets/images/gallery/g8.jpg" alt="g8" class="gallery-img gallery-img-big">
          </div>
        </div>
      </div>
    </main>  
    <?php include("includes/footer.php");?>
  </div>
</body>
<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="build/js/scripts.js"></script>
</html>