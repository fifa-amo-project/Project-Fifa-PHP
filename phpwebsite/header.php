<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 15-4-2019
 * Time: 11:23
 */
require 'config.php';
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="./img/soccer-ball.ico">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->

<!-- musts voor site:
  spelers pagina: voeg een speler toe form
  teams pagina: maak een nieuw team form, alleen admin kan verwijderen. alle teams moeten wel zichtbaar zijn.
een gebruiker moet ook zijn eigen team aan kunnen passen.
poule pagina
  main page met banner
  inlog pagina
  register pagina
  alles met een "Touch of football"
-->

<header>

    <div class="container">
        <div class="header">
            <div class="title">
                <h1><a href="index.php">F<span>I</span>F<span>A</span></a></h1>
            </div>

            <nav>
                <a href="spelers.php">Spelers</a>
                <a href="teams.php">Teams</a>
                <a href="poules.php">Wedstrijden</a>
                <a href="position.php">Standen</a>
            </nav>
            <?php
            if(isset($_SESSION['id'])){
                echo 
                ' <a href="logout.php">Uitloggen</a>';
            }else{
                echo 
               '<div class="register-or-login">
                <a href="login.php">Inloggen</a>
                <a href="register.php">Registreren</a>
            </div>';
                
            }
            ?>
           
        </div> <!-- end of header -->
    </div> <!-- end of container -->
</header>
