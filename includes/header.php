<?php
include 'includes/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Webapplicatie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse mobile_version" style="background-color: #C8C500 ">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"><img alt="Brand" src="images/logoaventus.png"class="img-logo" /></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav nav-tabs nav-stacked">
                <li><a data-toggle="tab" href="#menu1">Webapplicaties</a></li>
                <li><a data-toggle="tab" href="#menu2">Desktopapplicaties</a></li>
                <li><a data-toggle="tab" href="#menu3">Games</a></li>
            </ul>
        </div>
    </div>
</nav>


<!--  2 navbars, horizontaal op mobiel en verticaal op desktop  -->
