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
                echo " <a href='team.php?id=$id'> {$teamname} </a>" ;

            }
            ?>
            
            <div class="team-form">
                <h4>Voeg een Team toe:</h4>

                <form action="fifaController.php" method="post">
                <input type="hidden" name="type" value="create">
                    <div class="form-group">
                        <label for="teamname"><b>Team</b></label>
                        <input type="text" placeholder="Team Naam" name="teamname" required>
                        
                        <label for="p-amount">selecteer een aantal spelers</label>
                        <select name="p-amount" id="playeramount">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                        </select>
                    </div>

                    <div class="form-group">
                    <input type="submit" id="create_button" value="Team toevoegen">
                    </div>
                  


                </form> <!-- end of form action -->

            </div><!-- end of team-form -->
        </div><!-- end of teams -->
    </div><!-- end of container -->
</main>

<?php

require 'footer.php';
?>
