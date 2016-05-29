<?php include 'php/header.php'?>

		<div class="row">
			<div class="medium-12 columns">
            	<form action="" method="GET" id="check">
                	<label for="name">ID/SocialID/Nick:</label><input type="text" id="checkOut" name="checkOut" />
                </form>
                    
    
             
<?php if(isset($_GET['checkOut'])) { 
			$sql = "SELECT * FROM  `dhs16_problem` WHERE `name` = ? ";
			
			$sth = $db->prepare($sql);
			$sth->bindParam( 1, $_GET['checkOut']);
			$sth->execute();
			
			while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
				?>
			
			<main id="check">
				<p>
					<?php echo $row['id']?>
				</p>
				<h3>
					<?php echo $row['name']?>
					<?php echo $row['header']?>
				</h3>
				<section>
					<form action="vault/check/out.php" method="GET" id="check">
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
    	   </div>
		</div>
	</body>
</html>