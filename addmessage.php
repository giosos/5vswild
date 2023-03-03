<?php

$servername = "localhost";
$databasename = "5vswild";
$username = "root";
$password = "root";

try {

    $conn = new PDO("mysql:host=$servername; dbname=$databasename", $username, $password);

    if (empty($_POST['name']))
        exit("Field NAME REQ");
    if (empty($_POST['content']))
        exit("Field DISCRIPTION REQ");

    $query = "INSERT INTO message VALUES (NULL , :name, NOW())";
    $msg = $conn->prepare($query);
    $msg->execute(['name' => $_POST['name']]);

    /* $msg_id = $conn->lastInsertId();

    $query = "INSERT INTO message_content VALUES (NULL , :content, :message_id)";
    $msg = $conn->prepare($query);
    $msg->execute(['content' => $_POST['content'], 'message_id' => $msg_id]); */

    header("Location: home.php");
} catch (PDOException $e) {
    echo "error" . $e->getMessage();
}
