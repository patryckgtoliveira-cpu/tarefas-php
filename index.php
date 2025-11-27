<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
    <title>login</title>
</head>
<body>

    <?php

        if(!isset($_SESSION['LOGIN'])){
            include('login.php');
        }else{
            include('home.php');
        }
    
    ?>

</body>
</html>