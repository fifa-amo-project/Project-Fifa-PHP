<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 16-4-2019
 * Time: 10:17
 */

require 'header.php';
if(!isset($_SESSION['id'])){
    header('Location: redirect.php');
    exit;
}
$sql = "SELECT * FROM teams"; //gewoon een opslag van een string die je later gaat gebruiken
$query = $db->query($sql); //verzoek naar de database, voer sql van hierboven uit
$teams = $query->fetchAll(PDO::FETCH_ASSOC); //multie demensionale array //alles binnenhalen

$sql = "SELECT players.id, players.playername, players.created_by, teams.teamname 
FROM `players`
INNER JOIN teams
ON players.playerteam = teams.id"; //gewoon een opslag van een string die je later gaat gebruiken
$query = $db->query($sql); //verzoek naar de database, voer sql van hierboven uit
$players = $query->fetchAll(PDO::FETCH_ASSOC); //multie demensionale array //alles binnenhalen



?>



<main>
    <div class="container">
        <div class="spelers">
            <h3>Dit zijn de Spelers:</h3>
            <ul>
                <?php
                foreach ($players as $player){
                    $playername = htmlentities($player['playername']);
                    $playerteam = htmlentities($player['teamname']);
                    echo " <li> {$player['playername']}, {$player['teamname']} </li> " ;

                }
                ?>
            </ul>

            <div class="player-form">
                <h4>Voeg een Speler toe:</h4>
                <form action="fifaController.php" method="post">
                    <input type='hidden' name='type' value='create-player'>

                    <label for="playername"><b>Naam</b></label>
                    <input type="text" placeholder="Speler Naam" name="playername" required>

                    <label for="playerteam"><b>Speler Team</b></label>
                    <select name="playerteam" id="playeramount">
                        <?php
                        foreach ($teams as $team) {

                                echo "<option value='{$team['id']}'> {$team['teamname'] } </option>";


                        }
                        ?>
                    </select>

                    <button type="submit">Speler Toevoegen</button>


                </form> <!-- end of form action -->

            </div><!-- end of player-form -->
        </div><!-- end of spelers -->
    </div><!-- end of container -->
</main>


<?php

require 'footer.php';
?>
