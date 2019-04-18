<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 1-4-2019
 * Time: 09:28
 */
if ($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('Location: index.php');
    exit;
}


require 'config.php';


if ($_POST['type'] == 'create') {
    $teamname = $_POST['teamname'];
    /* $created_by = $_POST['created_by']; */


    $sql = "INSERT INTO teams (teamname ) 
values (:teamname)";

    $prepare = $db->prepare($sql); //protect against sql injection
    $prepare->execute([
        ':teamname' => $teamname

    ]);
    header('Location: index.php');
}


/* if ($_POST['type'] == 'delete') {

    $id = $_GET['id'];
    $sql = "DELETE FROM recipes WHERE id = :id";
    $prepare = $db->prepare($sql);
    $prepare->execute([
        ':id' => $id
    ]);
    header('location: index.php');
    exit;
}
*/

/* if ($_POST['type'] == 'edit') {

    $id = $_GET['id'];
    $sql = "UPDATE recipes SET
    title = :title,
    picture_url = :picture_url,
    description = :description,
    ingredients = :ingredients
    WHERE id = :id ";
    $prepare = $db->prepare($sql);
    $prepare->execute([
        ':title' => $_POST['title'],
        ':picture_url' => $_POST['picture_url'],
        ':description' => $_POST['description'],
        ':ingredients' => $_POST['ingredients'],
        ':id' => $id
    ]);

    header("location: detail.php?id=$id");
    exit;
}

*/
//$ sql.......onhou dit in je geheuge dit is nog een string die sql wil ik straks uitvoeren
// into contacts....  welke kollomen wil ik datta stoppen
// $sql........... wat is sql string die we gaan toevoegen // select haalt dingen uit data base

//echo '<pre>';
// echo $_POST['achternaam'];
// var-dump($_POST); //_post variable kan je het controleren of het werkt dat alle info van create echt aan komt

/* <?php
                foreach ($teams as $team){
                    $teamname = htmlentities($team['teamname']);
                    $id = htmlentities($team['id']);
                    echo "<li> {$team['teamname']}</li>";

                }
                ?>*/