<?php


include 'app.php';
include 'colors.php';

// Autorefresh page
$page = $_SERVER['PHP_SELF'];
$sec = "10"; // time seconds



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="<?php echo $sec ?>;URL='<?php echo $page ?>'"> <!--Autorefresh page (meta) from php-->

    <title>Orga-team</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>


    <div class="container">
        <div class="vertical-center">
            <div id="digital-clock"> </div><br>
            <table class="tables" title="table1">
                <tr>
                    <th>Name</th>
                    <th>Color</th>
                    <th>Count</th>
                    <th>Date (last time)</th>
                </tr>
                <tr>
                    <td rowspan="3">Alex</td>
                    <td>Green</td>
                    <td title="<?= $date_green[0] ?>"><?= $green[1] ?></td>
                    <td><?= $date_green[0] ?></td>
                </tr>
                <tr>

                    <td>Yellow</td>
                    <td><?= $yellow[1] ?></td>
                    <td><?= $date_yellow[0] ?></td>
                </tr>
                <tr>

                    <td>Red</td>
                    <td>1</td>
                    <td>12.01.2023</td>
                </tr>
            </table><br>
            <table class="tables" title="table2">
                <tr>
                    <th>Name</th>
                    <th>Color</th>
                    <th>Count</th>
                    <th>Date</th>
                </tr>
                <tr>
                    <td rowspan="3">Alex</td>
                    <td>Green</td>
                    <td><?= $yellow[1] ?></td>
                    <td>12.01.2023</td>
                </tr>
                <tr>

                    <td>Yellow</td>
                    <td>1</td>
                    <td>12.01.2023</td>
                </tr>
                <tr>

                    <td>Red</td>
                    <td>1</td>
                    <td>12.01.2023</td>
                </tr>
            </table>
        </div>
    </div>
    <script src="clock.js"> </script>

</body>

</html>