<?php
session_start();

include ("header.php");
include ("merge.php");

if (!isset($_SESSION['login'])){
    echo "<meta http-equiv='refresh' content='0;url=login.php' />";
}
else
    getLoggedHead();
?>

<html lang="PR-BR">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" media="screen" href="Login.css" />
</head>
<body>
    <center>
                <div style="position: relative; text-align: center; color: white;">
                        <video poster="../mg/logo.png" autoplay="true" style="width:70%;" id="video">Failure</video>
                </div>
                <ceter>
                        <button id="capture"> capture </button>
                        <form action="photo.php" method="POST">
                        <input type="hidden" name="photo" id="upload" value=""required>
                        <input type="hidden" name="filter" id="overlaysend" value=""required>
                        <input type="submit">
                        </form>

                        <div id="buttonsDiv" >
                        <input type="file" multiple="false" accept="image/png"  id="files"/>
                        </div>
                    <div>
                        <select id="filter">
                            <option value="../img/none.png">Filters</option>
                            <option value="../img/frame.png">Frame 1</option>
                            <option value="../img/frame2.png">Frame 2</option>
                            <option value="../img/frame3.png">Frame 3</option>
                            <option value="../img/smiley.png">Smiley</option>
                            <option value="../img/harryPotter.png">Harry Potter</option>
                        </select>
                    </div>
                </center>
                
                <div>
                    <canvas id="canvas"></canvas>
                    <img id="overlay" src = "../img/none.png" onerror="this.style.display='none'">
                <div>
                    <center>
                        <div id="photos"> </div>
                    </center>
                </div>
    </center>
             
<script type="text/javascript" src="../js/snap.js"></script>
</body>
<footer class="footer">Camagru 2018</footer>
</html>
