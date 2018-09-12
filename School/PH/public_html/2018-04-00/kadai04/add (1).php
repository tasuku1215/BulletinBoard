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
  <title>掲示板</title>
</head>
<body>
   <div id="wrapper">
   <h1>掲示板</h1>
<!-- ユーザーの入力した情報を送る戻ってきた情報を受け取るなければ実行しない -->
    <form method="get" action="confirm.php">
      送信する内容を入力して下さい<br>
      <br>
      名前
      <br>
      <input type="text" name="name" value="<?php if(!empty($_GET["name"]))
      {echo$_GET["name"];}else{echo "名無し";}?>"><br>
      <br>
      コメント
      <br>
      <input type="text" name="comment" maxlength="50"><?php if(!empty($_GET["comment"])){echo$_GET["comment"];}?><br>
      ※50文字以内で入力してください
      <br>
      <input type="submit" name="send" value="送信">
    </form>
    <a href="index.php">掲示板へ行く</a>
  </div>
</body>
</html>
