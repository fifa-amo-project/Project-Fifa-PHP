<?php

require 'ApiConfig.php';
$sql = "SELECT * FROM teams"; 
$teams = $db->query($sql);
$api = $teams->fetchAll(PDO::FETCH_ASSOC); 
var_dump($api);
?>