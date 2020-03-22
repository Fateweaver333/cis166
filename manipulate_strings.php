<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Forum Posting</title>
</head>
<body>
<?php 
	// Script 5.6 - handle_post.php #5
	/* This script receives five values from posting.html:
	first_name, last_name, email, posting, submit */

	// Address error management, if you want.

	// Get the values from the $_POST array:
	// Trim to remove excess spaces in the name.
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$posting = nl2br($_POST['posting']);

	// Create a full name variable:
$name = $first_name . ' ' . $last_name;

	// Get a word count:
$words = str_word_count($posting);

	// Get a snippet of the posting:
$posting = substr($posting, 0, 50);

	// Take out the bad words:
$posting = str_ireplace('badword', 'XXXXX', $posting);

	// Print a message: With First name response enbedded.
print "<div>Thank you, $first_name = strtok($_POST['first_name'],''); for your posting:
<p>$posting...</p>
<p>($words words)</p></div>";

?>
</body>
</html>