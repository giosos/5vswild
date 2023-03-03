<?php

$servername = "localhost";
$databasename = "5vswild";
$username = "root";
$password = "root";

try {

    $conn = new PDO("mysql:host=$servername; dbname=$databasename", $username, $password);

    /*     if (empty($_POST['name']))
        exit("Field NAME REQ");
    if (empty($_POST['content']))
        exit("Field DISCRIPTION REQ"); */

    $query = "INSERT INTO code_counter VALUES (NULL , :code_color, NOW())";
    $msg = $conn->prepare($query);

    if ($_POST['greenbtn'])
        $msg->execute(['code_color' => $_POST['greenbtn']]);

    if ($_POST['yellowbtn'])
        $msg->execute(['code_color' => $_POST['yellowbtn']]);

    header("Location: home.php");

    if ($_POST['redbtn'])
        $msg->execute(['code_color' => $_POST['redbtn']]);

    if ($_POST['redbtn'])
        header("Location: alarm.html");

    //$msg_id = $conn->lastInsertId();

    /* $query = "INSERT INTO message_content VALUES (NULL , :content, :message_id)";
        $msg = $conn->prepare($query);
        $msg->execute(['content' => $_POST['content'], 'message_id' => $msg_id]); */
} catch (PDOException $e) {
    echo "error" . $e->getMessage();
}
