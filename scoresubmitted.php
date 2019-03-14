<?php
 session_start();
	if(!isset($_SESSION['loggedin']))
	{
		echo "oh";
		die;
	}

?>

<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<!DOCTYPE html>
<html>
<head>

<style>
body {
	background-color: #5E5E5E;
}
h1 {
	font-style: normal;
	font-size: 68px;
	font-family: Anton;
	}
</style>

<center>

<h1><font color = "white">Strike a Spark Conference Judging App</h1></head>

<h2>You have successfully submitted your scores.</h2></font>


<button onclick="location.href='idprompt.php'" type="button">
Score Anohter Poster</button>

<button onclick="location.href='loggedout.php'" type="button">
Logout</button>

</head>
</center>
</html>
