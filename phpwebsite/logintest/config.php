<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 14-4-2019
 * Time: 08:33
 */





$dbHost = 'localhost';
$dbUser = 'root';
$dbPss = '';
$dbName = 'logintest';

$db = new pdo( //conecting object
    "mysql:host=$dbHost;dbname=$dbName",
    $dbUser,
    $dbPss
);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>