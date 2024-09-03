<?php
    require 'functions/auth.php';
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<ul class="navbar-bar">
    <?php if(is_connected()): ?>
        <li class="nav-item"><a class="nav-link" href="logout.php">Log out</a></li>
    <?php endif ?>
</ul> 