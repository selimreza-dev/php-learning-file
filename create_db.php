<?php
// mysqli_report(MYSQLI_REPORT_OFF);
mysqli_report(MYSQLI_REPORT_OFF);
$servername = "localhost";
$username = "root";
$password = "";

// // connection to database
// $con_db = mysqli_connect($servername, $username, $password);


// // Create a db
// $sql = "CREATE DATABASE IF NOT EXISTS dbSelim";
// mysqli_query($con_db, $sql);

// connection to database;
$connect_db = mysqli_connect($servername, $username, $password);
if(!$connect_db){
    die("Failed to connection. " . mysqli_connect_error());
}else{
    echo "Successfully Connected to DB <br>";
}

// creating a db
$sql = "CREATE DATABASE dbSelim4";
$result = mysqli_query($connect_db, $sql);
if($result){
    echo "Database successfully created";
} else{
    echo "Database was not successfully created !!! " . mysqli_error($connect_db);
}




?>