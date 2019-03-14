<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<!DOCTYPE html>
<html>
<head></head>
<body>
<style>
body {
	background: linear-gradient(180deg, #5E5E5E, #000000)
}
h1 {
	font-style: normal;
	font-size: 68px;
	font-family: Anton;
	}
p {
	font-size:30px;
	text-align: center;
}
.thinredborder {
	border-color: #C10020;
	border-width: 8px;
	border-style: solid;
	border-radius: 10%;
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
<h1 class="thinredborder"><font color = "white">Strike a Spark Conference Judging App</h1>
<img class="logo" src="https://pbs.twimg.com/profile_images/979358006663139328/0ShklWot_400x400.jpg" alt="Strike a spark">
<br>

<p>Please enter the Judge ID provided to you:
<form action ="includes\index_security.php" method="POST" onsubmit="return CheckLogin();">
<input id="JID" placeholder="Judge ID" type="text" size="30" name="JID"><br>

<p>Please enter the username that has been provided to you:</p>
<input id="user" placeholder="Username" type="text" size="30" name="username"><br>


<p>Please enter the password that has been provided to you:</p>
<input id="pass" placeholder="Password" type="text" size="30" name="password"><br>

<br>
<button type = "submit" name = "submit">Login</button>
</form>

</center>

</body>

<script>
function CheckLogin()
{
	var check = false;
  var id=document.getElementById("JID").value;
  var username=document.getElementById("user").value;
  var password =document.getElementById("pass").value;
	if(id == "" && username == "" && password == "")
	{
		alert("Please enter your judge ID. You must also enter the username and password that you were provided");
	}
	else if(id== "" && username == "")
	{
		alert("Please enter your judge ID. You must also enter the username you were provided");
	}
	else if(id== "" && password == "")
	{
		alert("Please enter your judge ID. You must also enter the password you were provided");
	}
	else if(username == "" && password == "")
	{
		alert("You must enter the username and password you were provided");
	}
	else if(password == "")
	{
		alert("You must enter the password you were provided");
	}
	else if(username == "")
	{
		alert("You must enter the username you were provided");
	}
	else if(id == "")
	{
		alert("You must enter your judge id.");
	}
	else
	{
			check = true;
	}
	return check;
}
</script>

</html>
