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

	<div class="info">
		<div class="container">
			<h3>Informatie over het toernooi</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quasi sapiente voluptatibus, placeat dolorem deleniti repudiandae quis quisquam. Sit nisi ducimus exercitationem error veritatis at ex aliquam assumenda cum eos!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint fugit odio, at, eveniet laudantium, molestiae ea quam doloremque sapiente dignissimos modi minus natus delectus alias voluptatum omnis sunt esse. Debitis.</p>
		</div>
	</div>

    <div class="players-and-teams">
      <div class="container">

        <div class="main-players">
          <h3>Uitgelichte Spelers</h3>
        
        </div>

        <div class="main-teams">
          <h3>Uitgelichte Teams</h3>
          <?php 
          foreach ($teams as $team) {
            echo"<a href='team.php?id={$team['id']}'> {$team['teamname']} </a>";
          }
          ?>
        </div>

      </div><!-- end of container -->
    </div><!-- end of players and teams -->
  </main>

<?php
require 'footer.php';
?>
