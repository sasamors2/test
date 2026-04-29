<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    first number <input type="number" class="form-control" name="num1" id="num1" required> <br>
    Second number <input type="number" class="form-control" name="num2" id="num2" required> <br>

    <button type="submit" class="btn btn-primary w-100" name="btn_submit">Submit</button>

</form>
<?php
function subtraction($num1, $num2) {
    return $num1 - $num2;
}

function multiplication($num1, $num2) {
    return $num1 * $num2;
}


if (isset($_POST['btn_submit'])) {

   $num1 = $_POST['num1']; // 10;
   $num2 = $_POST['num2']; // 5

    $diff = subtraction($num1, $num2);
    $prod = multiplication($num1, $num2);

    if($num2 < $num1 ){
        echo $diff;

    }else{
        echo $prod;
    }



}





?>
    
</body>
</html>