<?php

session_start();

if (empty($_SESSION["username"]))
{
	header("Location: index.php");
	exit();
}

echo '
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="./style.css">
		<title>Animaldo</title>
	</head>
	<body>';

	include './header.php';

	echo'
	<div class="container">
		<div class="flex-container">
			<div class = "flex-item">
				Animal 1
			</div>
			<div class = "flex-item">
				Animal 2
			</div>
		</div>
	</div>
	';

include './footer.php';

echo '
	</body>
</html>
';

?>