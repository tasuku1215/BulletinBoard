<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <link href="css/default.css" rel="stylesheet" type="text/css">
  <title>welcome</title>
</head>
<body>
<div id="wrapper">
    <p>名前:
      <?php
      $if=1;
      if(empty($_GET["name"]))
      {
        echo "未入力";
        $if=0;
      }
      else
      {
        echo $_GET["name"];
      }
      ?>
    </p>
    <p>
      コメント:
      <br>
      <?php
      if(empty($_GET["comment"]))
      {
        echo "未入力";
        $if=0;
      }
      else
      {
        echo nl2br($_GET["comment"]);
      }
      ?>
    </p>
    <?php
    if($if==1)
    {
    echo '<form method="get" action="board.php"><input type="hidden" name="name" value="';
  if(!empty($_GET["name"])){echo $_GET["name"];}
  echo '"><input type="hidden" name="comment" value="';
  if(!empty($_GET["comment"])){echo $_GET["comment"];}
  echo '"><input type="submit" name="send" value="確定">';
    }
    else
    {
      echo "未入力の項目があります";
    }
  ?>
  </form>
    <form method="get" action="index.php">
    <input type="hidden" name="name" value="<?PHP if(!empty($_GET["name"])){echo $_GET["name"];}?>">
    <input type="hidden" name="comment" value="<?PHP if(!empty($_GET["comment"])){echo $_GET["comment"];}?>">
    <input type="submit" name="send" value="戻る">
  </form>
  <div>
  </body>
  </html>