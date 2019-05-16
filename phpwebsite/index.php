<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 15-4-2019
 * Time: 11:22
 */
require 'header.php';
$sql = "SELECT * FROM teams";
$query = $db->query($sql);
$teams = $query->fetchAll(PDO::FETCH_ASSOC);



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
        
        </div>

        <div class="main-teams">
          <h3>Uitgelichte Teams</h3>
          <?php 
          foreach ($teams as $team) {
            $teamname = htmlentities($team['teamname']);
            echo"<a href='team.php?id={$team['id']}'> {$teamname} </a>";
          }
          ?>
        </div>

      </div><!-- end of container -->
    </div><!-- end of players and teams -->
  </main>

<?php
require 'footer.php';
?>
