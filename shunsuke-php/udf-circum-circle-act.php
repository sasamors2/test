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
         <h1 class="h3">Circumference of a Circle</h1>
      </div>
      <div class="card-body">
         <form method="post">
            <div class="row mb-2">
               <div class="col">
                  <input type="number" class="form-control" name="num1" id="num1" placeholder="Radius" required>
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
<!-- <?php
function Circumference($num1) {
    return (2 * pi() * $num1);
}


if (isset($_POST['btn_submit'])) {
   $num1 = $_POST['num1']; 

   $Circumference = Circumference($num1);

    echo "<div class='card mx-auto my-3 w-25 p-3'>";
    echo "<p>Circumference = <span class='fs-5'>$Circumference</span></p>";
    echo "</div>";
}
?> -->

