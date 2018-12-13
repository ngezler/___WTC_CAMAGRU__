
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" type="text/css" media="screen" href="login.css" />
<script type="text/javascript" src="../js/login.js"></script>
</head>
<body >

<div class="center">
<center id="login">
<div class="container">
    <form class="form_holder" action="login.php" method="POST"><br>
        <span><h1 class="title">Login</h1></span>
        <input class="input" type="text" name="login" placeholder="Enter login" required><br>
        <input class="input" id="pw" class="input" type="password" name="password" placeholder="Enter password" required>
        <a href="reset.phtml"><font size="1" color="white">Forgot password?</font></a>
        <input  type="submit" value="Submit" style="margin-top: 10px;">
    </form>
</div>
</div>
</center>
</body>
<footer class="footer">Camagru 2018</footer>
</html>

<?php
session_start();

include ("../config/database.php");
include ("header.php");

if (isset($_SESSION['login']))
    exit ("Youre already logged in. <meta http-equiv='refresh' content='0;url=index.php' />");

getHead();
if (isset($_POST['login']) && isset($_POST['password'])) {
	$conn = getDB();
    $sql = "SELECT * FROM users";
	foreach ($conn->query($sql) as $user)
	{
		if ($user["login"] == $_POST['login'])
            if (password_verify($_POST['password'], $user['password'])) {
                if ($user['emailverify'] == 'Y') {
				    $_SESSION['login'] = $_POST['login'];
		    		$_SESSION['email'] = $user['email'];
			    	$_SESSION['passhash'] = $user['password'];
                    exit("Congratulations, you're now logged in. <meta http-equiv='refresh' content='3;url=index.php' />");
                }
                else
                    echo "Please verify your account. <a href='emailagain.php?user=" . $user['login'] . "'> Click here to send link again</a>";
			}
			else
				echo "Password Incorrect. <meta http-equiv='refresh' content='3;url=login.php' />";
	}
	exit();
}
?>