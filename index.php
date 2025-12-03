<?php
//     // php comment
//     /**
//      * Multiline
//      * comment
//      * */ 

//     // Variable
//     $food = "Pizza";
//     $favorite_food = "Beep";
//     $_age = 10;
//     /**
//      * 1. Must be start $ sign
//      * 2. if double word can be used so use underscore and camel notaion
//      * 3. variable are case sensative
//      * 4. first number can not be used
//      * 5. can be used underscore in first
//      * 6. variable declare must be clear meaning
//      * 7. can not be used special charecter
//      * */ 

//     // echo output
//     $x = 10;
//     $y = 1000;
//     echo $x + $y;
//     print '<br>';
//     // print
//     print $x * $y;
//      echo '<br>';
//     $foods = print('apple');
//     echo $foods;

//     /**
//      * PHP Data types
//      * 1. String
//      * 2. Integer
//      * 3. Float
//      * 4. Boolean
//      * 5. Array
//      * 6. Object
//      * 7. Null
//      * */ 

//     $string_data = 'Hello World';
//     $inter_data = 10;
//     $float_data = 10.5;
//     $boolean_data = true;
//     $array_data = array('Apple','Banana','Coconut', 'Orange');
//     $null_data = NULL;

//     echo '<br>';
//     var_dump($string_data);echo '<br>';
//     var_dump($inter_data); echo '<br>';
//     var_dump($float_data); echo '<br>';
//     var_dump($boolean_data); echo '<br>';
//     var_dump($array_data); echo '<br>';
//     var_dump($null_data); echo '<br>';


// echo '<br>';

//     // String
//     echo strlen('I Love to eat Pizza');echo '<br>';
//     $country = 'I live in Bangladesh';
//     echo str_word_count($country); echo '<br>';
//     echo strrev($country); echo '<br>';
//     echo strpos($country, 'to');echo '<br>';
//     $string_replace = str_replace('Bangladesh','America', $country);
//     echo $string_replace;echo '<br>';


//     // php math
//     echo '<br>';
//     echo pi();echo '<br>';
//     echo min(10,50,5,100,99,40,36);echo '<br>';
//     echo max(10,500,100,2490,294,293,90,100);echo '<br>';
//     // positive
//     echo abs(-20);echo '<br>';
//     echo sqrt(64);echo '<br>';
//     echo round(pi());echo '<br>';
//     echo round(10.5);echo '<br>';
//     echo rand(1,6);

// echo '<br>';
//     // Constant
//     define('a', 20);
//     define('A',10);
//     define('Book','PHP Web Programming');
//     echo Book;echo '<br>';
//     define('cars',[
//         'BMW',
//         'Toyota',
//         'Mazda'
//     ]);
//     print_r(cars);
//     echo '<br>';
//     echo cars[0];
// echo '<br>';
//     function out_put(){
//         // echo($inter_data);
//         echo (cars[2]);echo '<br>';
        
//     }
//     out_put();

//     // constant are global scope
//     // normal variable local scope
//     // Constant use capital letter


//     /**
//      * PHP Operator
//      * 1. Arithmetic Operator // + - * / ** % ++ --
//      * 2. Assignment Operator // = += -= *= /= **=
//      * 3. Comparison Operator // == === > < => <= != !==
//      * 4. Ternary Operator // ? :
//      * 5. Bitwaze operator
//      * */ 



//     // if else elseif statement

//     // switch statement

//     // while loop

//     $m = 1;
//     while($m <= 5){
//         echo "Number is: $m <br>";
//         $m++;
//     }

//     // do while loop
//     $n = 2;
//     do{
//         echo "Do While Loop is : $n <br> ";
//         $n++;
//     } while($n <= 1);

//     // for loop
//     for($i = 0; $i <= 10; $i++){
//         echo " For Loop is: $i <br> ";
//     };

//     // foreach loop

//     $friends = ['Selim', 'Nasim','Mamun'];
//     foreach($friends as $friend) {
//         echo $friend . '<br>';
//     }

//     $mobiles = [
//         'iPhone' => '13 Pro max',
//         'Samsang' => 'S21 Ultra',
//         'Symphony' => 'Z70'
//     ];
//     foreach($mobiles as $key => $value){
//         echo $key . ' = ' . $value . '<br>' ;
//     }

//     // php function as a normal function like javascript - function has parameter and argument

//     // php date and time

//     date_default_timezone_set("Asia/Dhaka");
//     echo date("h:i:sa");


// php Function

// function calc($number_one = 0, $number_two = 0) {
//     $sum = $number_one + $number_two;
//     return $sum;
// }
// $result = calc(10,5);
// echo $result;


// function student_result($results){
//     $sum = 0;
//     $i = 1;
//     foreach($results as $result){
//         $sum += $result;
//         $i++;
//     }
//     return $sum/$i;
// }
// $selim_result = [59,50,100,98,90];
// $result_summary = student_result($selim_result);
// echo $result_summary;


// date function

// $date = date("d"); // 01 - 31;
// $date = date('j'); // 1 - 31;
// $date = date("D"); // Mon; 
// $date = date("l"); // wednesday;
// $date = date("m"); // month 01 - 12
// $date = date("n"); // month 1 - 12;
// $date = date("M"); // Jan - Feb
// $date = date("F"); // Full month January
// $date = date("Y"); // Full Year - 2025
// $date = date("y"); // just year - 25;

// // echo $date;

// // | Format | Output           | Meaning                 |
// // | ------ | ---------------- | ----------------------- |
// // | `d`    | 01–31            | Day (leading zero)      |
// // | `j`    | 1–31             | Day (no leading zero)   |
// // | `D`    | Mon–Sun          | Short day               |
// // | `l`    | Monday–Sunday    | Full weekday            |
// // | `m`    | 01–12            | Month (02, 05 etc)      |
// // | `n`    | 1–12             | Month (no leading zero) |
// // | `M`    | Jan–Dec          | Short Month             |
// // | `F`    | January–December | Full month              |
// // | `Y`    | 2025             | 4-digit year            |
// // | `y`    | 25               | 2-digit year            |

// // 🕒 Time (সময়)
// // Format	Output	Meaning
// // h	01–12	Hour (12-hour format)
// // H	00–23	Hour (24-hour format)
// // i	00–59	Minutes
// // s	00–59	Seconds
// // a	am / pm	lowercase
// // A	AM / PM	uppercase

// $time = date("h"); // 01 - 12 Hour
// $time = date("H"); // 00 - 23 Hour
// $time = date("i"); // minute 00 - 59;
// $time = date("s"); // Second - 00 - 59;
// $time = date("a"); // am lowercase
// $time = date("A"); // PM Uppercase

// // echo  $time;
// date_default_timezone_set("asia/Dhaka");
// $full_date_and_time = date("h:i:s A, d-l F Y");
// echo $full_date_and_time;

// Associative array
// $fav_game = [
//     "Selim" => "Football",
//     "Nasim" => "Cricket",
//     "Mamun" => "Hocky",
//     "Riyad" => "Badmilton"
// ];

// // echo $fav_game["Selim"];
// foreach($fav_game as $key => $value){
//     echo "$key favorite game  $value <br>";
// }


// Multi-dimentinal array

$multi_dim = [
    [2,5,6,8],
    [1,6,4,9],
    [3,7,2,3],
    [7,2,5,7]
];

// // var_dump($multi_dim);
// for($i = 0; $i < count($multi_dim); $i++){
//     echo var_dump( $multi_dim[$i]);
//     echo "<br>";
// }

// // print single each array
// for($i = 0; $i < count($multi_dim); $i++){
//     for($j = 0; $j < count($multi_dim[$i]); $j++){
//         echo $multi_dim[$i][$j];
//         echo " ";
//     }
//     echo "<br>";
// }

// scope
// global
// $a = 90;
// $b = 9;
// $name = "Selim";

// function print_value(){
//     global $a,$b;
//     $a = 100;
//     $b = 1000;
//     echo "$a,  $b <br>";
// }
// print_value();

// echo $a,$b;

// echo var_dump($GLOBALS["name"]);

// get and post

// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     $email = $_POST["email"];
//     $password = $_POST["password"];
//     echo "<div>
//         Email is: $email <br> Password is: $password
//     </div>";
// }


// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     echo $_POST['email'];
//     echo "<br>";
//     echo $_POST['password'];
// }




?>

<!-- <form action="./index.php" method="POST">
    <h3>Login Form</h3>
    <input type="email" name="email" placeholder="Email"><br><br>
    <input type="password" name="password" placeholder="******"><br><br>
    <input type="submit" value="Login">
</form> -->