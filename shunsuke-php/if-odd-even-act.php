<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   <title>Odd or Even</title>
   <style>
      p {
         margin-bottom: 0;
      }
   </style>
</head>

<body>
   <div class="card mt-5 mx-auto w-25">
      <div class="card-header">
         <h1 class="h3">Odd or Even</h1>
      </div>
      <div class="card-body">
         <form method="post">
            <div class="row mb-2">
               <div class="col">
                  <input type="number" class="form-control" name="num1" id="num1" placeholder="Enter value" required>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <button type="submit" class="btn btn-primary w-25" name="btn_submit">Submit</button>
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
// Is the year dicisible by4
function OddorEven($num1) {
    return ($num1 % 2 === 0);
}


if (isset($_POST['btn_submit'])) {
    $num1 = $_POST['num1'];

    echo "<div class='card mx-auto w-25 p-3 text-center'>";

    
    if (OddorEven($num1)) {
        echo "<div class='card-body bg-primary text-white'>";
        echo "<p class='h5'>$num1 :EVEN</p>";
        echo "</div>";
    }else{
        echo "<div class='card-body bg-danger text-white'>";
        echo "<p class='h5'>$num1 :ODD</p>";
        echo "</div>";
    }

    
} 

?>