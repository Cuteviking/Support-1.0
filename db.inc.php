<?php
	// Definierar konstanter med användarinformation.
	define ('DB_USER', 'root');
	define ('DB_PASSWORD', '');
	define ('DB_HOST', 'localhost');
	define ('DB_NAME', 'dhs16');
	
	// Skapar en anslutning till MySql och databasen 
	// $db = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	// mysql_select_db(DB_NAME);
	// mysql_set_charset('UTF-8', $db);
	
	// Med PDO
	$dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8';
	
	$db = new PDO($dsn,
			 DB_USER, 
			DB_PASSWORD);
	
	// MySQL 5.1.17 eller senare
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>
