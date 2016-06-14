<?php
	require_once('../../../resources/php/sql.php');

	$results = new query("SELECT * FROM dhs16_user WHERE social = '".$_POST['social']."';");

	$user_exists = false;
	foreach ($results->get() as $row)
		$user_exists = true;

	if(!$user_exists){
		$sqlUser = new query("INSERT INTO dhs16_user (id, name, phone, seat, social) VALUES (NULL,'".strtolower($_POST['name'])."','".$_POST['phone']."','". $_POST['seat']."','".$_POST['social']."');");
		$sqlUser->execute();
	}

	$checkIn = date("Y-m-d H:i:s");
	$sqlProblem = new query("INSERT INTO dhs16_problem (id, header, description, parts, name, social, check_in) VALUES (NULL,'".$_POST['problem']."','".$_POST['problemDesc']."','".$_POST['parts']."','".$_POST['name']."','".$_POST['social']."','".$checkIn."');");
	$sqlProblem->execute();

	header('Location: ../../receipt.php?social='.$_POST['social']);
	//var_dump($sqlProblem->get());
?>
