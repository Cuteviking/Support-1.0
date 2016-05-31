<?php include 'php/header.php'?>

		<div class="row">
			<div class="medium-12 columns">
            	<form action="" method="GET" id="check">
                	<label for="name">ID/SocialID/Nick:</label><input type="text" id="checkOut" name="checkOut" />
                </form>
                    
    
             
<?php if(isset($_GET['checkOut'])) { 
			$sql = "SELECT * FROM  `dhs16_problem` WHERE `name` = ?  ORDER BY `dhs16_problem`.`check_out` ASC";
			
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
                	<?php
                    	if($row['sign'] != "" && $row['collected'] == 0){?>
					<form action="php/check/collected.php" method="GET" id="check">
                    	<label for="sign">Sign:</label><input type="text" id="sign" name="sign" disabled value="<?php echo $row['sign'] ?>" />
                        <input type="submit" value="Hämtad">
                         <?php
                            }elseif($row['collected'] == 1){?>
                    <form action="" method="GET" id="check">
						<label for="sign">Sign:</label><input type="text" id="sign" name="sign" disabled value="<?php echo $row['sign'] ?>" />
                        <?php
                            }else{?>
                    <form action="php/check/out.php" method="GET" id="check">
						<label for="sign">Sign:</label><input type="text" id="sign" name="sign" />
                        <input type="submit" value="Klar">
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
<?php include 'php/footer.php'?>