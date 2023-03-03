<?php

// Only green
$color_green = mysqli_query($connect, "SELECT code_color, COUNT(code_color) FROM `code_counter` WHERE code_color = 'green'");
$color_green = mysqli_fetch_all($color_green);
foreach ($color_green as $green) {
}
$last_update_green = mysqli_query($connect, "SELECT code_date FROM `code_counter` WHERE code_color = 'green' ORDER BY `code_counter`.`code_date` DESC LIMIT 1;");
$last_update_green = mysqli_fetch_all($last_update_green);
foreach ($last_update_green as $date_green) {
}

// Only yellow
$color_yellow = mysqli_query($connect, "SELECT code_color, COUNT(code_color) FROM `code_counter` WHERE code_color = 'yellow'");
$color_yellow = mysqli_fetch_all($color_yellow);
foreach ($color_yellow as $yellow) {
}
$last_update_yellow = mysqli_query($connect, "SELECT code_date FROM `code_counter` WHERE code_color = 'yellow' ORDER BY `code_counter`.`code_date` DESC LIMIT 1;");
$last_update_yellow = mysqli_fetch_all($last_update_yellow);
foreach ($last_update_yellow as $date_yellow) {
}
