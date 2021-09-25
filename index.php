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

  <header class="header ">
    <div class="header-inner">
      <h1 class="header-logo">
        <p>MEMO</p>

      </h1>
      <nav class="header-nav">
        <ul class="header-nav-list">
          <li class="header-nav-item"><a href="https://takuma-inoue.com/">Profile</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <?php
    require('dbconect.php');

    if (isset($_REQUEST['page']) && is_numeric($_REQUEST['page'])) {
      $page =  $_REQUEST['page'];
    } else {
      $page = 1;
    }
    $start = ($page - 1) * 5;

    $memos = $db->prepare('SELECT * FROM memos ORDER BY id DESC LIMIT ?, 5');
    $memos->bindParam(1, $start, PDO::PARAM_INT);
    $memos->execute();
    ?>

    <article>
      <?php while ($memo = $memos->fetch()) : ?>
        <p>ID:<?php print($memo['id']); ?>
          <a href=" memo.php?id=<?php print($memo['id']); ?>"><?php print(mb_substr($memo['memo'], 0, 20, "UTF-8")); ?></a>
        </p>
        <time><?php print($memo['created_at']); ?></time>
        <hr>
      <?php endwhile; ?>

      <a href="input.html">新規投稿</a>
      <br>

      <?php if ($page >= 2) : ?>
        <a href="index.php?page=<?php print($page - 1); ?>"><?php print($page - 1); ?>ページ目へ</a>
      <?php endif; ?>
      |
      <?php
      $counts = $db->query('SELECT COUNT(*) as cnt FROM memos');
      $count = $counts->fetch();
      $max_page = ceil($count['cnt'] / 5);
      if ($page < $max_page) :
      ?>
        <a href="index.php?page=<?php print($page + 1); ?>"><?php print($page + 1); ?>ページ目へ</a>
      <?php endif; ?>
    </article>

  </main>

  <footer class="footer">
    <div class="copyright">&copy;TAKUMA INOUE</div>
  </footer>

</body>

</html>