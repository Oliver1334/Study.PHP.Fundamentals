<!-- //Introduction -->
<!-- <?php
// echo"Intro to PHP<br>";
// echo"This is an introduction to PHP";
?> -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button>PHP elephant button</button>
</body>
</html> -->

<!-- //Variables and Data types -->
<?php
    //variable = a reusable container that holds data: string, integer, float, boolean
    //strings
    // $name = "Mord Mord";
    // $food = "Chicken";
    // $email = "test@gmail.com";
    //integers
    // $age = 29; 
    // $users = 2;
    // $quantity = 4;
    //floats
    // $gpa = 2.5;
    // $price = 7.86;
    // $tax_rate = 5.1;
    //Booleans
    // $employed = false;
    // $online = true;
    // $for_sale = false;

    // $total = null;

    // echo "Hello {$name}<br>";
    // echo "Do you like {$food}?<br>";
    // echo "Your email is {$email}<br><br>";

    // echo"You are {$age} years old<br>";
    // echo"There are {$users} users online<br>";
    // echo"You would like to buy {$quantity} items<br><br>";

    // echo"Your gpa is: {$gpa}<br>";
    // echo"Your chicken is \${$price}<br>";
    // echo"The sales tax rate is: {$tax_rate}%<br><br>";

    // echo"Online status: {$online}<br>"

    // echo"You have ordered {$quantity} x {$food}s<br>";
    // $total = $quantity * $price;
    // echo"Your total is: \${$total}";
?>

<!-- Arithmetic in PHP -->
 <?php
    // Arithmetic operators
    // + - * / ** %
    // $x = 10;
    // $y = 2;
    // $z = null;

    // $z = $x + $y;
    // $z = $x - $y;
    // $z = $x * $y;
    // $z = $x / $y;
    // $z = $x ** $y; //10 to the power of 2
    // $z = $x % $y; // modulus remainder of any division 

    // echo $z;


    // Increment/decrement operators
    // ++, --
    // $counter = 10;

    // $counter-=2;
    // echo $counter;


    // Operator Precedence
    // ()
    // **
    // * / %
    // + -
    // $total = 1 + 2 - 3 * 4 /5 ** 6;
    // echo $total;
?>

<!-- GET and POST -->
<?php
// $_GET, $_POST = special variables used to collect data from an HTML form
//                          data is sent to the file in the action attribute of <form>
//                          <form action="some_file.php" method="get">

//$_GET = Data is appended to the url
//         NOT SECURE
//         char limit
//         Bookmark is possible w/ values
//         GET requests can be cached
//         Better for a search page

//$_POST = Data is packaged inside the body of the HTTP request
//      MORE SECURE
//      No data limit
//      Cannot bookmark
//      GET requests are not cached
//      Better for submitting credentials


?>