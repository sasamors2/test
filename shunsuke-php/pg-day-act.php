<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" value="Monday" name="btn_submit">
        <input type="submit" value="Tuesday" name="btn_submit">
        <input type="submit" value="Wednesday" name="btn_submit">
        <input type="submit" value="Thursday" name="btn_submit">
        <input type="submit" value="Friday" name="btn_submit">
    </form>

    <?php
        if (isset($_POST["btn_submit"])) {
            $day = $_POST["btn_submit"];
            echo $day;
        }
    ?>

    
</body>
</html>