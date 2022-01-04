<!doctype html>
<!--This is flower box
____  ___       __________.__                               
\   \/  /__ __  \____    /|__|___.__._____    ____    ____  
 \     /|  |  \   /     / |  <   |  |\__  \  /    \  / ___\ 
 /     \|  |  /  /     /_ |  |\___  | / __ \|   |  \/ /_/  >
/___/\  \____/  /_______ \|__|/ ____|(____  /___|  /\___  / 
      \_/               \/    \/          \/     \//_____/ 
_________              .__                
\_   ___ \_____ _______|  |   ____  ______
/    \  \/\__  \\_  __ \  |  /  _ \/  ___/
\     \____/ __ \|  | \/  |_(  <_> )___ \ 
 \______  (____  /__|  |____/\____/____  >
        \/     \/                      \/
-->
<html lang="en"> 
  <head>
    <title><?=e($title)?> | <?=SITE_NAME?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700%7cSen:700&display=swap" rel="stylesheet">
    <link rel="stylesheet" media="print" type="text/css" href="Style/print.css" />
    <link rel="stylesheet" href="flash.css"/>
    <?php if($title == 'Carlos\'s Page') : ?>
        <link rel="stylesheet" media="all and (min-width: 769px)" type="text/css" href="Style/desktop_homepage.css" />
        <link rel="stylesheet" media="all and (max-width: 768px)" type="text/css" href="Style/mobile_homepage.css" />
    <?php else : ?>
        <link rel="stylesheet" media="all and (min-width: 769px)" type="text/css" href="Style/desktop_other.css" />
        <link rel="stylesheet" media="all and (max-width: 768px)" type="text/css" href="Style/mobile_other.css" />
        <?php if($title == 'Contact') : ?>
            <?php require __DIR__ . '/contact_css.php';?>
        <?php elseif($title == 'Success') : ?>
            <?php require __DIR__ . '/info_css.php';?>
        <?php elseif($title == 'Gallery') : ?>
            <?php require __DIR__ . '/gallery_css.php';?>
        <?php elseif($title == 'Introduciton') : ?>
            <?php require __DIR__ . '/intro_css.php';?>
        <?php elseif($title == 'Portfolio') : ?>
            <?php require __DIR__ . '/port_css.php';?>
        <?php elseif($title == 'Signin') : ?>
            <?php require __DIR__ . '/signin.css.php';?>
        <?php elseif($title == 'Detail') : ?>
            <?php require __DIR__ . '/detail.css.php';?>
        <?php else :?>
            <?php require __DIR__ . '/404.css.php';?>
        <?php endif ;?>
    <?php endif ;?>
  </head>
   
<?php if($title == 'Carlos\'s Page') : ?>
  <body>
    <div id="wrapper"> <!-- Contains the entire page -->

      <header> <!-- start of top section -->
        <img class="city" src="images/city.jpg"
             alt="citybg" />
        <img class="lh" src="images/left%20hand.png"
             alt="lefthand" />
        <img class="rh" src="images/right%20hand.png"
             alt="righthand" />
        <p class="name">
          I AM <span>CARLOS</span>.
          <img class="namelogo" alt="namelogo" src="images/name%20logo.png" />
        </p>
        <p class="describe">
          <span id="describe1">- Landscape Designer -</span>
          <span id="describe2">- Gamer -</span>
          <span id="describe3">- Graphic Designer -</span>
        </p>
        <img class="intro" src="images/intro.png"
             alt="intro" />
      </header><!-- end of top section -->
<?php else : ?>

  <?php require __DIR__ . '/flash.php';?> <!-- Creating flash message -->

    <body>
      <div id="wrapper"><!-- Contains the entire page -->
        <header><!-- start of top section -->
          <div style="background-color: #000;"></div>
        </header><!-- end of top section -->
<?php endif ; ?>