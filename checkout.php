<!DOCTYPE >
<html>
	<head>
		<meta http-equiv="Content-Type"	content="text/html" charset="UTF-8">
		<link href="css/css.css" rel="stylesheet" type="text/css">
		<script src="js/js.js"></script>
	</head>
	<body>
		<div class="pageContainer">
			<header>
				<h1>DHS16</h1>
				<nav class="mainNav">
					<ul>
						<li><a href="index.php">Checkin</a></li>
						<li><a href="receipt.php">Checkout</a></li>
					</ul>
				</nav>
			</header>
			<form action="#" method="GET" id="check">
				<label for="name">ID/SocialID:</label><input type="text" id="checkOut" name="checkOut" />
			</form>
			
<?php 	if(isset($_GET['checkOut'])) { 
			$sql = "SELECT * FROM `dhs16_problem` WHERE `social` OR 'id' = ?";
			
			$sth = $db->prepare($sql);
			$sth->bindParam( 1, $_GET['checkOut']);
			$sth->execute();
			
			while($row = $sth->fetch(PDO::FETCH_ASSOC)) {?>
			
			<main id="check">
				<section>
					<?php echo $row['id']?>
				</section>
				<section>
					<?php echo $row['header']?>
				</section>
				<section>
					<form action="#" method="POST" id="check">
						<label for="sign">Sign:</label><input type="text" id="sign" name="sign" />
						<input type="hidden" value="<?php echo $row['id']?>" name="checkOut" />
					</form>
				</section>
			</main>
			
<?php
	 		}
		} 
	?>
		</div>
	</body>
</html>