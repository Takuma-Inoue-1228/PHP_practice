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

<?php $sum = 100 + 1000 + 500; ?>
<?php $tax = 1.1; ?>

税抜で<?php print $sum; ?>円です。
税込で<?php print $sum * $tax; ?>円です。

</pre>
</main>
</body>    
</html>