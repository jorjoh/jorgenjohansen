<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="styleswebpage.css" rel="stylesheet" type="text/css">
    <title>J&oslashrgen Johansen</title>

    <script src="jquery-1.11.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".faceBookLink").fadeIn(6000);
            $(".menuHandler").animate({opacity: '1', fontSize: "32pt"});

        });
    </script>

</head>

<body>
<?php include_once("analyticstracking.php") ?>

<div id="content">

    <hr id="stroke">

    <article> <?php include("DBfecthInfo/get_infoAboutPage.php"); ?></article>
    <!-- Facebook Badge START -->
    <br/>
        <a href="https://www.facebook.com/JorgenJohansen93" title="J&#xf8;rgen Johansen" target="_TOP"
            class="faceBookLink">
            <img class="facecBookplugin" src="https://badge.facebook.com/badge/747798801.4134.1186877311.png"alt="Jørgen Johansen"/>
        </a><!-- Facebook Badge END -->

    <!-- <p id="stuideSted">Student ved HÃ¸gksolen i Buskerud og Velstfold</p>
     <p id="stuide">Informasjonssystemer og IT-ledelse</p> -->
    <div id="social" style="display: inline">
        <a href="https://no.linkedin.com/pub/jÃ¸rgen-johansen/70/469/60/en" target="_blank">
            <img src="images/linkedin.png">
        </a>
        <a href="https://www.facebook.com/JorgenJohansen93" target="=_blank"> <img src="images/facebook.PNG"> </a>
    </div>

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