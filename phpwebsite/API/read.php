<?php
	require 'index.php';
	header('Content-Type: application/json');
	$json = json_encode($api);

	

	if($key == "Gr03n3Cactus")
	{
		return $json;
	}
?>

