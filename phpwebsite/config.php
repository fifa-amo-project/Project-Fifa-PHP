<?php

$dbHost = 'localhost';
$dbUser = 'u52357p49555_Jai013';
$dbPass = 'Frikandel123!';
$dbName = 'u52357p49555_fifa';

$db = new PDO(
	"mysql:host=$dbHost;dbname=$dbName", 
	$dbUser, 
	$dbPass
);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

session_start();