<?php
$servername = "localhost";
$databasename = "5vswild";
$username = "root";
$password = "root";

//Connection DB
$connect = mysqli_connect($servername, $username, $password, $databasename);
mysqli_set_charset($connect, "utf8"); // not utf-8

if (mysqli_connect_error()) {
    echo "connection error" . mysqli_connect_error();
} else {
    echo "Connection : OK!";
}
