<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 16-4-2019
 * Time: 10:17
 */
require 'header.php';
$sql = "SELECT * FROM matches"; //gewoon een opslag van een string die je later gaat gebruiken
$query = $db->query($sql); //verzoek naar de database, voer sql van hierboven uit
$matches = $query->fetchAll(PDO::FETCH_ASSOC); //multie demensionale array //alles binnenhalen
if(!isset($_SESSION['id'])){
    header('Location: redirect.php');
    exit;
}

if(!isset($_SESSION['is_Admin'])){
    header('Location: redirect_auth.php');
    exit;
}
?>
<main>

<div class="competition">
    <div class="container">

        <div class="games">

    <?php
    

    foreach ($matches as $match) {
        echo "<div class='game'>";
        echo "<form action='fifaController.php?id={$match['id']}' method='post'>

                                  <input type='hidden' name='type' value='create-score'>
                                  
                                  
                                 
                                  <p> {$match['team1']}</p>
                                  <input type='hidden' name='team1' value='{$match['team1']}' id='team1' >
                                  <input type='text' placeholder='score {$match['team1']}' name='result_team1' id='result_team1' pattern='[0-9]' >
                                  
                                  <h3> VS </h3>
                                  
                                  
                                   <p> {$match['team2']}</p>
                                  <input type='text' placeholder='score {$match['team2']}' name='result_team2' id='result_team2' pattern='[0-9]' >
                                  <input type='hidden' name='team2' value='{$match['team2']}' id='team2' >
                                  <input type='submit' id='create_score_button' value='Score bevestigen'> 
                                  
                                  </form>";
        echo "</div>";
    }

   

        ?>
        </div>
    </div>


</div>

</main>


<?php

require 'footer.php';
?>

