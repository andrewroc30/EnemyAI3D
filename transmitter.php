<?php

$servername = "host";
$username = "name";
$password = "";
$dbname = "game_name";

$coinsname = (isset($_REQUEST['coinsnameGet']) ? $_REQUEST['coinsnameGet'] : null);

//Create Connection
$connection = new mysqli($servername, $username, $password, $dbname);

//Check Connection
if(!$connection) {
    die("Connection Failed. " . mysqli_connect_error());
}

$sql = "SELECT Coins FROM score WHERE Name = '" . $coinsname . "'";
$result = mysqli_query($connection, $sql);

while($row = mysqli_fetch_array($result, MYSQLI_BOTH) {
    echo $row['Coins'];
}
?>