<?php
	require_once('../resources/php/sql.php');
	if(isset($_POST['problem'])){
		$sql = new query("INSERT INTO dhs16_issue (id, type, row) VALUES (NULL, '".$_POST['problem']."', '".ucfirst($_POST['row'])."');");
		$sql->execute();
	}
?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta charset="utf-8">
<title>Namnlöst dokument</title>
</head>

<body>
	<form action="#" method="post">
        El:<input type="radio" name="problem" value="Power">
        Nätverk:<input type="radio" name="problem" value="Network">
        Löst:<input type="radio" name="problem" value="none">
		<input type="text" name="row">
        <input value="Skicka" type="submit">        
	</form>
</body>
</html>
