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
    <form
    method="get"
    action="next.php">
    送信する内容を入力して下さい
    <br>
    <br>
    名前
    <br>
    <input type="text" name="name" value="<?php if(!empty($_GET["name"]))
    {echo$_GET["name"];}else{echo "名無し";}?>">
    <br>
    <br>
    コメント
    <br>
    <textarea name="comment" cols="30" rows="5"><?php if(!empty($_GET["comment"])){echo$_GET["comment"];}?></textarea>
    <br>
    <br>
    <input
    type="submit"
    name="send"
    value="送信">
  </form>
  <a href="board.php">掲示板へ行く</a>
</div>
</body>
</html>
