<?php
 session_start();
	if(!isset($_SESSION['loggedin']))
	{
    echo "oh";
    die;
	}
  else {
    unset($_SESSION["loggedin"]);
  }

?>

<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<!DOCTYPE html>
<html>
<head>
<style>
body {
	background: linear-gradient(35deg, #000000, #5E5E5E)
}
h1 {
	font-style: normal;
	font-size: 68px;
	font-family: Anton;
	}
</style>
<center>
<h1><font color = "white">Strike a Spark Conference Judging App</font></h1>
</head>
<body>


<p style="font-size:30px"><font color = "white">You have successfully logged out.</font>
<br></p>


</center>
</body>
</html>
