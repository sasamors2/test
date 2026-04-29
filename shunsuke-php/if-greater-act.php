<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <title>Avarege</title>
   <style>
      p {
         margin-bottom: 0;
      }
   </style>
</head>

<body>
   <div class="card mt-5 mx-auto w-25">
      <div class="card-header">
         <h1 class="h3">Which number is greater?</h1>
      </div>
      <div class="card-body">
         <form method="post">
            <div class="row mb-2">
               <div class="col">
                  <input type="number" class="form-control" name="num1" id="num1" placeholder="First Number" required>
               </div>
            </div>
            <div class="row mb-2">
               <div class="col">
                  <input type="number" class="form-control" name="num2" id="num2" placeholder="Second Number" required>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <button type="submit" class="btn btn-primary w-100" name="btn_submit">Submit</button>
               </div>
            </div>
         </form>
      </div>
   </div>
</body>

</html>
</body>

</html>
<?php


if (isset($_POST['btn_submit'])) {
   $num1 = $_POST['num1']; // 10;
   $num2 = $_POST['num2']; // 5

    echo "<div class='card mx-auto w-25 p-3 '>";
    echo "<div class = 'card-body'>";
   if ($num1 == $num2) {
      echo "<p class='h4'>They are equal</p>";
   }elseif($num1 > $num2){
        $left  = $num1;
        $right = $num2;
        echo "<p class ='float-start h2'>$left</p>";
        echo "<p class ='float-end h5'>$right</p>";
    } else {
        $left  = $num2;
        $right = $num1;
        echo "<p class ='float-start h2'>$left</p>";
        echo "<p class ='float-end h5'>$right</p>";
    }
    
    echo "</div>";
    echo "</div>";
   }

?>