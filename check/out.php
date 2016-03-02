<?php
	include 'db.inc.php';
	
	$sql = "UPDATE  `dhs16`.`dhs16_problem` SET  `check_out` =  ?,`sign` =  ? WHERE  `dhs16_problem`.`id` = ?"; 	
	
	
	$sth = $db->prepare($sql);
	$sth->bindParam( 1, date("Y-m-d H:i:s"));
	$sth->bindParam( 2, $_GET['sign']);
	$sth->bindParam( 3, $_GET['id']);
	$sth->execute();

	header('Location: ../checkout.php?checkOut='.$_GET['checkOut']);
?>