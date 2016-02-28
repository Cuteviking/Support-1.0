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
				<hProblem>DHSProblem6</hProblem>
				<nav class="mainNav">
					<ul>
						<li><a href="index.php">Checkin</a></li>
						<li><a href="checkout.php">Checkout</a></li>
					</ul>
				</nav>
			</header>

<?php 

	include 'check/db.inc.php';
	
	$sql = "SELECT * FROM `dhs16_user` WHERE `social` = ?";
	
	$sth = $db->prepare($sql);
	$sth->bindParam( 1, $_GET['social']);
	$sth->execute();
	
	$sqlProblem = "SELECT * FROM `dhs16_problem` WHERE `social` = ?";
	
	$sthProblem = $db->prepare($sqlProblem);
	$sthProblem->bindParam( 1, $_GET['social']);
	$sthProblem->execute();
	
 	while($row = $sth->fetch(PDO::FETCH_ASSOC) && $rowProblem = $sthProblem->fetch(PDO::FETCH_ASSOC)) {?>
   
    	
			<main>
				<header>
					<?php echo $rowProblem['header']." ID:".$rowProblem['id'];?>
				</header>
				<section>
					<?php echo $row['name']?>
				</section>
				<section>
					<?php echo $row['social']?>
				</section>
				<section>
					<?php echo $row['seat']?>
				</section>
				<section>
					<?php echo $row['phone']?>
				</section>
				<section>
					<?php echo $rowProblem['header']?>
				</section>
				<section>
					<?php echo $rowProblem['description']?>
				</section>
				<section>
					<?php echo $rowProblem['parts']?>
				</section>
				<section>
					<?php echo $rowProblem['check_in']?>
				</section>
			</main>
	
	
	<?php } ?>
			<button>Print</button>
		</div>
	</body>
</html>