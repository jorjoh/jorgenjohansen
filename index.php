<!DOCTYPE html><html><head>    <meta charset="UTF-8"/>    <link href="styleswebpage.css" rel="stylesheet" type="text/css">    <title>J&oslashrgen Johansen</title>    <script src="jquery-1.11.1.js"></script>    <script src="script.js"></script></head><body><?php include_once("analyticstracking.php") ?><div id="content" hidden>    <hr id="stroke">    <p id="name"> <?php include("DBfecthInfo/get_infoFrontPage.php"); ?> </p>    <div id="clientInfo">    <p id="userStats"><?php        error_reporting(0);        echo "Hello! <br/> Your Public IP-adress is: <br/>";        $ip = $_SERVER['REMOTE_ADDR'];        echo $ip;        echo "<br/>";        echo "Using this platform:<br/>";        echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";        $browser = get_browser(null, true);        echo($browser);        ?></p>    </div>    <!-- <p id="stuideSted">Student ved Høgksolen i Buskerud og Velstfold</p>     <p id="stuide">Informasjonssystemer og IT-ledelse</p> -->    <nav class="menuHandler">        <ul>            <li><a href="index.php" id="nav">Home</a></li>            <li>                <a href="#" id="nav">Projects</a>                <ul class="test">                    <li><a href="chromeExtention.php" >ChromeExtention</a></li>                    <li><a href="dotNetApplikasjoner.php" >.NetApplikasjoner</a></li>                </ul>            </li>            <li><a href="about.php" id="nav">About</a>                <ul>                    <li id="contact" ><a id="cv"                                        href="https://www.dropbox.com/s/mxffeb53tbc6t27/J%C3%B8rgen%20Johansen.pdf?dl=0"                                        target="_blank">CV</a></li>                </ul>            </li>            <li><a href="contactMe.php" id="nav">Contact me</a></li>        </ul>    </nav></div><footer>    <?php include("DBfecthInfo/rettigheterTilSide.php"); ?></footer></body></html>