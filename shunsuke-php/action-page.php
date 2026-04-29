<?php
function addition($num1, $num2) {
    $sum = $num1 + $num2;
    return $sum;
}

if(isset($_POST['btn_submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    echo "sum of $num1 and $num2 is " . addition($num1, $num2);
}
    
?>