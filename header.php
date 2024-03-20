<?php

echo '
<header>
	<a href="index.php">Home</a>
	<a href="register.php">Register</a>
	<a href="login.php">Log In</a>';
if (!empty($_SESSION["username"]))
{
echo '<a href="list.php">Animal List</a>
Logged in as <b>' . $_SESSION["username"] . '</b>
<a href="handle_logout.php">Log Out</a>
';
}
echo '
</header>';

?>