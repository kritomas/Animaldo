<?php

require './DBC.php';

session_start();

echo '
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="./style.css">
		<title>Animaldo</title>
	</head>
	<body>
		<header>
			<a href="register.php">Register</a>
			<a href="login.php">Log In</a>';
if (!empty($_SESSION["username"]))
{
	echo '<a href="data.php">Data</a>
	Logged in as <b>' . $_SESSION["username"] . '</b>
	<a href="handle_logout.php">Log Out</a>
	';
}
echo '
		</header>
		<p>
			WELKAM to Animaldo. Here we make animals and keep track of animals and account and all those weird animaly things.
		</p>
		<footer>
			Animaldo 2024
		</footer>
	</body>
</html>
';

?>