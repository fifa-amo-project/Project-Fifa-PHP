<?php
require 'header.php';
$id = $_GET['id'];
$sql =  "SELECT * FROM teams WHERE id = :id";
$prepare =  $db->prepare($sql);
$prepare->execute([
    ':id' => $id
]);

?>