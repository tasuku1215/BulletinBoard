<?php
session_start();

var_dump($_SESSION);

$msg = array(
  $_SESSION['n']
);
?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  <style>

  </style>
  </head>
  <body>
    <form action="registar.php" method="POST">
    <ul style="list-style-type:none;">
      <li><label for="name">氏名:</label>
      <br><span style="color:red"><?php echo $msg['name']; ?></span></li>

      <li><label for="tel">TEL:</label>
      <br><span style="color:red"><?php echo $msg['tel']; ?></span></li>

      <li><label for="email">メールアドレス:</label>
      <br><span style="color:red"><?php echo $msg['email']; ?></span></li>
    </ul>
    </form>

  <form action="registar.php" method="GET">
    <input type="submit" name="back" value="戻る">
  </form>
  </body>
</html>
