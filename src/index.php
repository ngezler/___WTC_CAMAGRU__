

<html>
<head>
<link rel="stylesheet" type="text/css" media="screen" href="login.css" />
</head>
<body>
<?php

include ("header.php");
include ("../config/database.php");
session_start();

if (!isset($_GET['page']) || $_GET['page'] <= 0)
    exit ("<meta http-equiv='refresh' content='0;url=index.php?page=1' />");
if ($_SESSION['login'])
 getLoggedHead();
else
 getHead();



$conn = getDB();
$sql = "SELECT * FROM images";
echo "<H1 style='color: white; margin: auto; width: 50%; text-align:center;'> Gallery</H1>";
echo "<div class='grid-container'>";
foreach ($conn->query($sql) as $key=>$image)
{
    if ($key < $_GET['page'] * 5 && $key >= $_GET['page'] * 5 - 5)
    {
        echo "<div class='grid-item'> <a href='action.php?id=" . $image['id'] . "'><img class='photo' id='base64image'
          src='" .  $image['image'] . "' /></a></div>";
    }
}
echo "</div><br><br>";
echo "<center style='color: white;'> page <a href='index.php?page=1'> 1 </a>";
if ($_GET['page'] != 1)
    echo "<a href='index.php?page=" . ($_GET['page'] - 1) . "'> prev </a>";
if (($_GET['page'] + 1) <= (int)($key / 5 + 1))
    echo "<a href='index.php?page=" . ($_GET['page'] + 1) . "'> next </a>";
if ($_GET['page'] != (int)($key / 5 + 1))
    echo "<a href='index.php?page=" . (int)($key / 5 + 1) ."'> last </a></center>";
if ($_GET['page'] > (int)($key / 5 + 1))
    exit ("<meta http-equiv='refresh' content='0;url=index.php?page=" . (int)($key / 5 + 1) ."' />");


?>
</body>
<footer class="footer">Camagru 2018</footer>
</html>
