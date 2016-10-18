<?php
/**
 * Created by PhpStorm.
 * User: J�rgen Johansen
 * Date: 10.10.2015
 * Time: 22:25
 */
@session_start();
ob_start();
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <link href="styleswebpage.css" rel="stylesheet" type="text/css">
    <title>J&oslashrgen Johansen</title>
    <style>
        img#pic1 {
            top: 10%;
            left: 5%;
            width: 1024px;
            height: 500px;
            position: relative;
        }

    </style>
    <script src="jquery-1.11.1.js"></script>
    <script>
        $(document).ready(function () {
          $(".menuHandler").animate({opacity: '1', fontSize: "32pt"});
        });
    </script>

</head>
<body>
<?php include_once("analyticstracking.php") ?>
    <div id="content">
       <hr id="stroke">
       <p id="name"></p>
        <img src="images/Under-Construction.jpg" id="pic1">
        <?php

        header('refresh: 3; url=index.php');
        ?>

        <!-- <p id="stuideSted">Student ved H�gksolen i Buskerud og Velstfold</p>
         <p id="stuide">Informasjonssystemer og IT-ledelse</p> -->

        <nav class="menuHandler">
            <ul>
                <li><a href="index.php" id="nav">Home</a></li>
                <li>
                    <a href="#" id="nav">Projects</a>
                    <ul class="test">
                        <li><a href="chromeExtention.php" id="nav">ChromeExtention</a></li>
                        <li><a href="dotNetApplikasjoner.php" id="nav">.NetApplikasjoner</a></li>
                    </ul>
                </li>

                <li><a href="about.php" id="nav">About</a>
                    <ul>
                        <li id="contact" id="nav"><a id="cv"
                                                     href="https://www.dropbox.com/s/mxffeb53tbc6t27/J%C3%B8rgen%20Johansen.pdf?dl=0"
                                                     target="_blank">CV</a></li>
                    </ul>
                </li>
                <li><a href="contactMe.php" id="nav">Contact me</a></li>
            </ul>
        </nav>
    </div>

<footer><?php include("DBfecthInfo/rettigheterTilSide.php"); ?></footer>

</body>

</html>





















