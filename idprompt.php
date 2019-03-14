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
	color: white;
	}
	.logo {
		width: 120px;
		border-width: 10px;
		border-color: #000000;
		border-style: solid;
		border-radius: 50%;
	}
</style>
<center>
<h1>Strike a Spark Conference Judging App</h1>
<img class="logo" src="https://pbs.twimg.com/profile_images/979358006663139328/0ShklWot_400x400.jpg" alt="Strike a spark">
</head>
<body>

<p style="font-size:30px"><font color = "white">Enter the poster ID number for the poster you will score:</font>
<br></p>
<form action ="includes\idprompt_security.php" method="POST" onsubmit="return CheckID();">

<input id="IDNum" size="30" placeholder="Poster ID" type="text" name="IDNumber">

<br><br>

<button type = "submit" name = "score">Score Poster</button>


<button type = "submit" name = "review">Review Poster</button>

</form>

</center>
</body>
<script>
function CheckID()
{
	var check = false;
  var poster = document.getElementById("IDNum").value;
	if(poster == "")
	{
		alert("You must enter the poster ID you would like to score/review");
	}
	else
	{
		check = true;
		//send posterid to php
	}
	return check;
}
</script>

</html>
