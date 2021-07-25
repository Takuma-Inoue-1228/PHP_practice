<?php 
  $dsn = 'mysql:host=***;dbname=***;charset=utf8';
  $user = '+++';
  $pass = '+++';

  try{
    $db = new PDO($dsn,$user,$pass);
  } catch(PDOExceqtion $e) {
      echo 'DB接続エラー：' . $e->getMessage();
  }
?>
