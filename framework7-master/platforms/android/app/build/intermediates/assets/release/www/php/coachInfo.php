<?php
  
  header('Content-Type: application/json; Charset=UTF-8');

  require 'connection.php';

  $cid = $_POST['cid'];

  $coach = "SELECT * FROM nextgen_b2b_a_main_clients WHERE pro_v_koppeling = :cid";

  $stmt = $connection->prepare($coach);

  $stmt->execute([
    'cid' => $cid
  ]);

  $info = $stmt->fetch();

  echo json_encode($info);