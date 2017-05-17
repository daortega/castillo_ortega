<!DOCTYPE html>
<html lang="es">
<?php
$title = "CompuGames-Ki Recommendations";
$description = "Some recommendations of our favorite games from Steam (Not Ranked).";
$image = "https://userscontent2.emaze.com/images/72268e61-ad23-4098-96f2-507d30a10516/d010344b9c2f17e8a03264d82680934b.jpg";?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo($title);?></title>
<meta name="description" content="<?php echo($description);?>">
<meta name="image" content="<?php echo($image);?>">
<meta itemprop="name" content="<?php echo($title);?>">
<meta itemprop="description" content="<?php echo($description);?>">
<meta itemprop="image" content="">
<meta name="og:title" content="<?php echo($title);?>">
<meta name="og:description" content="<?php echo($description);?>">
<meta name="og:image" content="<?php echo($image);?>">
<meta name="og:site_name" content="<?php echo($title);?>">
<meta name="og:locale" content="es_CL">
<meta name="og:type" content="website">
<link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
<link href="libs/css/bootstrap.min.css" rel="stylesheet">
<link href="libs/css/style.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-10 col-sm-offset-1">
<header>
<div class="masthead clearfix">
<div class="inner">
<h1 class="masthead-brand"><?php echo($title);?></h1>
<nav>
<ul class="nav masthead-nav">
<li<?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?> class="active" <?php };?>><a href="index.php">Blog</a></li>
<li<?php if((basename($_SERVER['PHP_SELF']))=='visualizacion.php'){?> class="active" <?php };?>><a href="visualizacion.php">Visualization</a></li>
<li<?php if((basename($_SERVER['PHP_SELF']))=='faq.php'){?> class="active" <?php };?>><a href="faq.php">FAQ</a></li>
</ul>
</nav>
</div>
</div>
</header>
