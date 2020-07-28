<?php

session_start();
$counter = 0;
$counter++;
$_SESSION['counter'] += $counter;

?>

<!DOCTYPE html>
<html>

<head>
    <title>Clicker 🍪</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>

<form>
    <span>Click on cookie 🍪</span>
    <button></button>
    <span><?=$_SESSION['counter'];?></span>
</form>

</body>
</html>
