<?php include 'header.php'?>


			<form action="#" method="GET" id="check">
				<label for="name">ID/SocialID/Nick:</label><input type="text" id="checkOut" name="checkOut" />
			</form>
			
<?php 	if(isset($_GET['checkOut'])) {
			include 'php/db.inc.php'; 
			$sql = "SELECT * FROM  `dhs16_problem` WHERE 'social' OR 'id' OR `name` = ? ";
			
			$sth = $db->prepare($sql);
			$sth->bindParam( 1, $_GET['checkOut']);
			$sth->execute();
			
			while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
				?>
			
			<main id="check">
				<section>
					<?php echo $row['id']?>
				</section>
				<section>
					<?php echo $row['name']?>
					<?php echo $row['header']?>
				</section>
				<section>
					<form action="check/out.php" method="GET" id="check">
						<?php
                            if($row['sign'] != ""){?>
                                <label for="sign">Sign:</label><input type="text" id="sign" name="sign" disabled value="<?php echo $row['sign'] ?>" />
                        <?php
                            }else{?>
								<label for="sign">Sign:</label><input type="text" id="sign" name="sign" />
						<?php
                            }
                  		?>
						
						<input type="hidden" value="<?php echo $row['id']?>" name="id" />
						<input type="hidden" value="<?php echo $_GET['checkOut']?>" name="checkOut" />
					</form>
				</section>
			</main>
			
<?php
	 		}
		} 
	?>
		<main>
	</body>
</html>