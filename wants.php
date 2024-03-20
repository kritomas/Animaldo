<?php

session_start();

if (empty($_SESSION["username"]))
{
	header("Location: index.php");
	exit();
}

require "./flexfunctions.php";

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
		<div class="flex-container">';
			echoAnimal("Animal a");
			echoAnimal("Animal b");
echo
		'</div>
	</div>
	';

include './footer.php';

echo '
	</body>
</html>
';

?>