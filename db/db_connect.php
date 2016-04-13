<?php

$servername = "localhost";
$username   = "wanneerwa1_hoof";
$password   = "U6Bme5Crv4";
$dbname     = "wanneerwa1_hoofdsite";

//$servername = "localhost";
//$username   = "root";
//$password   = "";
//$dbname     = "westburg_db_tomaten";

// Creëer connectie.
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connectie. Als het niet lukt, laat een foutmelding zien, als het wel lukt, laat evt. een melding zien.
if (!$conn){
    echo("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
// Niet nodig om dit elke keer te echo'en.