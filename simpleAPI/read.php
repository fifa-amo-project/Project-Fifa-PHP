<?php
	require 'index.php';
	header('Content-Type: application/json');
	$json = json_encode($api);

	echo $json;
?>

