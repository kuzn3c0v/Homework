<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homework</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */

    </style>
</head>
<body>

<nav class="navbar-inverse" id="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php if (isset($page) && ($page == 'index.php')){echo "class=\"active\"";}?>><a href="index.php">Home</a></li>
                <li <?php if (isset($page) && ($page == 'about.php')){echo "class=\"active\"";}?>><a href="about.php">About</a></li>
                <li <?php if (isset($page) && ($page == 'images.php')){echo "class=\"active\"";}?>><a href="images.php">Изображения</a></li>
                <li <?php if (isset($page) && ($page == 'history.php')){echo "class=\"active\"";}?>><a href="history.php">История посещений</a></li>
            </ul>
            <?php if (isset($_SESSION['username'])): ?>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="applications/logOut.php"><?=$_SESSION['username'] . '  '?><span class="glyphicon glyphicon-log-out"></span>  Выйти</a></li>
            </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">

        </div>
        <div class="col-sm-8 text-left">