<?php
include "php/connection.php";

$name = $_POST['person']['username'];
$email = $_POST['person']['email'];
$date = $_POST['person']['date'];
$residence = $_POST['person']['residence'];
$sex = $_POST['person']['sex'];
$land = $_POST['person']['land'];
$post = $_POST['person']['post'];

$stmt = $connection->prepare("INSERT INTO users VALUES('',:name,:sex,:birthday,:land,:residence,:postal_code,:email,'','')");

$stmt->execute([
    'name' => $name,
    'sex' => $sex,
    'birthday' => $date,
    'land' => $land,
    'residence' => $residence,
    'postal_code' => $post,
    'email' => $email
]);