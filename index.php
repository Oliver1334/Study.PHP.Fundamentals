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

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">  
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form>
</body>
</html> -->

<?php
    // echo "{$_GET["username"]} <br>";
    // echo "{$_GET["password"]} <br>";

    // echo "{$_POST["username"]} <br>";
    // echo "{$_POST["password"]} <br>";

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
</form>
</body>
</html> -->

<?php
    // $item = "pizza";
    // $price = 5.99;
    // $quantity = $_POST["quantity"];  //caching post value in local variable

    // $total = $quantity * $price;

    // echo"You have ordered {$quantity} x {$item}(s) <br>";
    // echo"Your total is: \${$total}";
    //Post more secure than get
?>

<!-- Math Functions -->
 <!-- <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form action="index.php" method="post">
        <label>x:</label>
        <input type="text" name="x">
        <br>
        <label>y:</label>
        <input type="text" name="y">
        <br>
        <label>z:</label>
        <input type="text" name="z">
        <input type="submit" value="total">

    </form>
 </body>
 </html> -->
 <?php
    // $x = $_POST["x"];
    // $y = $_POST["y"];
    // $z = $_POST["z"];
    // $total = null;

    // $total = abs($x); //absolute value -100 -> 100
    // $total = round($x);
    // $total = floor($x); //always round down
    // $total = ceil($x); //always round up
    // $total = sqrt($x); //square root
    // $total = pow($x, $y); //x to the power of y
    //$total = max($x, $y, $z); //gives highest value of values given
    //$total = min($x, $y, $z); //gives lowest value of values given
    //$total = pi(); //prints pi
    //$total = rand(1,6); //random number function min, max
    //echo $total
 ?>

 <!-- <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form action="index.php" method="post">
        <label>radius:</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">

    </form><br>
 </body>
 </html> -->

 <?php
    // $radius =$_POST["radius"];
    // $circumference = null;
    // $area = null;
    // $volume = null;

    // $circumference = 2 * pi() * $radius;
    // $circumference = round($circumference, 2);  // rounds to 2 digits after decimal
    // $area = pi() * pow($radius, 2);
    // $area = round($area, 2);
    // $volume = 4/3 * pi() * pow($radius, 3);
    // $volume = round($volume, 2);

    // echo"Circumference = {$circumference}cm <br>";
    // echo"Area = {$area}cm^2 <br>";
    // echo"Volume = {$volume}cm^3 <br>";
 ?>

 <!-- If statements -->
<?php
    $age = 101;

    if ($age >= 100){
        echo "You are too old to enter this site!";
    }
    else if ($age >= 18){
        echo "You may enter this site";
    } else if($age <= 0){
        echo "That wasn't a valid age";
    }
    else {
        echo "YOU ARE NOT ALLOWED, you must be 18+ to enter";
    }

?>