<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <link href="css/default.css" rel="stylesheet" type="text/css">
  <title>welcome</title>
</head>
<body>
  <!-- ラッパー開始 -->
  <div id="w">
    <form method="get" action="SD11S723_35_ank.php">
      <h1>アンケート送信フォーム</h1><hr>
      <p>以下の内容を入力し、送信ボタンを押してください。</p>
      <table>
        <tr>
          <td>年代</td>
          <td class="form"><select name="old">
            <option value="0"<?php
            if(!empty($_GET["old"]))
            {
              if($_GET["old"]==0)
              {
                echo "selected";
              }
            }
            ?>>項目を選択して下さい</option>
            <option value="10"<?php
            if(!empty($_GET["old"]))
            {
              if($_GET["old"]==10)
              {
                echo "selected";
              }
            }
            ?>>10代以下</option>
            <option value="20"<?php
            if(!empty($_GET["old"]))
            {
              if($_GET["old"]==20)
              {
                echo "selected";
              }
            }
            ?>>20代</option>
            <option value="30"<?php
            if(!empty($_GET["old"]))
            {
              if($_GET["old"]==30)
              {
                echo "selected";
              }
            }
            ?>>30代</option>
            <option value="40"<?php
            if(!empty($_GET["old"]))
            {
              if($_GET["old"]==40)
              {
                echo "selected";
              }
            }
            ?>>40代</option>
            <option value="50"<?php
            if(!empty($_GET["old"]))
            {
              if($_GET["old"]==50)
              {
                echo "selected";
              }
            }
            ?>>50代</option>
            <option value="60"<?php
            if(!empty($_GET["old"]))
            {
              if($_GET["old"]==60)
              {
                echo "selected";
              }
            }
            ?>>60代以上</option>

          </td>
        </select>
      </tr>
      <tr>
        <td>性別</td>
        <td class="form"><input type="radio" name="sex" value="m"
          <?php
          if(!empty($_GET["sex"]))
          {
            if($_GET["sex"]==m)
            {
              echo "checked";
            }
          }
          ?>>男</input>
          <input type="radio" name="sex" value="w" <?php
          if(!empty($_GET["sex"]))
          {
            if($_GET["sex"]==w)
            {
              echo "checked";
            }
          }
          ?>>女</input>
          <input type="radio" name="sex" value="n" <?php
          if(!empty($_GET["sex"]))
          {
            if($_GET["sex"]==n)
            {
              echo "checked";
            }
          }
          ?>>無回答</input>
        </td>
      </tr>
      <tr>

        <td>お住まい</td>
        <td class="form"><select name="from">
          <option value="0"<?php
          if(!empty($_GET["from"]))
          {
            if($_GET["from"]==0)
            {
              echo "selected";
            }
          }
          ?>>項目を選択して下さい</option>
          <option value="1"<?php
          if(!empty($_GET["from"]))
          {
            if($_GET["from"]==1)
            {
              echo "selected";
            }
          }
          ?>>大阪府</option>
          <option value="2"<?php
          if(!empty($_GET["from"]))
          {
            if($_GET["from"]==2)
            {
              echo "selected";
            }
          }
          ?>>兵庫県</option>
          <option value="3"<?php
          if(!empty($_GET["from"]))
          {
            if($_GET["from"]==3)
            {
              echo "selected";
            }
          }
          ?>>京都府</option>
          <option value="4"<?php
          if(!empty($_GET["from"]))
          {
            if($_GET["from"]==4)
            {
              echo "selected";
            }
          }
          ?>>滋賀県</option>
          <option value="5"<?php
          if(!empty($_GET["from"]))
          {
            if($_GET["from"]==5)
            {
              echo "selected";
            }
          }
          ?>>奈良県</option>
          <option value="6"<?php
          if(!empty($_GET["from"]))
          {
            if($_GET["from"]==6)
            {
              echo "selected";
            }
          }
          ?>>和歌山県</option>
        </td>
      </select>
    </tr>
    <tr>
      <!-- 行きたい所開始 -->
      <td>行きたい所</td>
      <td class="form">
        <input type="checkbox" name="go[]" value="1">日本国内
        <input type="checkbox" name="go[]" value="2">アメリカ・カナダ
        <br>
        <input type="checkbox" name="go[]" value="3">中国・韓国
        <input type="checkbox" name="go[]" value="4">東南アジア
        <br>
        <input type="checkbox" name="go[]" value="5">オーストラリア
        <input type="checkbox" name="go[]" value="6">南米
        <input type="checkbox" name="go[]" value="7">北欧
        <br>
        <input type="checkbox" name="go[]" value="8">ヨーロッパ
        <input type="checkbox" name="go[]" value="9">アフリカ
        <input type="checkbox" name="go[]" value="10">その他
      </td>

    </tr>
    <tr>
      <td>ご要望</td>
      <td class="form"><textarea name="form" cols="30" rows="5"><?php if(!empty($_GET["form"])){echo$_GET["form"];}?></textarea></td>
    </tr>
    <!-- 行きたい所終了 -->

    <tr>
      <td colspan="2">
        <input type="submit" name="send" value="送信">
      </td>
      <tr>
      </table>
    </form>
  </div>

</body>
</html>
