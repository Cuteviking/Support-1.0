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
			<form action="#" method="POST" id="checkout">
				<label for="id">ID:</label><input type="text" id="id" />
				<input type="submit" />
			</form>
			<!-- hämta data -->
			<div id="checkout">
				<div>Name:</div>
				<div>Plats:</div>
				<span>ID</span>
				<div>Problem:</div>
				<div>Guess:</div>
				<div>Delar:</div>
			</div>
			
			<form action="#" method="POST" id="">
				<label for="fix">Lösning:</label><input type="text" id="fix" />
				<input type="submit" />
			</form>
		</div>
	</body>
</html>