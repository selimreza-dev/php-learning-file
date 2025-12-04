<?php
// mysqli_report(MYSQLI_REPORT_OFF);

echo "Connect to the Database <br>";

/**
 * Two ways to connected database
 * 1. MySQLi Extension
 * 2. PDO
 */ 
 
// কানেক্ট করার জন্য প্রথমে ভেরিএবল লিখতে হবে
// connect to the database system
$servername = "localhost";
$username = "root";
$password = "d";

// create a connection
$connection = mysqli_connect($servername, $username, $password);

// die function
if(!$connection) {
    die("Sorry not connected to database: " . mysqli_connect_error());
}
echo "Connection was successful";








?>