<?php
require 'index.php';
header('Content-Type: application/json');
$matchjson = json_encode($matchapi);
echo $matchjson;

if($key == "Gr03n3Cactus")
	{
		return $matchjson;
	}
?>