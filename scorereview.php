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


</style>


<center>
<h1><font color = "white">Strike a Spark Conference Judging App</h1></head>
<body>


<br><br>
<h2>Please enter a grade for each category. You may save this form and return to it later.</h2>

<br><br><br>

<p style="font-size:30px">Poster Design:</p>

<label>Visual Quality</label>
             <select id = "listy">
               <option value = ""></option>
	       			 <option value = "0">0</option>
               <option value = "1">1</option>
               <option value = "2">2</option>
               <option value = "3">3</option>
	       			 <option value = "4">4</option>
             </select>

<label>Clarity</label>
             <select id = "listy">
               <option value = ""></option>
	       			 <option value = "0">0</option>
               <option value = "1">1</option>
               <option value = "2">2</option>
               <option value = "3">3</option>
             </select>

<label>Thoroughness</label>
             <select id = "listy">
               <option value = ""></option>
	       			 <option value = "0">0</option>
               <option value = "1">1</option>
               <option value = "2">2</option>
               <option value = "3">3</option>
	       <option value = "4">4</option>
             </select>

<p style="font-size:30px">Research:</p>

<label>Breadth of Research</label>
             <select id = "listy">
               <option value = ""></option>
	       			 <option value = "0">0</option>
               <option value = "1">1</option>
               <option value = "2">2</option>
               <option value = "3">3</option>
             </select>

<label>Depth of Research</label>
             <select id = "listy">
               <option value = ""></option>
	       			 <option value = "0">0</option>
               <option value = "1">1</option>
               <option value = "2">2</option>
               <option value = "3">3</option>
             </select>

<label>Quality of Analysis</label>
             <select id = "listy">
               <option value = ""></option>
	       			 <option value = "0">0</option>
               <option value = "1">1</option>
               <option value = "2">2</option>
               <option value = "3">3</option>
             </select>


<label>Discussion Quality</label>
             <select id = "listy">
               <option value = ""></option>
	       			 <option value = "0">0</option>
               <option value = "1">1</option>
               <option value = "2">2</option>
               <option value = "3">3</option>
	       			 <option value = "4">4</option>
               <option value = "5">5</option>
             </select>

<p style="font-size:30px">Researcher:</p>


<label>Understanding of Research</label>
             <select id = "listy">
               <option value = ""></option>
	       			 <option value = "0">0</option>
               <option value = "1">1</option>
               <option value = "2">2</option>
               <option value = "3">3</option>
	       			 <option value = "4">4</option>
               <option value = "5">5</option>
             </select>

<p style="font-size:30px">Overall Quality:</p>


<label>Overall Quality</label>
             <select id = "listy">
               <option value = ""></option>
	       			 <option value = "0">0</option>
               <option value = "1">1</option>
               <option value = "2">2</option>
               <option value = "3">3</option>
	       			 <option value = "4">4</option>
               <option value = "5">5</option>
	       			 <option value = "6">6</option>
               <option value = "7">7</option>
               <option value = "8">8</option>
	       			 <option value = "9">9</option>
               <option value = "10">10</option>

             </select></font>


<br><br><br><br>

<button onclick="location.href='idprompt.php'" type="button">
         Cancel</button>

<button onclick="location.href='scoresubmitted.php'" type="button">
         Update and Submit</button>

</center>
</body>
</html>
