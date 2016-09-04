<?php
/**
 * Created by PhpStorm.
 * User: Jørgen Johansen
 * Date: 27.09.15
 * Time: 21:38
 */
include("Dbcon.php");
$sqlsetning="SELECT id, infoOmMeg FROM om WHERE id = 5;";		/* SQL-setning for å hente data fra databasen */
$sqlResultat=mysqli_query($db,$sqlsetning) or die("Ikke mulig å hente data fra databasen + copy!!");

$antallRader=mysqli_num_rows($sqlResultat);


for ($r=1; $r<=$antallRader; $r++)								/* for-løkke for å lese gjennom og skrive ut informasjonen i tabellen "om" */
{
    $rad=mysqli_fetch_array($sqlResultat);
    // $about=$rad["title"];
    $rettigheterTilSide=$rad["infoOmMeg"];

    // echo("<p id='om'>$about</p>");
    echo("<footer>$rettigheterTilSide</footer>");

}
