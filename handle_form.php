<!doctype html>
<html lang="en">
<head>
      <meta charset="utf-8">
	  <title>Your Feedback</title>
</head>	  
<body>
<?php // Script 3.4 handle_form.php	#2 
	
	  ini_get('display_errors',1);
	  // Let melearn from my mistakes!
	  // This page receives the data from feedback.html.
      // It will receive: title, name, email, response, comments and submit in $_POST.

      // Create shorthand versions of the variables:	 
    $title = $_POST['title'];
	$firstname = $_POST['FirstName'];
	$lastname = $_POST['LastName'];
	$email = $_POST['email'];
	$response = $_POST['response'];
	$comments = $_POST['comments'];
	  
	 // Print the received data:
	 print "<p> Thank you, $title $firstname, $lastname, $email, for your comments.</p>
	 <p>You stated that you found your experience to be '$response' and added:<br>
	 $comments</p>";  	  
?>	  
</body>	  
</html>