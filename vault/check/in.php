<?php 
	include '../db.inc.php';
	
	$sql = "SELECT * FROM `dhs16`.`dhs16_user` WHERE name = ?";
	
	$sth = $db->prepare($sql);
	$sth->bindParam( 1, $_POST['name']);
	$sth->execute();
	
	$row = $sth->fetch(PDO::FETCH_ASSOC);
	if($row == false){
		$sql = "INSERT INTO `dhs16`.`dhs16_user` (`id`, `name`, `phone`, `seat`, `social`) VALUES (NULL,?,?,?,?)";
		
		$sth = $db->prepare($sql);
		$sth->bindParam( 1, strtolower($_POST['name']));
		$sth->bindParam( 2, $_POST['phone']);
		$sth->bindParam( 3, $_POST['seat']);
		$sth->bindParam( 4, $_POST['social']);
		$sth->execute();
	}	

	
	$sql = "INSERT INTO `dhs16`.`dhs16_problem` (`id`, `header`, `description`, `parts`, `name`, `social`, `check_in`) 
			VALUES (NULL, ?, ?, ?, ?, ?, ?);";
	
	
	$checkIn = date("Y-m-d H:i:s");
	
	$sth = $db->prepare($sql);
	$sth->bindParam( 1, $_POST['problem']);
	$sth->bindParam( 2, $_POST['problemDesc']);
	$sth->bindParam( 3, $_POST['parts']);
	$sth->bindParam( 4, $_POST['name']);
	$sth->bindParam( 5, $_POST['social']);
	$sth->bindParam( 6, $checkIn);
	$sth->execute();
	
	
	
	header('Location: ../receipt.php?social='.$_POST['social']);
?>