<?php
session_start();

include ("header.php");
if (!isset($_SESSION['login']))
	exit ("<meta http-equiv='refresh' content='0;url=signup.php' />");
getLoggedHead();

?>
<html>
<head>
    <link rel="stylesheet" type="text/css" media="screen" href="Login.css" />

    <script type="text/javascript" src="../js/account.js"></script>
</head>
<body >
<div class="update_holder">
        <font color="white" style="text-align: center;">
        <center>
        
        Updading </h4> "<?php echo htmlspecialchars($_SESSION['login']); ?>" user details <br><br>
        To change email address, login or password, enter your current password<br>followed by your new detail, and the appropriate box ticked. <br>
        If you want to change email notification, only Y or N is accepted<br><br>
        <form class="" id="form" action="change.php" method="POST" onsubmit="return checkForm(this, '<?php echo htmlspecialchars($_SESSION['login']); ?>');">
            Enter your password:<br>
            <input class="upd" type="password" name="password" id="password" required><br>
            Insert an an update then tick a field to be updated:<br>
            <input class="upd" type="password" name="detail" id="password2" required><br>
            <input type="radio" name="type" value="password" required onclick="passvis('1')"> Password<br>
            <input type="radio" name="type" value="email" required onclick="passvis('0')"> Email
            <input type="radio" name="type" value="login" required onclick="passvis('0')"> Username
            <input type="radio" name="type" value="notify" required onclick="passvis('0')"> Email Notifications<br>
            <input class="#" type="submit" value="Submit">
        </center>
        </form>
        </font>
</div>
</body>
<footer class="footer">Camagru 2018</footer>
</html>
