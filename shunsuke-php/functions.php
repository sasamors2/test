<?php



//built-in function
# abs()--> Returms the absolute(positive) value

echo "abs()" . "<br>";
echo abs(6.7) . "<br>";
echo abs(-3) . "<br>";
echo "<br>";

#max() --> Find hghest value
echo "max()" . "<br>";
echo max(2,4,6,8,10) . "<br>";
echo max(22,14,68,58,10) . "<br>";
echo "<br>";

#min() --> Find lawest value
echo "min()" . "<br>";
echo min(2,4,6,8,10) . "<br>";
echo min(22,14,68,58,15) . "<br>";
echo "<br>";

# strtolower() ---> String to lower will convent all characters to lowercase

echo "strtolower()" . "<br>";
echo strtolower("HELLO WORLD.") . "<br>";
echo "<br>";

# strtoupper() ---> Conbert all characters to uppercace

echo "estoupper()" . "<br>";
echo strtoupper("hello world") . "<br>";
echo "<br><br>";

//User-defined Functions

function addition($num1, $num2) { //10+5
    $sum = $num1 + $num2; 
    //$sum = 10 + 5;
    //$sum = 15;
    echo "The sum is: " . $sum . "<br>";
}

// function call
addition(10,5);
addition(15,15);

$num1 = 8; //$_POST['num1'];
$num2 = 4; //$_POST['num2'];
addition($num1,$num2);






echo "<h1>PHP user-defined function that uses return.</h1>";

// Function = Process
function multiply($a, $b) {
    $product = $a * $b;
    return $product;
}


// Input
$x = 3;
$y = 5;


// Process
$result = multiply($x, $y);


// Output
echo "The product is: $result";

?>

