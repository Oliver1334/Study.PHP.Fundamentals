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
    $name = "Mord Mord";
    $food = "Chicken";
    $email = "test@gmail.com";
    //integers
    $age = 29; 
    $users = 2;
    $quantity = 4;
    //floats
    $gpa = 2.5;
    $price = 7.86;
    $tax_rate = 5.1;
    //Booleans
    $employed = false;
    $online = true;
    $for_sale = false;

    $total = null;

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

    echo"You have ordered {$quantity} x {$food}s<br>";
    $total = $quantity * $price;
    echo"Your total is: \${$total}";


?>
