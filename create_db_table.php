<?php
mysqli_report(MYSQLI_REPORT_OFF);

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "selim";

// // connection db
// $db_connection = mysqli_connect($servername, $username, $password, $dbname);

// if(!$db_connection){
//     die("Connection Failed " . mysqli_connect_error());
// } else{
//     echo "DB Connected <br>";
// }

// // create table

// $sql = "CREATE TABLE student(
// id INT(11) AUTO_INCREMENT PRIMARY KEY,
// name VARCHAR(100) NOT NULL,
// email VARCHAR(100),
// age INT(3)
// )";


// if(mysqli_query($db_connection, $sql)){
//     echo "Table created successfully";
// } else{
//     echo "Error creating table: " . mysqli_error($db_connection);
// }


$servername = 'localhost';
$username = 'root';
$passowrd = '';
$db_name = 'selim';

// connection database
$db_connect = mysqli_connect($servername, $username, $passowrd, $db_name);
if(!$db_connect){
    die('Database not connecting '. mysqli_connect_error());
} else{
    echo 'Database Connect Successfully <br>';
}

// create a table in selim db
$sql = 'CREATE TABLE book(
    slno INT(11) AUTO_INCREMENT PRIMARY KEY,
    bookname VARCHAR(100) NOT NULL,
    bookprice INT(11),
    publication VARCHAR(100),
    vendorname VARCHAR(100)
)';

if(mysqli_query($db_connect, $sql)){
    echo 'Table creating successfully';
}else{
    echo 'Table creating error ' . mysqli_error($db_connect);
}








?>