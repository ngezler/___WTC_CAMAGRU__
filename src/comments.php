 <?php
 
 session_start();
 include ("../config/database.php");
 include ("header.php");
 
 if (isset($_SESSION['login']))
	 getLoggedHead();
 else
	 exit ("Please login <meta http-equiv='refresh' content='3;url=login.php' />");
 if (!isset($_GET['id']))
        exit ("Bad link <meta http-equiv='refresh' content='3;url=index.php' />");
// establish a db conn and select comments in accordance with the image id
 $conn = getDB();
  $sql = "SELECT comments FROM images WHERE id = " . $_GET['id'];
  echo "<H1 style='color: white; margin: auto; width: 50%; text-align:center;'> Comments</H1>";
  //create a loop that will extract comments from an array using serilz
  foreach ($conn->query($sql) as $image)
  {
          $comments = unserialize($image['comments']);
  }
 echo "<table style='width:100%'>";
         foreach ($comments as $comment)
                  echo "<tr> <th>" . $comment['login'] . "</th> <th> " . htmlspecialchars($comment['comment']) . " </tr>";
 echo "</table>";
 
 ?>
 
 <html>
         <head>
                 <link l="stylesheet" type="text/css" media="screen" href="login.css" />
         </head>
         <body>
         </body>
         <footer class="footer">Camagru 2018</footer>
</html>
