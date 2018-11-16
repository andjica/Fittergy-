<?php
  
  header('Content-Type: application/json; Charset=UTF-8');

  require 'connection.php';

  $cid = $_POST['cid'];

  $coach = "SELECT c.naam, c.telefoon, c.email, p.pasfoto_file FROM nextgen_b2b_a_main_clients c INNER JOIN nextgen_b2b_a_main_clients_contactpersonen p ON p.client_id = c.id WHERE pro_v_koppeling = :cid";

  $stmt = $connection->prepare($coach);

  $stmt->execute([
    'cid' => $cid
  ]);

  $info = $stmt->fetch();

  echo json_encode($info);