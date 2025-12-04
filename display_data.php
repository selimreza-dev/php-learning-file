<?php
mysqli_report(MYSQLI_REPORT_OFF);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

// step one connection to db
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die("Database not connected " . mysqli_connect_error());
} else{
    echo "Database connected <br>";
}

// Step 2 database table select
$sql = "SELECT * FROM `contactus`";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
echo $num . "<br>";

if($num > 0){
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);

    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $row['slno'] . ". " . "Name " . $row['name'] . " Message " . $row['message']; 
        echo "<br>";
    }
}

?>