<?php

require './DBC.php';
error_reporting(E_ALL);
ini_set('display_errors', 'on');

session_start();

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
		<p>
			WELKAM to Animaldo. Here we make animals and keep track of animals and account and all those weird animaly things.
		</p>';

include './footer.php';

echo '
	</body>
</html>
';

?>