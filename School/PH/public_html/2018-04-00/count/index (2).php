<?php
/*
クラス記号 ：PH11S723
出席番号   ：35
作成者     ：細見　祐
作成日     ：2017/11/26
仕様       ：自分の情報を入力し表示しエラーならば戻せるようにする
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
  <!-- <img src="img/i.jpg" width="500"> -->
  <div id="w">
    <form
    method="get"
    action="next.php">
    あなたの情報を入力して下さい
    <br>
    <br>
    名前
    <input type="text" name="firstname" value="<?php if(!empty($_GET["name"]))
    {echo$_GET["name"];}?>">
    <br>
    <br>
    性別
    <input type="radio" name="s" value="男"
    <?php
    if(!empty($_GET["se"]))
    {
      if($_GET["se"]==1)
      {
        echo "checked";
      }
    }
    ?>>男
    <input type="radio" name="s" value="女" <?php
    if(!empty($_GET["se"]))
    {
      if($_GET["se"]==2)
      {
        echo "checked";
      }
    }
    ?>>女
    <br>
    <br>
    出身地
    <select name="from">
      <option value="1"<?php
      if(!empty($_GET["from"]))
      {
        if($_GET["from"]==1)
        {
          echo "selected";
        }
      }
      ?>>項目を選択して下さい</option>
      <option value="2"<?php
      if(!empty($_GET["from"]))
      {
        if($_GET["from"]==2)
        {
          echo "selected";
        }
      }
      ?>>日本</option>
      <option value="3"<?php
      if(!empty($_GET["from"]))
      {
        if($_GET["from"]==3)
        {
          echo "selected";
        }
      }
      ?>>それ以外</option>
    </select>
    <br>
    <br>
    趣味
<?php
    if(!empty($_GET["syu"]))
    {
      $syu=$_GET["syu"];
    }
    for($i=1;$i<=3;$i++)
    {
      echo '    <input type="checkbox" name="syu[]" value="';
      echo $i;
      echo '"';
      if(isset($syu))
      {
        if(in_array($i,$syu))
        {
          echo 'checked';
        }
      }
      echo '>';
      switch($i)
      {
        case 1:
        echo "スポーツ";
        break;
        case 2:
        echo "ゲーム";
        break;
        case 3:
        echo "読書";
        break;
      }
echo "\n";
    }
    ?>
    <br>
    <br>
    所持資格
    <select multiple name="資格[]" size="3">
<?php
      if(!empty($_GET["si"]))
      {
        $si=$_GET["si"];
      }
      for($i=1;$i<=3;$i++)
      {
        echo '      <option value="';
        echo $i;
        echo '"';
        if(isset($si))
        {
          if(in_array($i,$si))
          {
            echo 'selected';
          }
        }
        echo '>';
        switch($i)
        {
          case 1:
          echo "基本情報";
          break;
          case 2:
          echo "応用情報";
          break;
          case 3:
          echo "J検";
          break;
        }
        echo '</option>',"\n";
      }
      ?>
    </select>
    <br>
    <br>
    自己PR
    <textarea name="自己" cols="30" rows="5"><?php if(!empty($_GET["PR"])){echo$_GET["PR"];}?></textarea>
    <br>
    <br>
    <input
    type="submit"
    name="send"
    value="送信">
  </form>
</div>

</body>
</html>
