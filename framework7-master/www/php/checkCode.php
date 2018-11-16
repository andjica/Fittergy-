<?php
  
  header('Content-Type: application/json; Charset=UTF-8');

  require 'connection.php';

  $timestamp = $_POST['uneto'];

  $user = "SELECT id,timestamp,begeleider_id, AS cid FROM nextgen_fittergy_app n INNER JOIN nextgen_b2b_a_main_clients_contactpersonen c ON n.begeleider_id = c.client_id WHERE timestamp = :timestamp AND sv_programma = 'on'";

  $stmt = $connection->prepare($user);

  $stmt->execute([
      'timestamp' => $timestamp
  ]);

  $data = $stmt->fetch();

  echo json_encode($data);