<?php
  
  header('Content-Type: application/json; Charset=UTF-8');

  require 'connection.php';

  $idGraph = $_POST['user_id'];

  $graph = "SELECT * FROM grahp_data WHERE graph_id = :gid";

  $stmt = $connection->prepare($graph);

  $stmt->execute([
      'gid' => $idGraph
  ]);

  $data = $stmt->fetchAll();

  echo json_encode($data);