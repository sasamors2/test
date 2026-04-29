<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if-increasing-decreasing</title>
</head>
<body>
    <form method="post">
        <input type="number" name="num1" id="num1" placeholder="Enter first number"><br>
        <input type="number" name="num2" id="num2" placeholder="Enter Second number"><br>
        <input type="number" name="num3" id="num3" placeholder="Enter third number"><br>
        <button type="submit"  name="btn_submit">Submit</button>
    </form>
</body>
</html>

<?php
    if (isset($_POST['btn_submit'])) {
   $num1 = $_POST['num1']; 
   $num2 = $_POST['num2']; 
   $num3 = $_POST['num3']; 

   if ($num1 < $num2 && $num2 < $num3) {
        echo "<p class='h4'>increasing</p>";
   }elseif($num1 > $num2 && $num2 > $num3){
        echo "<p class='h4'>Decreasing</p>";
    } else {
        echo "<p class='h4'>Neither</p>";
    }
    
    echo "</div>";
    echo "</div>";
    }


?>