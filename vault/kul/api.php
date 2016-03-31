<?php
	include '../db.inc.php';
	
	
	
	function getProblem(arguments){/*arguments = [allt i tabellen]*/
		
		$sql = "SELECT * FROM `dhs16_problem`";
		
		$sth = $db->prepare($sql);
		$sth->execute();
		
		while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
			
		}
	}
	
	function getUser(arguments){
				
		$sql = "SELECT * FROM `dhs16_problem`";
		
		$sth = $db->prepare($sql);
		$sth->execute();
		
		while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
			
		}
	}

?>