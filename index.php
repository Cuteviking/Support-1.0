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
			<form action="#" method="POST" id="checkin">
				<header>
					<label for="name">Name:</label><input type="text" id="name" />
					<label for="plats">Plats:</label><input type="text" id="plats" />
					<span>ID</span>	
				</header>
				<label for="problem"></label><textarea id="problem" placeholder="Problem"></textarea>
				<label for="guess">Guess:</label><textarea id="guess"></textarea>
				<label for="parts">Eve. delar:</label><textarea id="parts" placeholder="Eventuella delar"></textarea>
				<footer>
					 <input type="submit" />	
				</footer>
			</form>
		</div>
	</body>
</html>