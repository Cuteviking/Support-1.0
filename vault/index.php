<?php include '../header.php'?>


			<form action="check/in.php" method="POST" id="check">
				<div class="user">
					<section>
						<label for="name">Nick:</label><input type="text" id="name" name="name" required/>
					</section>
					<section>
						<label for="social">Social security number:</label><input name="social" type="text" id="social" placeholder="YYYYMMDDXXXX (möst be 12 digits)" required pattern="[0-9]{12}" />
					</section>
					<section>
						<label for="seat">Seat:</label><input name="seat" type="text" placeholder="e.g. D24:05" id="seat" required/>
					</section>
					<section>
                    	<label for="phone">Phone nr:</label><input name="phone" type="text" id="phone" />
                    </section>
				</div>
				<div class="problem">
					<section>
						<label for="problem">Problem title:</label><input name="problem" id="problem" placeholder="e.g. no picture on the screen" type="text" required/>
					</section>
					<section>
						<label for="problemDesc">Problem Description:</label><textarea name="problemDesc" id="problemDesc" required></textarea>
					</section>
					<section>
						<label for="parts">Associated parts:</label><textarea id="parts" name="parts" required placeholder="e.g. MSI GeForce GTX 980 Ti Gaming 6GB"></textarea>
					</section>
				</div>
				<footer>
					 <input type="submit" />	
				</footer>
			</form>
		<main>
	</body>
</html>