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
    $created_by = $_SESSION['id'];

    $sql = "INSERT INTO teams (teamname, created_by ) 
values (:teamname, :created_by)";

    $prepare = $db->prepare($sql); //protect against sql injection
    $prepare->execute([
        ':teamname' => $teamname,
        ':created_by' => $created_by 
    ]);
    header('Location: index.php');
    exit;
}


