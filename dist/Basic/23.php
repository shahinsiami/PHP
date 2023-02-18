<?php
//////////////////////////////////
<?php

include_once('config.php');

$cn = mysql_connect($mysql_server, $mysql_username, $mysql_password);
mysql_select_db($mysql_db);

// $query = "SELECT * FROM `users`";
$query = "SELECT * FROM `users` WHERE `username` = 'user2'";

$results = mysql_query($query);

echo '<pre>';
$counter = 0;
while($row = mysql_fetch_assoc($results)) {
    $counter++;
    echo "User #$counter:<br/>";
    var_dump($row);
    echo '<br/>';
}
echo '</pre>';

mysql_close($cn);



//////////////////////////////////
<?php

include_once('config.php');

$mysqli = new mysqli($mysql_server, $mysql_username, $mysql_password, $mysql_db);

// $query = "SELECT * FROM `users`";
$query = "SELECT * FROM `users` WHERE `username` = 'user2'";

$results = $mysqli->query($query);

echo '<pre>';
$counter = 0;
while($row = $results->fetch_assoc()) {
    $counter++;
    echo "User #$counter:<br/>";
    var_dump($row);
    echo '<br/>';
}
echo '</pre>';

$mysqli->close();




//////////////////////////////////
<?php

include_once('config.php');

$dsn = "mysql:host=$mysql_server;dbname=$mysql_db";
$pdo = new PDO($dsn, $mysql_username, $mysql_password);

$query = "SELECT * FROM `users`";
// $query = "SELECT * FROM `users` WHERE `username` = 'user1'";

$statement = $pdo->query($query);

echo '<pre>';
$counter = 0;
while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $counter++;
    echo "User #$counter:<br/>";
    var_dump($row);
    echo '<br/>';
}
echo '</pre>';

//////////////////////////////////
<?php

$mysql_server = 'localhost';
$mysql_db = 'first_db';
$mysql_username = 'vira';
$mysql_password = '1234';



//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
//////////////////////////////////
?>