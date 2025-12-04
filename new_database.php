<?php
mysqli_report(MYSQLI_REPORT_OFF);

$server_name = 'localhost';
$user_name = 'root';
$password = '';



// connection to db
$db_link = mysqli_connect($server_name, $user_name, $password);
if( !$db_link ){
    die('DB is not connected ' . mysqli_connect_error());
} else{
    echo 'DB is Connected <br>';
}

// creating a db
$sql = 'CREATE DATABASE nasim2';
$result =  mysqli_query($db_link, $sql);
if($result){
    echo 'DB Created <br>';
} else{
    echo 'DB not created ' . mysqli_error($db_link);
}




?>