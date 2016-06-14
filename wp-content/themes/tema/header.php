<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url) ?>">
	<link rel="shortcut icon" href="/wp-content/themes/tema/imagenes/logo-as.png" type="image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<title><?php bloginfo(name); ?></title>
  <?php wp_head(); ?>
</head>


     <header class="menu">
          <figure>
               <a href="/index.php">
                    <img src="/wp-content/themes/tema/imagenes/logo-as.png" alt="">
               </a> 
          </figure>

          <h1>
             <?php bloginfo(name); ?>
          </h1>

         


          <?php include TEMPLATEPATH . "/templates/nav.php" ?>
          
     </header>

     <div class="baner">
       <img src="/wp-content/themes/tema/imagenes/baner.jpg" alt="" class="banerImg">
    </div>
    <div class="degradado"></div>

     