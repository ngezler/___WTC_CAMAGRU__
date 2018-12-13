<html>
<head>
<link rel="stylesheet" type="text/css" media="screen" href="login.css" />
</head>
<body>
<font class="text">Logging you out!!</font>
</body>
<footer class="footer">Camagru 2018</footer>
</html>
<?php

session_start();
session_destroy();
echo "<meta http-equiv='refresh' content='1;url=index.php' />";
?>
<head>
    
</head>
<body style="background-size: cover;">


