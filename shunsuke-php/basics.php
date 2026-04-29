<?php

// single line comment
# single line comment
/*
 multi
 line
 comment
*/

//PHP Displays

# echo

echo "Hello World<br>";
echo 'Hi,hello World';
echo "<p>This is using paragraph tag.</p>";

#two arguments
echo "John","Daryl<br>";

#print
print "Hi this is using print";
// print "John","Daryl<br>";
echo "<br><br>";


//Concatenation
#Multiple arguments

echo "Tim"," ","Jack","Aron","<br>";

#single arguments using (.)
echo "My name is " . "John " . "Smith" . "<br>";

echo "<br><br>";

// Variables
$first_name = "John";
$last_name = 'smith';
$age = 21;

     #1st output
     echo "My name is $first_name $last_name and I am $age years old.<br>";

     #2nd output     
     echo "My name is " . $first_name ." ". $last_name . " and I am " . $age . " years old." ;

    echo "<br><br>";

    # Data Types


    $name = "John";
    $username = 'John21';

            var_dump($name);
            echo "<br>";
            var_dump($username);

            echo "<hr>";
             $age=21;
             $x =-4;

            var_dump($age);
            echo "<br>";
            var_dump($x);

            echo "<hr>";
             $distance=3.5;
             $true =true;

            var_dump($distance);
            echo "<br>";
            var_dump($true);

            echo "<hr>";
            echo"<h1>Arithmetic Oprators</h1>";

            // Example Numbers
            $num1 = 11;
            $num2 = 4;

            $num1 = $num1 + $num2;
            $diffrence =$num1 - $num2;
            $product = $num1 * $num2;
            $quotie = $num1 / $num2;
            $remainder = $num1 % $num2;

            /**
             * 1. Divide 11 by 4
             *       a. 11/4 = 2 remander 3
             *       b. Because 4 * 2 = 8
             *       C. Subtract 11 - 8 = 3
             * 
             * 2. The remainder is3
             */


            echo "Addition: $num1 <br>";
            echo "Subtraction: $diffrence <br>";
            echo "Multiplication: $product <br>";
            echo "Division: $quotie <br>";
            echo "Modulo: $remainder <br>";

            echo "<hr>";
            echo"<h1>Comparison Oprators</h1>";
            // Example
            $a = 10;
            $b = 5; //integer
            $c = "10"; //string

            echo "Equal (==):<br>";
            var_dump($a == $b); //false
            echo "<br>";
            var_dump($a == $c); // true ( values are equal, type ignored)
            echo "<br><br>";

            echo "Identical (===): <br>";
            var_dump($a === $b); //false
            echo "<br>";
            var_dump($a === $c); // false ( types deffer; int vs string)
            echo "<br><br>";

            echo "Not equal (!= or <>): <br>";
            var_dump($a != $b); 
            echo "<br>";
            var_dump($a <> $c); // false (values are equal)
            echo "<br><br>";

            echo "Greater than ( > ): <br>";
            var_dump($a > $b); // 10 > 5
            echo"<br>";
            var_dump($a > $c); // 10 > 10
            echo"<br><br>";

            echo "Less than ( < ): <br>";
            var_dump($a < $b); // 10 < 5
            echo"<br>";
            var_dump($a < $c); // 10 < 10
            echo"<br><br>";

            echo "Grater than or equal to  ( >= ): <br>";
            var_dump($a >= $b); // 10 >= "5"
            echo"<br>";
            var_dump($a >= $c); // 10 >= 5
            echo"<br><br>";

            echo "Less than or equal to  ( <= ): <br>";
            var_dump($a <= $b); // 10 >= 5
            echo"<br>";
            var_dump($a <= $c); 
            echo"<br><br>";

            echo "<hr>";
            echo"<h1>Incriment Opreators</h1>";
            //incremento = increase
            //increase by 1
            //++, ++++ XX
            //pre-increment -> putting the ++ symbnol before the variable

            $d = 5; //strting value of the variable
            echo "$d <br>";
            ++$d; //1+5, pre-incerement
            echo "$d <br>";

            //post-invrement -> putting the ++ symbol after the variable
            ++$d; //6+1, =7
            echo "$d <br>";

            // $d+++++; Wrong

            echo "<hr>";
            echo"<h1>Decrement Opreators</h1>";
            //decrement =decrease
            //decreasing by 1
            //--

            $e = 3;
            echo "$e<br>";
            //pre-decrement --> putting the -- bifore the bariabile
            --$e; //1 - 3 = 2
            echo "$e<br>";

            //post-decrement --> putting the --after the variabel
            --$e; //2-1=1
            echo "$e<br>";















?>