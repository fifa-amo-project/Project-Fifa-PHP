<?php

require 'ApiConfig.php';
$sql = "SELECT * FROM teams"; 
$teams = $db->query($sql);
$api = $teams->fetchAll(PDO::FETCH_ASSOC); 

$matchsql = "SELECT * FROM matches";
$matches = $db-> query($sql);
$matchapi = $matches->fetchAll(PDO::FETCH_ASSOC);

?>