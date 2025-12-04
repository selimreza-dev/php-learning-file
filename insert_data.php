<?php
// inset data in the table
mysqli_report(MYSQLI_REPORT_OFF);

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'nasim2';

// connect to db
$db_link = mysqli_connect($servername, $username, $password,$dbname);

if(!$db_link){
    die('Database not connected' . mysqli_connect_error());
} else{
    echo 'DB Connected';
}

$product_name = 'Zip';
$product_price = 1000;
$product_weight = '20';

$sql = "INSERT INTO `product` (`prdname`, `prdprice`, `pridweight`) VALUES ('$product_name', '$product_price', '$product_weight')";

$result = mysqli_query($db_link, $sql);
if($result){
    echo 'Data Inserted in the table';
} else{
    echo 'Data not inserted becouse this error ' . mysqli_error($db_link);
}




?>