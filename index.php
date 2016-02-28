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
						<li><a href="checkout.php">Checkout</a></li>
					</ul>
				</nav>
			</header>
			<form action="check/in.php" method="POST" id="checkin">
				<div class="user">
					<section>
						<label for="name">Nick:</label><input type="text" id="name" />
					</section>
					<section>
						<label for="social">Social security number:</label><input type="text" id="social" placeholder="YYYY-MM-DD-XXXX"/>
					</section>
					<section>
						<label for="plats">Seat:</label><input type="text" id="plats" />
					</section>
					<section>
                    	<label for="tele">Phone nr:</label><input type="text" id="tele" />
                    </section>
				</div>
				<div class="problem">
					<section>
						<label for="problem">Problem:</label><input id="problem" type="text" />
					</section>
					<section>
						<label for="problemDesc">Problem Description:</label><textarea id="problemDesc" ></textarea>
					</section>
					<section>
						<label for="parts">Parts:</label><textarea id="parts" ></textarea>
					</section>
				</div>
				<footer>
					 <input type="submit" />	
				</footer>
			</form>
		</div>
	</body>
</html>