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

if(!isset($_SESSION['is_Admin'])){
    header('Location: redirect_auth.php');
    exit;
}
?>
<main>

<div class="competition">
    <div class="container">

        <div class="games">

    <p><?php

        /*foreach ($teams as $team){
            $teamname = htmlentities($team['teamname']);
            $id = htmlentities($team['id']);
            echo " <a href='team.php?id=$id'> {$team['teamname']} </a>" ;

        }
        */

        $teamsArray = array();

        foreach ($teams as $team) {
            array_push($teamsArray, $team['teamname']);
        }

        $arrLength = count($teamsArray);

        if(!isset($_SESSION['id'])){
            header('Location: redirect.php');
            exit;
        }


        $isMatchMade = false;
        if ($isMatchMade = true) {

            if($arrLength == 1)
            {
                echo "<div class='error-box' <p class='errorMSg'>error:</p><p class='errorMSG'> er is maar een team</p> </div>";
            }else {
                for ( $i = 0; $i < $arrLength; $i++)
                {
                    for ($x = 0; $x < count($teamsArray); $x++ )
                    {
                        if($teamsArray[0] !== $teamsArray[$x])
                        {
                            echo "<div class='game'>";
                            echo "<p> {$teamsArray[0]}</p>";
                            echo "<h3> VS </h3>";
                            echo "<p> {$teamsArray[$x]}</p>";
                            echo "</div>";
                        }
                    }
                    array_shift($teamsArray);
                }
            }
        }










        /*for ( $i = 0; $i<count($teams); $i += 2 ) {
            $team = $teams[$i];
            $teamname = htmlentities($team['teamname']);
            echo " <div class='game'> <p> {$teamname}</p>";
            echo "<h3> VS </h3>";

            $team = $teams[$i + 1];
            echo " <p> {$team['teamname']}</p></div>";
        }

        /*for ( $i = 0; $i<count($teams); $i += 2 ) {
            $team = $teams[$i];
            $teamname = htmlentities($team['teamname']);
            echo " <div class='game'> <p> {$teamname}</p>";
            echo "<h3> VS </h3>";

            $team = $teams[$i + 1];
            echo " <p> {$team['teamname']}</p></div>";
        }
        */
        /* ergens opslaan qua wedstrijden

        */

        ?></p>
        </div>
    </div>


</div>

</main>


<?php

require 'footer.php';
?>

