<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 16-4-2019
 * Time: 10:17
 */

require 'header.php';
$sql = "SELECT * FROM teams"; //gewoon een opslag van een string die je later gaat gebruiken
$query = $db->query($sql); //verzoek naar de database, voer sql van hierboven uit
$teams = $query->fetchAll(PDO::FETCH_ASSOC); //multie demensionale array //alles binnenhalen

 if(!isset($_SESSION['id'])){
     header('Location: redirect.php');
     exit;
 }
?>

<main>
    <div class="container">
        <div class="teams">
            <h3>Dit zijn de Teams:</h3>
             <?php
            foreach ($teams as $team){
                $teamname = htmlentities($team['teamname']);
                $id = htmlentities($team['id']);
                echo "<li> {$team['teamname']}</li>";

            }
            ?>
            <div class="team-form">
                <h4>Voeg een Team toe:</h4>
                <form action="fifaController.php" method="post">
                <input type="hidden" name="type" value="create">

                    <label for="teamname"><b>Team</b></label>
                    <input type="text" placeholder="Team Naam" name="teamname" required>

                    <button type="submit" id="create_button" value="Create new User">Team Toevoegen</button>


                </form> <!-- end of form action -->

            </div><!-- end of team-form -->
        </div><!-- end of teams -->
    </div><!-- end of container -->
</main>

<?php

require 'footer.php';
?>
