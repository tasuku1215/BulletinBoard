<?php
/*
クラス記号 ：PH11S723
出席番号   ：３５
作成者     ：細見　祐
作成日     ：2017/10/31
仕様       ：ランダムに運勢を表示する
*/
?>
<!doctype>
<html lang="ja">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>welcome</title>
</head>
<body>
  <h1>うらない</h1>
  <?php
  $i=rand(1,5);
  switch($i)
  {
    case 1:
    echo '<img src="images/dai.png" width="300">';
    break;
    case 2:
    echo '<img src="images/daikyou.png" width="300">';
    break;
    case 3:
    echo '<img src="images/shou.png" width="300">';
    break;
    case 4:
    echo '<img src="images/sue.png" width="300">';
    break;
    case 5:
    echo '<img src="images/tyuu.png" width="300">';
    break;
  }
  ?>

</body>
</html>
