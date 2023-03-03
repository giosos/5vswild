<?php

include 'app.php';

//Look in DB
$colors = mysqli_query($connect, "SELECT * FROM `code_counter`");
$colors = mysqli_fetch_all($colors);
foreach ($colors as $color) {
}

// Only green
$color_green = mysqli_query($connect, "SELECT code_color, COUNT(code_color) FROM `code_counter` WHERE code_color = 'Green'");
$color_green = mysqli_fetch_all($color_green);
foreach ($color_green as $green) {
}

// Only yellow
$color_yellow = mysqli_query($connect, "SELECT code_color, COUNT(code_color) FROM `code_counter` WHERE code_color = 'yellow'");
$color_yellow = mysqli_fetch_all($color_yellow);
foreach ($color_yellow as $yellow) {
}

// Only red
$color_red = mysqli_query($connect, "SELECT code_color, COUNT(code_color) FROM `code_counter` WHERE code_color = 'red'");
$color_red = mysqli_fetch_all($color_red);
foreach ($color_red as $red) {
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5vswild</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <div class="vertical-center">
            <form action="code_delivery.php" method="POST">
                <p>
                    Enter your name <br>
                    <input type="text" name="tex">

                    <br>
                    <input type="submit" value="OK">
                </p>
                <p>
                    <button name="greenbtn" class="greenbtn" value="GREEN">Green code</button>
                <p>You have today Green button <?= $green[1] ?> times clicked</button></p>

                </p>
                <p>
                    <button name="yellowbtn" class="yellowbtn" value="YELLOW">Yellow code</button>
                <p>You have today Yellow button <?= $yellow[1] ?> times clicked</button></p>
                </p>
                <p>
                    <button name="redbtn" id="redbtn" class="redbtn" value="RED" onclick="redFunction()">Red code</button>
                <p>You have today RED button <?= $red[1] ?> times clicked</button></p>
                <a id="alarm" href="alarm.html"></a>
                </p>

                <P>
                    <a href="orgateam.php">orgateam</a>
                </P>
            </form>

            <pre>


            <?php

            ?>
            </pre>



            </form>

        </div>
    </div>
    <script src="scripts.js"></script>
</body>

</html>