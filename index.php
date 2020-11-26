<?php include("includes/a_config.php"); ?>
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
  <!-- <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon"> -->
  <title>Saborpe</title>
</head>

<body>
  <div class="page">
    <?php include("includes/header.php");?>
    <main>
      <?php include("includes/section-banner.php");?>
      <?php include("includes/section-description.php");?>
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