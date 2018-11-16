<?php
  
  header('Content-Type: application/json; Charset=UTF-8');

  require 'connection.php';

  $cid = $_POST['cid'];

  $email = $_POST['email'];

  $stmt = $connection->prepare("UPDATE nextgen_fittergy_app SET begeleider_id = :id WHERE email = :email");

  $stmt->execute([
      'id' => $cid,
      'email' => $email
  ]);