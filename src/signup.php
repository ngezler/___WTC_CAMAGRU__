<?php
session_start();

if (isset($_SESSION['login']))
    exit ("Youre already logged in. <meta http-equiv='refresh' content='0;url=index.php' />");

include ("../config/database.php");
include ("header.php");

getHead();
?>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" media="screen" href="login.css" />
<script type="text/javascript" src="../js/signup.js"></script>
</head>
<body>
<div class="center">
<center id="login">
<div class="container">
<form action="verify.php" id="form" method="POST" onsubmit="return checkForm(this);" ><br>

<div class="center">
<span><h1 class="title">Sign up!</h1></span><br>
<input class="input" id="login" type="text" name="login" placeholder="Username" required>
<input class="input" id="pw"  type="password" name="password" placeholder="Password" required><font color="white" face="verdana" size="1">
Show password</font><input style="color: white" type="checkbox" onclick="passvis()">
<input class="input" id="email" type="text" name="email" placeholder="Email" required>
<input class="input" id="notify" value="Y" type="checkbox" name="notify" checked><font size=1 style="color: white;">Tick for email notifications.</font><br><br>
<input  type="submit" value="Submit">
</div>
</form>
</div>
</center>
<div>
</body>
<footer class="footer">Camagru 2018</footer>
</html>