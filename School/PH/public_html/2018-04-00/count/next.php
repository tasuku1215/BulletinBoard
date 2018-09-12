<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <link href="css/default.css" rel="stylesheet" type="text/css">
  <title>welcome</title>
</head>
<body>
  <div id="w">
    <p>名前:
      <?php
      if(empty($_GET["firstname"]))
      {
        echo "未入力";
      }
      else
      {
        echo $_GET["firstname"];
      }
      ?>

    </p>
    <p>
      性別:
      <?php
      $se=0;
      if(empty($_GET["s"]))
      {
        echo "未入力";
      }
      else
      {
        if($_GET["s"]=="男")
        {
          echo '<strong style="color:blue">';
          echo $_GET["s"];
          echo '</strong>';
          $se = 1;
        }
        else
        {
          if($_GET["s"]=="女")
          {
            echo '<strong style="color:red">';
            echo $_GET["s"];
            echo '</strong>';
            $se = 2;
          }
        }
      }
      ?>

    </p>
    <p>
      出身地:
      <?php
      if(empty($_GET["from"]))
      {
        echo "未入力";
      }
      else
      {
        switch($_GET["from"])
        {
          case 1:
          echo "未入力";
          break;
          case 2:
          echo "日本";
          break;
          case 3:
          echo "それ以外";
          break;
        }
      }
      ?>

    </p>
    <p>
      趣味:
      <?php
      if(empty($_GET["syu"]))
      {
        echo "未入力";
      }
      else
      {
        foreach($_GET["syu"] as $id)
        {
          switch($id)
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
          echo "/";
        }
      }
      ?>

    </p>
    <p>
      資格:
      <?php
      if(empty($_GET["資格"]))
      {
        echo "未入力";
      }
      else
      {
        foreach($_GET["資格"] as $id)
        {
          switch($id)
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
          echo ",";
        }
      }
      ?>

    </p>
    <p>
      自己PR:
      <br>
      <?php
      if(empty($_GET["自己"]))
      {
        echo "未入力";
      }
      else
      {
        echo nl2br($_GET["自己"]);
      }
      ?>

    </p>
    <form
    method="get"
    action="index.php">
    <input type="hidden" name="name" value="<?PHP if(!empty($_GET["firstname"])){echo $_GET["firstname"];}?>">
    <input type="hidden" name="se" value="<?PHP echo $se; ?>">
    <input type="hidden" name="from" value="<?PHP if(!empty($_GET["from"])){echo $_GET["from"];}?>">
    <?php
    if(!empty($_GET["syu"]))
    {
      foreach($_GET["syu"] as $id)
      {
        echo '<input type="hidden" name="syu[]" value="';
        echo $id;
        echo '">';
      }
    }
    ?>
<?php
    if(!empty($_GET["資格"]))
    {
      foreach($_GET["資格"] as $id)
      {
        echo '<input type="hidden" name="si[]" value="';
        echo $id;
        echo '">';
      }
    }
    ?>
<input type="hidden" name="PR" value="<?PHP if(!empty($_GET["自己"])){echo $_GET["自己"];}?>">
    <input
    type="submit"
    name="send"
    value="戻る">
  </form>
  <div>
  </body>
  </html>
