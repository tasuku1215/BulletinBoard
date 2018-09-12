<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <link href="css/default.css" rel="stylesheet" type="text/css">
  <title>welcome</title>
</head>
<body>
  <div id="w">
    <h1>確認ページ</h1>
    <hr>
    <table>
      <tr>
        <p>
          <td>年代:</td>
          <td><?php
          if(empty($_GET["old"]))
          {
            echo "未入力";
          }
          else
          {
            if($_GET["old"]=="0")
            {
              echo "未入力";
            }
            if($_GET["old"]=="10")
            {
              echo "10代以下";
            }
            if($_GET["old"]=="20")
            {
              echo "20代";
            }
            if($_GET["old"]=="30")
            {
              echo "30代";
            }
            if($_GET["old"]=="40")
            {
              echo "40代";
            }
            if($_GET["old"]=="50")
            {
              echo "50代";
            }
            if($_GET["old"]=="60")
            {
              echo "60代以上";
            }
          }
          ?>
        </td>
      </tr>
      <tr>
      </p>
      <p>
        <td>性別:</td>
        <td><?php
        if(empty($_GET["sex"]))
        {
          echo "未入力";
        }
        else
        {
          if($_GET["sex"]=="m")
          {
            echo "男";
          }
          if($_GET["sex"]=="w")
          {
            echo "女";
          }
          if($_GET["sex"]=="n")
          {
            echo "未回答";
          }

        }
        ?>
      </td>
    </p>
  </tr>
  <tr>
    <p>
      <td>出身地:</td>
      <td><?php
      if(empty($_GET["from"]))
      {
        echo "未入力";
      }
      else
      {
        switch($_GET["from"])
        {
          case 0:
          echo "未入力";
          break;
          case 1:
          echo "大阪府";
          break;
          case 2:
          echo "兵庫県";
          break;
          case 3:
          echo "京都府";
          break;
          case 4:
          echo "滋賀県";
          break;
          case 5:
          echo "奈良県";
          break;
          case 6:
          echo "和歌山県";
          break;
        }
      }
      ?>
    </p>
  </td>
</tr>
<tr>
  <td><p>行きたい所:</p></td>
  <td><p><?php
  if(empty($_GET["go"]))
  {
    echo "未入力";
  }
  else
  {
    foreach($_GET["go"] as $id)
    {
      switch($id)
      {
        case 1:
        echo "日本国内";
        break;
        case 2:
        echo "アメリカ・カナダ";
        break;
        case 3:
        echo "中国・韓国";
        break;
        case 4:
        echo "東南アジア";
        break;
        case 5:
        echo "オーストラリア";
        break;
        case 6:
        echo "南米";
        break;
        case 7:
        echo "北欧";
        break;
        case 8:
        echo "ヨーロッパ";
        break;
        case 9:
        echo "アフリカ";
        break;
        case 10:
        echo "その他";
        break;
      }
      echo "<br>";
    }
  }
  ?>
</td>
</tr>
</p>
<tr>
  <td><p>ご要望:</p></td>
  <br>
  <td><p><?php
  if(empty($_GET["form"]))
  {
    echo "未入力";
  }
  else
  {
    echo nl2br($_GET["form"]);
  }
  ?>
</p></td>
</tr>
</table>
<form method="get" action="index.php">
  <input type="submit" name="send" value="戻る">
</form>
<div>
</body>
</html>
