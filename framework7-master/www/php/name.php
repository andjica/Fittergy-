<?php
  
  header('Content-Type: application/json; Charset=UTF-8');

  require 'connection.php';

  $name = $_GET['name'];



$query = $connection->prepare("SELECT * FROM nextgen_b2b_clients_verzendadres WHERE coor_latitude > '0' && coor_longitude > '0' && locatie_sportvasten = 'on' && status = 'active' AND name LIKE ?");
$query->execute(array("%$name%"));

$coaches = [];

while ($results = $query->fetch())
{
    $coaches[] = $results;
}

// var_dump($coaches);

// $all = [];


// foreach ($coaches as $c)
// {
//     $all[] = json_encode($c);
// }

// var_dump($all);

echo json_encode($coaches);