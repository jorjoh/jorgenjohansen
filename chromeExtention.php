<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link href="styleswebpage.css" rel="stylesheet" type="text/css">
    <title>J&oslashrgen Johansen</title>

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
    <article>  <?php include("DBfecthInfo/get_infoChromeExtentionPage.php"); ?> </article>
    <div id="bildekarrusel"><?php include("pictureCarrusel.php"); ?></div>

    <!-- <p id="stuideSted">Student ved Høgksolen i Buskerud og Velstfold</p>
     <p id="stuide">Informasjonssystemer og IT-ledelse</p> -->

    <nav class="menuHandler">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>
                <a href="#">Projects</a>
                <ul class="test">
                    <li><a href="chromeExtention.php">ChromeExtention</a></li>
                    <li><a href="dotNetApplikasjoner.php">.NetApplikasjoner</a></li>
                </ul>
            </li>

            <li><a href="about.php">About</a>
                <ul>
                    <li id="contact"><a id="cv"
                                        href="https://www.dropbox.com/s/mxffeb53tbc6t27/J%C3%B8rgen%20Johansen.pdf?dl=0"
                                        target="_blank">CV</a>
                    </li>
                </ul>
            </li>
            <li><a href="contactMe.php">Contact me</a></li>

        </ul>
    </nav>

</div>

<footer><?php include("DBfecthInfo/rettigheterTilSide.php");?></footer>
</body>
</html>




















