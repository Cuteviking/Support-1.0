<?php
	include '../db.inc.php';
	
	$sql = "UPDATE  `dhs16`.`dhs16_problem` SET `collected` = 1 WHERE `dhs16_problem`.`id` = ?"; 	
	
	
	$sth = $db->prepare($sql);
	$sth->bindParam( 1, $_GET['id']);
	$sth->execute();

	header('Location: ../../checkout.php?checkOut='.$_GET['checkOut']);
?>