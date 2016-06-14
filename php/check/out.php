<?php
	require_once('../../../resources/php/sql.php');
	
	$sql = new query("UPDATE dhs16_problem SET check_out ='".date("Y-m-d H:i:s")."', sign =  '".$_GET['sign']."' WHERE id = '".$_GET['id']."';");	
	$sql->execute();
	header('Location: ../../receipt.php?social='.$_GET['checkOut']);
?>