<!doctype html>
<html lang= 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>


<main>
<h2>Practice</h2>
<pre>
<?php

  require ('dbconect.php');

  $statement = $db->prepare('UPDATE memos SET memo=? WHERE id=?');
  $statement->execute(array($_POST['memo'], $_POST['id']));

?>
<p>メモの内容を変更しました</p>
</pre>
<a href="index.php">一覧へ</a>
</main>
</body>    
</html>