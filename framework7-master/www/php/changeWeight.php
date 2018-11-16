<?php


  
  header('Content-Type: application/json; Charset=UTF-8');

  require 'connection.php';

  $w = $_POST['weightVal'];
  $user = $_POST['user_id'];

  $start_date = $_POST['utc'];

  $checkDate = "SELECT * FROM grahp_data WHERE created_at = :currDate AND graph_id = :user";

  $stmt = $connection->prepare($checkDate);

  $stmt->execute([
    'currDate' => $start_date,
    'user' => $user
  ]);

  $date = $stmt->fetch();

  if($date)
  {
    http_response_code(403);
  }
  else
  {

  $insert_weight = "INSERT INTO grahp_data VALUES ('',:user_id,:day,:weight,:created_at)";

  $stmt = $connection->prepare($insert_weight);

  $stmt->execute([
    'user_id' => $user,
    'weight' => $w,
    'created_at' => $start_date,
    'day' => 1
  ]);

  $get_weight = "SELECT * FROM grahp_data WHERE graph_id = :id";
  $stmt = $connection->prepare($get_weight);
  $stmt->execute([
      'id' => $user
  ]);

  $user_w = $stmt->fetchAll();

  echo json_encode($user_w);

}