<?php include 'header.php'?>
    		
    			<div class="row">
    				<div class="medium-12 columns">
                        <form action="check/in.php" method="POST" id="check">
                        	<label for="name">Nick:</label>
                            <input type="text" id="name" name="name" required/>                                
                            <label for="social">Social security number:</label>
                            <input name="social" type="text" id="social" placeholder="YYYYMMDDXXXX (möst be 12 digits)" required pattern="[0-9]{12}" />
                            <label for="seat">Seat:</label>
                            <input name="seat" type="text" placeholder="e.g. D24:05" id="seat" required/>
                            <label for="phone">Phone nr:</label>
                            <input name="phone" type="text" id="phone" />     
                            <label for="problem">Problem title:</label>
                            <input name="problem" id="problem" placeholder="e.g. no picture on the screen" type="text" required/>
                          	<label for="problemDesc">Problem Description:</label>
                            <textarea name="problemDesc" id="problemDesc" required></textarea>
                            <label for="parts">Associated parts:</label>
                            <textarea id="parts" name="parts" placeholder="e.g. MSI GeForce GTX 980 Ti Gaming 6GB"></textarea>    
                            <input type="submit" />	
                        </form>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>
