<?php
  require 'validate.php';
  session_start();

  $name = '';
  $tel = '';
  $email = '';

  $msg = array(
    'name' => '',
    'tel' => '',
    'email' => '',
  );

  if(!empty($_POST)){
    $data = array(
      'name' => $name = $_POST['name'],
      'tel' => $tel = $_POST['tel'],
      'email' => $email = $_POST['email'],
    );

    if(!empty(validate($data))){
      $msg = validate($data);
    }else{
      $msg = array(
        'name' => '',
        'tel' => '',
        'email' => '',
      );
    }
  }

  if(!empty($_GET)){
    $name = $_SESSION['name'];
    $tel = $_SESSION['tel'];
    $email = $_SESSION['email'];
  }

 ?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>入力フォーム</h2>
    <hr style="opacity:0.3;">
    <p>入力画面　->　確認画面　->　完了画面</p>

    <form action="registar.php" method="POST">
    <ul style="list-style-type:none;">
      <li><label for="name">氏名:</label>
      <input type="text" name="name" value="<?php echo $name;?>">
      <br><span style="color:red"><?php echo $msg['name']; ?></span></li>

      <li><label for="tel">TEL:</label>
      <input type="text" name="tel" value="<?php echo $tel;?>">
      <br><span style="color:red"><?php echo $msg['tel']; ?></span></li>

      <li><label for="email">メールアドレス:</label>
      <input type="text" name="email" value="<?php echo $email;?>">
      <br><span style="color:red"><?php echo $msg['email']; ?></span></li>
      <li><input type="submit" value="送信"></li>
    </ul>
    </form>
  </body>
</html>
