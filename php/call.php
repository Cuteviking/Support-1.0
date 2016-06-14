<?php 
	require_once('../../resources/php/sql.php');
	$sql = new query("SELECT * FROM dhs16_problem;");
	
	$queue = 0;

	//queue
	foreach ($sql->get() as $row) {
		
		if($row["check_out"] == "0000-00-00 00:00:00"){
			$queue++;
		}
	}
	
	//problem
	$sql = new query("SELECT * FROM dhs16_issue ORDER BY id ASC;");
	
	
	foreach ($sql->get() as $row) {
		$type = $row["type"];
		$dhrow = $row["row"];
	}
	
	echo json_encode(array("queue" => $queue, "problem" => array("type" => $type, "row" => $dhrow)));
	
?>