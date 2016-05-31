<?php 
	include "db.inc.php";
	
	$sql = "SELECT * FROM `dhs16_problem`";
	
	$sth = $db->prepare($sql);
	$sth->execute();
	
	$queue = 0;
	$rep = array();
	$fix = 0;
	
	while($row = $sth->fetch(PDO::FETCH_ASSOC)) {

		//queue
		if($row["check_out"] == "0000-00-00 00:00:00"){
			$queue++;
		}

		//rep
		if($row["check_out"] != "0000-00-00 00:00:00" && $row["collected"] == 0){
			array_push($rep, $row["id"]);
		}
		
		//fix
		$fix++;
		
		//problem
	}
	echo json_encode(array("queue" => $queue, "problem" => array("type" => $type, "row" => $row)));
	
?>