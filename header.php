<?php

echo '
<header>
	<a href="home">Home</a>
	<a href="register">Register</a>
	<a href="login">Log In</a>';
if (!empty($_SESSION["username"]))
{
echo '<a href="animal-list">Animal List</a>
<a href="wanted-animals">Wanted Animals</a>
Logged in as <b>' . $_SESSION["username"] . '</b>
<a href="handle_logout.php">Log Out</a>
';
}
echo '
</header>';

?>