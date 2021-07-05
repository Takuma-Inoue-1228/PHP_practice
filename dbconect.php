<?php 
  $dsn = 'mysql:host=mysql152.phy.lolipop.lan;dbname=LAA1239491-memodb;charset=utf8';
  $user = 'LAA1239491';
  $pass = '19921228';

  try{
    $db = new PDO($dsn,$user,$pass);
  } catch(PDOExceqtion $e) {
      echo 'DB接続エラー：' . $e->getMessage();
  }
?>