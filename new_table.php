<?php
mysqli_report(MYSQLI_REPORT_OFF);

$server_name = 'localhost';
$user_name = 'root';
$password = '';
$dbname = 'nasim2';


// connection to db
$db_link = mysqli_connect($server_name, $user_name, $password, $dbname);
if( !$db_link ){
    die('DB is not connected ' . mysqli_connect_error());
} else{
    echo 'DB is Connected <br>';
}


// create a table
$sql_table = 'CREATE TABLE product(
    slno INT(11) AUTO_INCREMENT PRIMARY KEY,
    prdname VARCHAR(100),
    prdprice INT(5),
    pridweight VARCHAR(3)
)';

$table = mysqli_query($db_link,$sql_table);
if($table){
    echo 'Table created Successfully <br>';
} else{
    echo 'Table Not Created becouse : ' . mysqli_error($db_link);
}


?>