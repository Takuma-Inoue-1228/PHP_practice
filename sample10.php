<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<!-- ここにプログラムを記述します -->
<?php 
  date_default_timezone_set('Asia/tokyo');
  
  print('現在は'. date('G'). '時です。'.  "\n");

  if(date('G') < 11){
    print('※現在の時間は営業時間外です。');
  } else{
    print('ようこそ。'. "\n");
  }



  $x = "takuma";
  // if($x = true){
  //   print ($x);
  // }else{
  //   print ("xには文字が入っていません。");
  // }
  if($x){
    print ($x);
  }else{
    print ("xには文字が入っていません。");
  }
  // print ($x);
?>
</pre>
</main>
</body>    
</html>