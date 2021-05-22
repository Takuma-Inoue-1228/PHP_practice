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
<?php 
$week_name = ['日曜日', '月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日'];
// print ($week_name[date('w')]);
// print ("\n");
// print('以下for分のtest');
// print ("\n");

for($i=1; $i<=365; $i++):
  $date = strtotime('+'. $i. 'day');
  print (date('n/j', $date));
  // print (date('w', $date));
  print ($week_name[date('w', $date)]);
  print "\n";
endfor



?>

</pre>
</main>
</body>    
</html>