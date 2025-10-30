<?php
// db.sample.php - sample; rename to db.php on server and fill real password
$mysqli = new mysqli("localhost", "2412988", "YOUR_MYSQL_PASSWORD_HERE", "db2412988");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
?>
