<?php
/*
課題No.03：あなたのことを教えてください
クラス記号：PH-11S-723
出席番号：29
名前：中山　敬弘
作成日：2017/11/28
仕様：送って戻そう
*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>送って戻そう</title>
</head>

<body>
  <?php
  $val = '';
  $val6 = '';
  if($_GET){
    $val = $_GET["firstname"];
    $val6 = $_GET["honbun"];
  }

  ?>
  ユーザー名:
  <form method="get" action="next.php">
    <input type="text" name="firstname" value="<?php echo $val; ?>">
    <br>
    <br>

    コメント：<br>
    <textarea name="honbun" rows="8" cols="30"><?php if(!empty($val6)){
      echo $val6;
    }?></textarea>
    <br>
    <input type="submit" value="送信">
  </form>

</body>
</html>
