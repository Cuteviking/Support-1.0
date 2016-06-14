<?php include 'php/header.php';

	$sql = new query("SELECT * FROM dhs16_user WHERE social = '".$_GET['social']."';");
	$sqlProblem = new query("SELECT * FROM dhs16_problem WHERE social = '".$_GET['social']."';");

	/*$sql = "SELECT * FROM `dhs16_user` WHERE `social` = ?";


	$sqlProblem = "SELECT * FROM `dhs16_problem` WHERE `social` = ?";
	*/

	//echo "SELECT * FROM dhs16_user WHERE social = '".$_GET['social']."';";
	?>
    	<main id="check">
    <?php
 	foreach ($sql->get() as $row) {
	?>
    
        	<div class="row">
                <div class="column medium-12"> 
                    <ul class="pricing-table no-bullet text-left">
                        <li class="title"><?php echo "Name: ". $row['name']?></li>
                        <li class="no-print"><?php echo "SSN: ".$row['social']?></li>
                        <li class="only-print"><?php echo "SSN: ".substr($row['social'], 0, 8)."-XXXX"?></li>
                        <li><?php echo "Seat: ".$row['seat']?></li>
                        <li class=""><?php echo "Phonenumber: ".$row['phone']?></li>
                        <li class="no-print"><button id="print" class="button">Print</button></li>
                    </ul>
              	</div>
        <?php
 		foreach ($sqlProblem->get() as $rowProblem) {
 		?>
				<?php 
					if ($rowProblem['check_out'] == "0000-00-00 00:00:00"){
				 		echo '<div class="column medium-6">';	
					}else{
						echo '<div class="column medium-6 no-print">';	
					}?>
            	 
                    <ul class="pricing-table no-bullet text-left">
                    	<li class="title"><?php echo $rowProblem['header'];?></li>
                        <li><?php echo "ID: ".$rowProblem['id'];?></li>

                        <li><?php echo $rowProblem['description']?></li>
                        <li><?php echo "Parts: ".$rowProblem['parts']?></li>
                        <li><?php echo "In check: ".$rowProblem['check_in']?></li>
                        <li class="no-print"><?php echo "Done: ".$rowProblem['check_out']?></li>
                        <li><?php echo "Collected: ".$rowProblem['collected']?></li>
						<li class="no-print">
							<?php
                            	if($rowProblem['sign'] != "" && $rowProblem['collected'] == 0){
							?>
                            <form action="php/check/collected.php" method="GET" id="check">
                                <label for="sign">Is the item collected? Sign:</label><input type="text" id="sign" name="sign" disabled value="<?php echo $rowProblem['sign'] ?>" />
                                <input type="submit" value="Hämtad">
                                 <?php
                                    }elseif($rowProblem['collected'] == 1){?>
                            <form action="" method="GET" id="check">
                                <label for="sign">Sign:</label><input type="text" id="sign" name="sign" disabled value="<?php echo $rowProblem['sign'] ?>" />
                                <?php
                                    }else{?>
                            <form action="php/check/out.php" method="GET" id="check">
                                <label for="sign">Is the item done? Sign:</label><input type="text" id="sign" name="sign" />
                                <input type="submit" value="Klar">
                                <?php
                                    }
                                ?>
                                
                                <input type="hidden" value="<?php echo $rowProblem['id']?>" name="id" />
                                <input type="hidden" value="<?php echo $row['social']?>" name="checkOut" />
                            </form>
                        </li>
                    </ul>
              	</div>
                
        
	<?php 
		}
	?>
    		
       		</div>
            <div class="row only-print">
                <div class="column medium-6 sign">
                	<p>Owner's Sign:</p>
                </div>
                <div class="column medium-6 sign">
                	<p>Dreamhack Support's Sign:</p>
                </div>
            </div>
         </main>
    <?php
	} 
	?>
<?php include'php/footer.php';?>
