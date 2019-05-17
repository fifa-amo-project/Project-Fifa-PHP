<?php
require 'header.php';
$id = $_GET['id'];

$sql =  "SELECT * FROM teams WHERE id = :id";
$prepare =  $db->prepare($sql);
$prepare->execute([
    ':id' => $id
]);
$team = $prepare->fetch(PDO::FETCH_ASSOC);

$teamname = htmlentities($team['teamname']);
$p_amount = htmlentities($team['players']);

if(!isset($_SESSION['id'])){
    header('Location: redirect.php');
    exit;
}

 $sql = "SELECT players.id, players.playername, teams.teamname
FROM `players`
INNER JOIN teams
ON players.playerteam = teams.id
WHERE teams.teamname = '$team[teamname]'"; //gewoon een opslag van een string die je later gaat gebruiken
$query = $db->query($sql); //verzoek naar de database, voer sql van hierboven uit
$players = $query->fetchAll(PDO::FETCH_ASSOC); //multie demensionale array //alles binnenhalen

?>
    <main>
        <div class="container">
            <div class="teams">
                <h3>Dit is  <?php echo $teamname  ?></h3>
                <p>Aantal spelers: <?php echo $p_amount  ?></p>
                <p>Spelers in dit team:</p>
                <ul>
                    <?php



                         foreach ($players as $player){
                             $playername = htmlentities($player['playername']);

                             echo " <li> {$player['playername']}</li> " ;
                          }



                    ?>
                </ul>
                <img src="https://via.placeholder.com/300x200" alt="">
                <form action='fifaController.php?id=<?=$id?>' method="post">
                    <?php

                    if(isset($_SESSION['is_Admin'])){
                        echo "
                        <div class='form-group'>
                            <input type='hidden' name='type' value='delete'>
                            <input type='submit' value='delete'>
                        </div>
                    ";
                    }
                    ?>
                </form>
                <?php
                if(isset($_SESSION['is_Admin'])){
                    echo "
                            <a href='edit.php?id=$id'>team aanpassen</a>
                        ";
                }
                ?>
            </div>
        </div>
    </main>



<?php 
require 'footer.php';
?>