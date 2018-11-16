<?php
include "connection.php";


$jezik = $_POST['person']['jezik'];
$doel = $_POST['person']['doel'];
$uren = $_POST['person']['uren'];
$voed = $_POST['person']['voed'];
$life = $_POST['person']['life'];
$med = $_POST['person']['med'];
$fname = $_POST['person']['fname'];
$lname = $_POST['person']['lname'];
$email = $_POST['person']['email'];
$date = $_POST['person']['date'];
$residence = $_POST['person']['residence'];
$sex = $_POST['person']['sex'];
$land = $_POST['person']['land'];
$post = $_POST['person']['post'];
$phone = $_POST['person']['phone'];
$stmt = $connection->prepare("INSERT INTO nextgen_fittergy_app VALUES('',:timestamp, :tid, :bid, :jezik, :doel, :uren, :voed, :life, :med, :ap, :ad , :am , :fname, :lname, :sex, :birthday, :land, :residence,:email,:phone,:postal_code,:svp,:dp,:np,:zone1,:zone2)");

$timestamp = time();

$success = $stmt->execute([
    'timestamp' => $timestamp,
    'tid' => 930,
    'bid' => 0,
    'jezik' => $jezik,
    'doel' => $doel,
    'uren' => $uren,
    'voed' => $voed,
    'life' => $life,
    'med' => $med,
    'ap' => 1,
    'ad' => 1,
    'am' => 1,
    'fname' => $fname,
    'lname' => $lname,
    'sex' => $sex,
    'birthday' => $date,
    'land' => $land,
    'residence' => $residence,
    'postal_code' => $post,
    'email' => $email,
    'phone' => $phone,
    'svp' => "off",
    'dp' => "off",
    'np' => "",
    'zone1' => 0,
    'zone2' => 0,
]);


    $user_id = $connection->lastInsertId();

if ($success)
{
    $stmt = $connection->prepare("INSERT INTO user_graph VALUES('', :id)");

    $dj = $stmt->execute([
        'id' => $user_id
    ]);

    if($dj)
    {   
        $data['timestamp'] = $timestamp;
        $data['user_id'] = $user_id;
        echo json_encode($data);
    }

    else false;
}

else false;