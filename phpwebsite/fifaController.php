<?php
/*
*
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
    $created_by = $_SESSION['id'];
    $players= $_POST['p-amount'];

    $sql = "INSERT INTO teams (teamname, players, created_by ) 
values (:teamname,:players , :created_by)";

    $prepare = $db->prepare($sql); //protect against sql injection
    $prepare->execute([
        ':teamname' => $teamname,
        ':players' => $players,
        ':created_by' => $created_by
        
    ]);
    header('Location: index.php');
    exit;
}


if($_POST['type'] == 'delete'){
    $id = $_GET['id'];
    $sql = "DELETE FROM teams WHERE id = :id";
    $prepare = $db->prepare($sql);
    $prepare->execute([
        ':id' => $id
    ]);

    $msg = 'Team deleted';
    header( "Location: index.php?msg=$msg");
    exit;
}


if($_POST['type'] == 'edit'){
    $id = $_GET['id'];

    $sql = "UPDATE teams SET
    teamname = :teamname,
    players  = :players 
    WHERE id = :id";
    $prepare = $db->prepare($sql);
    $prepare->execute([
        ':id' => $id,
        ':teamname' => $_POST['teamname'],
        ':players' => $_POST['p-amount']
    ]);
    header("Location: team.php?id=$id");
    exit;

}

if ($_POST['type'] == 'create-competition') {



    $sqldelete = "DELETE FROM matches";
    $querydel = $db->query($sqldelete); //verzoek naar de database, voer sql van hierboven uit
    


    $sql = "SELECT * FROM teams";
    $query = $db->query($sql); //verzoek naar de database, voer sql van hierboven uit
    $teams = $query->fetchAll(PDO::FETCH_ASSOC); //multie demensionale array //alles binnenhalen

    $teamsArray = array();

    foreach ($teams as $team) {
        array_push($teamsArray, $team['teamname']);
    }

    $arrLength = count($teamsArray);


            for ( $i = 0; $i < $arrLength; $i++)
            {
                for ($x = 0; $x < count($teamsArray); $x++ )
                {
                    if($teamsArray[0] !== $teamsArray[$x])
                    {
                        $matchsql = "INSERT INTO matches ( team1, team2 )
                        values (:team1 , :team2)";
                        $prepare = $db->prepare($matchsql);
                        $prepare->execute([
                            
                            ':team1' => $teamsArray[0],
                            ':team2' => $teamsArray[$x]
                        ]);
                    }
                }
                array_shift($teamsArray);
            }
    //exit;
    header("Location: matches.php");
}

