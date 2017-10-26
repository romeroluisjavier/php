<?php
  require 'api.php';

  try {
    $api = new Api($_REQUEST['action']);
    echo $api->processAPI();
  } catch (Exception $e) {
      echo json_encode(Array('error' => $e->getMessage()));
  }

 ?>
