<?php include 'header.php'?>
<?php 

	include 'php/db.inc.php';
	
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
    	
			<main id="check">
				<header>
					<?php echo $rowProblem['header']." ID:".$rowProblem['id'];?>
				</header>
				<div class="user">
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
				</div>
				<div class="problem">
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
				</div>
			</main>
	
	
	<?php 
		}
	} 
	?>
			<button id="print" class="no-print">Print</button>
		</main>
	</body>
</html>