<?php 

	include '../db.inc.php';
	
	$sql = "SELECT COUNT('id') FROM `dhs16_problem`";
	
	$sth = $db->prepare($sql);
	$sth->execute();
	
	while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
		echo "Problem lösta: ".$row["COUNT('id')"];
	}
	?>