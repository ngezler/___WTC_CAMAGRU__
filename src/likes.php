<?php

session_start();
include ("../config/database.php");
include ("./header.php");

if (isset($_SESSION['login']))
	getLoggedHead();
$conn = getDB();
 $sql = "SELECT likes FROM images WHERE id = " . $_GET['id'];
 echo "<H1 style='color: white; margin: auto; width: 50%; text-align:center;'>Likes</H1>";
 foreach ($conn->query($sql) as $image)
 {
	 $likes = unserialize($image['likes']);
 }
echo "<table style='width:100%'>";
 	foreach ($likes as $like)
		 echo "<tr> <th>" . $like . "</th> </tr>";
echo "</table>";

?>

<body >
<?php include '../includes/footer.ph'; ?>
