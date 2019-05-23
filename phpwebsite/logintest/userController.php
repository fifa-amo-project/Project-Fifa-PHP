<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 14-4-2019
 * Time: 09:07
 */


if ($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('Location: index.php');
    exit;
}

require 'config.php';
require 'header.php';


    if ($_POST['type'] == 'create') {
        $username = $_POST['username'];
        $password = $_POST['password'];


        $sql = "INSERT INTO users (username, password) 
values (:username, :password)";

        $prepare = $db->prepare($sql); //protect against sql injection
        $prepare->execute([
            ':username' => $username,
            ':password' => $password,
        ]);
        header('Location: index.php');
    }


    if ($_POST['type'] == 'delete') {

        $id = $_GET['id'];
        $sql = "DELETE FROM users WHERE id = :id";
        $prepare = $db->prepare($sql);
        $prepare->execute([
            ':id' => $id
        ]);
        header('location: index.php');
        exit;
    }

    if ($_POST['type'] == 'edit') {

        $id = $_GET['id'];
        $sql = "UPDATE users SET
    username = :username,
    password = :password,
    WHERE id = :id ";
        $prepare = $db->prepare($sql);
        $prepare->execute([
            ':username' => $_POST['username'],
            ':password' => $_POST['password'],
            ':id' => $id
        ]);

        header("location: detail.php?id=$id");
        exit;
    }


//$ sql.......onhou dit in je geheuge dit is nog een string die sql wil ik straks uitvoeren
// into contacts....  welke kollomen wil ik datta stoppen
// $sql........... wat is sql string die we gaan toevoegen // select haalt dingen uit data base

//echo '<pre>';
// echo $_POST['achternaam'];
// var-dump($_POST); //_post variable kan je het controleren of het werkt dat alle info van create echt aan komt