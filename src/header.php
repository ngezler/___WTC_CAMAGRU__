<?php
function getHead () {
echo
"<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>

<div class='header'>
  <a href='' class='logo'>
  <img></a>
  <div class='header-right'>
	  <a href='index.php'>Home</a>
    <a href='login.php'>Login</a>
    <a href='signup.php'>Signup</a>
  </div>
</div>
</body>
</html>";}

function getLoggedHead () {
echo
"<html>
<head>
<meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
<title> CAMAGRU </title> 
<div class='header'>
  <a class='logo'></a>"
  . "<center class='welcome' style='display: inline; font-size: 20px; color: gray;'>         " . htmlspecialchars($_SESSION['login']) . "! </center>" .
  "<div class='header-right'>
	<a class='#' href='index.php'>Home</a>
    <a href='upload.php'>Camera</a>
    <a href='account.php'>Update</a>
    <a href='logout.php'>Logout</a>
  </div>
</div>
</body>
</html>";}
