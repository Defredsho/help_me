<?php
  header("Access-Control-Allow-Origin: *");

  $json =  json_decode(file_get_contents('php://input'));

  $token = 'klfdsjhgkjfahsd093842';

  echo json_encode($token);
?>
