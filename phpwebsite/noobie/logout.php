<?php
/**
 * Created by PhpStorm.
 * User: Aaron
 * Date: 14-4-2019
 * Time: 12:44
 */


session_start();
session_destroy();
header('Location: login.php');
?>

