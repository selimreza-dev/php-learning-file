<?php
mysqli_report(MYSQLI_REPORT_OFF);

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'contact';

// STEP 1: connect to MySQL server (without db)
$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("❌ Server connection failed: " . mysqli_connect_error());
}

// STEP 2: Create database if not exists
$createDb = "CREATE DATABASE IF NOT EXISTS $dbname";
mysqli_query($conn, $createDb);

// STEP 3: Now connect to the database
$db_connect = mysqli_connect($servername, $username, $password, $dbname);

if(!$db_connect){
    die("❌ Database connection failed: " . mysqli_connect_error());
}

// STEP 4: Create table
$table_sql = "CREATE TABLE IF NOT EXISTS contactus(
    slno INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL
)";

mysqli_query($db_connect, $table_sql);

// STEP 5: Insert data
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = mysqli_real_escape_string($db_connect, $_POST['name']);
    $email = mysqli_real_escape_string($db_connect, $_POST['email']);
    $message = mysqli_real_escape_string($db_connect, $_POST['message']);

    $data_insert = "INSERT INTO contactus (name, email, message)
                    VALUES ('$name', '$email', '$message')";

    if(mysqli_query($db_connect, $data_insert)){
        echo "<p style='color:green; text-align:center;'>Message sent successfully!</p>";
    } else {
        echo "<p style='color:red; text-align:center;'>Error: " . mysqli_error($db_connect) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        *{
            box-sizing:border-box;
        }
        form{
            text-align:center;
            font-family:arial;
        }
        h3{
            font-family:arial;
            font-size:30px;
            text-transform:uppercase;
            margin-bottom:10px;
        }
        input, textarea{
            border:1px solid #dadada;
            padding:10px;
            border-radius:5px;
            width: 50%;
        }
        textarea{
            height:200px;
            font-family:arial;
        }
        input[type="submit"]{
            background-color:#007CF7;
            font-family:arial;
            font-size:18px;
            font-weight:bold;
            text-transform:uppercase;
            color:#FFF;
            cursor:pointer;
        }
        div{
            margin:5px;
        }
    </style>
</head>
<body>

    <form action="contact.php" method="POST">
        <h3>Contact Form</h3>
        <div>
            <input type="text" name="name" placeholder="Enter Your Name">
        </div>
        <div>
            <input type="Email" name="email" placeholder="Enter Your Email">
        </div>
        <div>
            <textarea name="message" id="" placeholder="Write your message"></textarea>
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
    
</body>
</html>