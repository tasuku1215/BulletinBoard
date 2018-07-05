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
      <!-- ユーザーID「 -->
      <tr>
        <td>
          <p>
            ユーザーID:
          </p>
        </td>
        <td>
          <p>
          <?php
          if(empty($_GET["name"])){
            echo "未入力";
          }
          else{
            echo $_GET["name"];
          }
           ?>
         </p>
        </td>
      </tr>
      <!-- ユーザーID」 -->
      <!-- メールアドレス「 -->
      <tr>
        <td>
          <p>
            メールアドレス:
          </p>
        </td>
        <td>
          <p>
            <?php
            if(empty($_GET["mail"])){
              echo "未入力";
            }
            else{
              echo $_GET["mail"];
            }
             ?>
          </p>
        </td>
      </tr>
      <!-- メールアドレス」 -->
      <!-- 生年月日「 -->
      <tr>
        <td>
          <p>
            生年月日:
          </p>
        </td>
        <td>
          <p>
            <?php
            if(empty($_GET["year"])||empty($_GET["month"])||empty($_GET["day"])){
              echo "未入力";
            }
            else{
              echo $_GET["year"]."年".$_GET["month"]."月".$_GET["day"]."日";
            }
             ?>
          </p>
        </td>
      </tr>
      <!-- 生年月日」 -->
      <!-- 性別「 -->
        <td><p>性別:</p></td>
        <td><p><?php
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
      </p>
      </td>
  </tr>
  <tr>
      <td>
        <p>
        出身地:
      </p>
    </td>
    <td>
      <p>
        <?php
        if(empty($_GET["pref"])){
          echo "未入力";
        }else{
          echo $_GET["pref"];
        }
         ?>
      </p>
    </td>
  </td>
</tr>
</table>
<form method="get" action="SD11S723_35_kaint.php">
  <input type="submit" name="send" value="戻る">
</form>
<div>
</body>
</html>
