<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 15-4-2019
 * Time: 11:22
 */

require 'config.php';
require 'header.php';
?>

  <main>
    <div class="banner">
      <div class="container">

        <img src="img/banner.jpg" alt="banner.png">
        <div class="centered">
          <h2>Welkom op F<span>I</span>F<span>A</span></h2>
        </div><!-- end of centered -->
        <div class="bottom">
          <span>Voetbal, niet meer en niet minder.</span>
        </div><!-- end of bottom -->

      </div> <!-- end of container -->

    </div> <!-- end of "banner" -->

    <div class="players-and-teams">
      <div class="container">

        <div class="main-players">
          <h3>Uitgelichte Spelers</h3>
          <p>Speler Naam</p>
          <p>Speler Naam</p>
          <p>Speler Naam</p>
        </div>

        <div class="main-teams">
          <h3>Uitgelichte Teams</h3>
          <p>Team Naam</p>
          <p>Team Naam</p>
          <p>Team Naam</p>
        </div>

      </div><!-- end of container -->
    </div><!-- end of players and teams -->
  </main>

<?php
require 'footer.php';
?>