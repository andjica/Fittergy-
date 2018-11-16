<?php
  
  header('Content-Type: application/json; Charset=UTF-8');

  require 'connection.php';


$query = $connection->prepare("SELECT * FROM nextgen_b2b_clients_verzendadres WHERE coor_latitude > '0' && coor_longitude > '0' && locatie_sportvasten = 'on' && status = 'active' LIMIT 25");
$query->execute();

$coaches = [];

while ($results = $query->fetch())
{
    $coaches[] = $results;
}

echo json_encode($coaches);