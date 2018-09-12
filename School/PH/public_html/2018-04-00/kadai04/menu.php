<?php
/*
クラス記号 ：PH11S723
出席番号   ：34
作成者     ：細見 祐
作成日     ：2017/01/09
仕様       ：一文字掲示板を作る
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <link href="css/default.css" rel="stylesheet" type="text/css">
  <title>welcome</title>
</head>
<body>
  <div id="wrapper">
    <form method="get" action="add.php">
      <input type="submit" name="send" value="投稿する">
    </form>
    <form method="get" action="index.php">
      <input type="submit" name="send" value="戻る">
    </form>
    <?php
if(empty($_GET["del"])){
  echo '<form method="get" action="menu.php">
  <input type="submit" name="del" value="全件削除する">
  </form>';
}
else{
  echo '<form method="get" action="menu.php">
  <input type="submit" name="delete" value="本当に削除しますか？">
  </form>';
}
if(!empty($_GET["delete"])){
  if(is_readable('data/board.csv'))
  {
    $file=fopen('data/board.csv','w');
    fwrite($file,'');
    fclose($file);
    echo "正常に削除されました";
  }
}
    ?>
  </div>
</body>
</html>
