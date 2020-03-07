<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Lucky Numbers</title>
</head>
<body>
<?php 
	// Script 4.6 - random.php
	/* This script generates 3 random numbers. */

	// Address error handling, if you want.

	// Create a random number:
$number = mt_rand(10, 100);


// Print out the numbers:
print "<p>Your lucky number is:<br>
$number<br>
</p>";

?>
</body>
</html>