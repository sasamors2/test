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
      <div class="card-header bg-secondary text-white">
         <h1 class="h3">Area of Rectangle</h1>
      </div>
      <div class="card-body">
         <form method="post">
            <div class="row mb-2">
               <div class="col">
                  <input type="number" class="form-control" name="num1" id="num1" placeholder="Enter Length" required>
               </div>
            </div>
            <div class="row mb-2">
               <div class="col">
                  <input type="number" class="form-control" name="num2" id="num2" placeholder="Enter Width" required>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <button type="submit" class="btn btn-dark w-20" name="btn_submit">Submit</button>
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
function rectangle($num1, $num2) {
    return ($num1 * $num2) ;
    // $prod = multiplication($num1, $num2);
}


if (isset($_POST['btn_submit'])) {
   $num1 = $_POST['num1']; // 10;
   $num2 = $_POST['num2']; // 5

   $rectangle = rectangle($num1, $num2);

    echo "<div class='card mx-auto my-3 w-25 p-3'>";
    echo "<p>length = <span class='fs-5'>$num1</span></p>";
    echo "<p>width = <span class='fs-5'>$num2</span></p>";
    echo "<p class='h5'>Area of rectangle = <span class='h5'>$rectangle</span></p>";
    echo "</div>";
}
?>