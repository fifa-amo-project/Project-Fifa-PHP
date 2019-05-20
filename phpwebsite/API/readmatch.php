<?php
require 'index.php';
header('Content-Type: application/json');
$matchjson = json_encode($matchapi);
echo $matchjson;

?>