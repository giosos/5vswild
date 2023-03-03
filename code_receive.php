<?php

include 'app.php';

if (mysqli_connect_error()) {
    echo "connection error" . mysqli_connect_error();
} else {
    echo "Connection : OK!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>




    <pre>
    <?php
    //Look in DB
    $colors = mysqli_query($connect, "SELECT * FROM `code_counter`");

    $colors = mysqli_fetch_all($colors);

    //var_dump($colors);

    print_r($colors);



    //header("Location: home.html");
    ?>
</pre>
</body>

</html>