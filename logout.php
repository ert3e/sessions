<?php
session_start();
    unset($_SESSION["valid"]);

    echo 'You have cleaned session';
header("Location: login.php");
?>