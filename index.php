<?php
    // php comment
    /**
     * Multiline
     * comment
     * */ 

    // Variable
    $food = "Pizza";
    $favorite_food = "Beep";
    $_age = 10;
    /**
     * 1. Must be start $ sign
     * 2. if double word can be used so use underscore and camel notaion
     * 3. variable are case sensative
     * 4. first number can not be used
     * 5. can be used underscore in first
     * 6. variable declare must be clear meaning
     * 7. can not be used special charecter
     * */ 

    // echo output
    $x = 10;
    $y = 1000;
    echo $x + $y;
    print '<br>';
    // print
    print $x * $y;
     echo '<br>';
    $foods = print('apple');
    echo $foods;

    /**
     * PHP Data types
     * 1. String
     * 2. Integer
     * 3. Float
     * 4. Boolean
     * 5. Array
     * 6. Object
     * 7. Null
     * */ 

    $string_data = 'Hello World';
    $inter_data = 10;
    $float_data = 10.5;
    $boolean_data = true;
    $array_data = array('Apple','Banana','Coconut', 'Orange');
    $null_data = NULL;

    echo '<br>';
    var_dump($string_data);echo '<br>';
    var_dump($inter_data); echo '<br>';
    var_dump($float_data); echo '<br>';
    var_dump($boolean_data); echo '<br>';
    var_dump($array_data); echo '<br>';
    var_dump($null_data); echo '<br>';


echo '<br>';

    // String
    echo strlen('I Love to eat Pizza');echo '<br>';
    $country = 'I live in Bangladesh';
    echo str_word_count($country); echo '<br>';
    echo strrev($country); echo '<br>';
    echo strpos($country, 'to');echo '<br>';
    $string_replace = str_replace('Bangladesh','America', $country);
    echo $string_replace;echo '<br>';


    // php math
    echo '<br>';
    echo pi();echo '<br>';
    echo min(10,50,5,100,99,40,36);echo '<br>';
    echo max(10,500,100,2490,294,293,90,100);echo '<br>';
    // positive
    echo abs(-20);echo '<br>';
    echo sqrt(64);echo '<br>';
    echo round(pi());echo '<br>';
    echo round(10.5);echo '<br>';
    echo rand(1,6);

echo '<br>';
    // Constant
    define('a', 20);
    define('A',10);
    define('Book','PHP Web Programming');
    echo Book;echo '<br>';
    define('cars',[
        'BMW',
        'Toyota',
        'Mazda'
    ]);
    print_r(cars);
    echo '<br>';
    echo cars[0];
echo '<br>';
    function out_put(){
        // echo($inter_data);
        echo (cars[2]);echo '<br>';
        
    }
    out_put();

    // constant are global scope
    // normal variable local scope
    // Constant use capital letter


















?>