
<html>
<?php
    include_once 'config/config.php';
    include "./includes/header.php";
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>camagru</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./main.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body class="body">
<body>
    <div id='transparant' onClick='hide_div()'></div>
    <div class="topbar">
            <div class="container">
                <?php if (isset($_SESSION['id'])) {?>
                <?php }
                else { ?>
                    <button class="button_top">Camagru</button>
                    <div class="container-child">
                        <a class="text" href="./config/setup.phtml">Setup Project!</a>

                    </div>
                <?php } ?>
            </div>
    </div>
</body>
<?php

include "includes/footer.php";
?>
