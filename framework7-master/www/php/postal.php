<?php
  
  header('Content-Type: application/json; Charset=UTF-8');

  require 'connection.php';

  $postal = $_GET['postal'];

$query = $connection->prepare("SELECT * FROM nextgen_b2b_clients_verzendadres WHERE coor_latitude > '0' && coor_longitude > '0' && locatie_sportvasten = 'on' && status = 'active' AND postcode1 LIKE ?");

$query->execute(array("%$postal%"));

$coaches = [];

while ($results = $query->fetch())
{
    $coaches[] = $results;
}


echo json_encode($coaches);