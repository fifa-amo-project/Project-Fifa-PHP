<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 14-4-2019
 * Time: 08:38
 */


require "config.php";
//alles meegeven wat ik wil gaan gebruiken hier onder
$sql = "SELECT * FROM users"; //gewoon een opslag van een string die je later gaat gebruiken
$query = $db->query($sql); //verzoek naar de database, voer sql van hierboven uit
$users = $query->fetchAll(PDO::FETCH_ASSOC); //multie demensionale array //alles binnenhalen
require 'header.php';




?>



    <h2>Welcome to logintest!</h2>



    <h3>users made</h3>


    <?php
    echo '<ul>';
    foreach ($users as $user){
        $username = htmlentities($user['username']); //zodat html tags worden gecancled
        $id = htmlentities($user['id']);
        echo "<li><a href='detail.php?id={$user['id']}'>$username</a></li>"; //"" zijn smart cwods //loop door een lijst
    }
    echo '</ul>';
    ?>

    <a href="create.php">Create new user</a>





<?php
//master datail page is dat als je op iets drukt meer data te zien krijgt
// list met data bijvoorbeeld lijst met producten van bol.com en als je op dat product click dan krijg je meer detail
//sql injectie is ?

require 'footer.php';
?>