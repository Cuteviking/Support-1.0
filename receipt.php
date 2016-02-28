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
				<nav class="mainNav no-print">
					<ul>
						<li><a href="index.php">Checkin</a></li>
						<li><a href="receipt.php">Checkout</a></li>
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
	
 	while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
 		while($rowProblem = $sthProblem->fetch(PDO::FETCH_ASSOC)) {
 		?>
    	
			<main>
				<section>
					<?php echo $rowProblem['header']." ID:".$rowProblem['id'];?>
				</section>
				<section>
					<?php echo $row['name']?>
				</section>
				<section class="no-print">
					<?php echo "SSN: ".$row['social']?>
				</section>
				<section>
					<?php echo "Seat: ".$row['seat']?>
				</section>
				<section class="no-print">
					<?php echo "Phonenumber: ".$row['phone']?>
				</section>
				<section>
					<?php echo $rowProblem['header']?>
				</section>
				<section>
					<?php echo $rowProblem['description']?>
				</section>
				<section>
					<?php echo "Parts: ".$rowProblem['parts']?>
				</section>
				<section>
					<?php echo "In check: ".$rowProblem['check_in']?>
				</section>
			</main>
	
	
	<?php 
		}
	} 
	?>
			<button id="print" class="no-print">Print</button>
			<button id="checkOut" class="no-print">checkOut</button>
		</div>
	</body>
</html>