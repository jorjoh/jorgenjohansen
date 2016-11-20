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
    <br/><a href="https://www.facebook.com/JorgenJohansen93" title="J&#xf8;rgen Johansen" target="_TOP"
            class="faceBookLink">
        <!-- <p id="stuideSted">Student ved HÃ¸gksolen i Buskerud og Velstfold</p>
         <p id="stuide">Informasjonssystemer og IT-ledelse</p> -->
        <div id="social" style="display: inline">
            <a href="https://no.linkedin.com/in/jørgen-johansen-06046970" target="_blank">
                <img src="images/linkedin.png">
            </a>
            <a href="https://www.facebook.com/JorgenJohansen93" target="=_blank"> <img src="images/facebook.PNG"> </a>
            <a href="https://github.com/jorjoh" target="_blank"> <img src="images/gitHubLogo.png"></a>
        </div>

        <nav class="menuHandler">
            <ul>
                <li><a href="index.php" id="nav">Home</a></li>
                <li>
                    <a href="#" id="nav">Projects</a>
                    <ul class="test">
                        <li><a href="chromeExtention.php">ChromeExtention</a></li>
                        <li><a href="dotNetApplikasjoner.php">.NetApplikasjoner</a></li>
                    </ul>
                </li>
                <li><a href="about.php" id="nav">About</a>
                    <ul>
                        <li id="contact"><a id="cv"
                                            href="https://www.dropbox.com/s/qq4mtow3r8ul5rm/J%C3%B8rgen%20Johansen.pdf?dl=0"
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