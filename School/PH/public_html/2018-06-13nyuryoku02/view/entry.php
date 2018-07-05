<!-- 登録フォーム -->
<form action="./index.php" method="get">
  <table>
    <tr>
      <th>名前</th>
      <!-- ユーザーが入力した値があれば初期値として表示 -->
      <td><input type="text" name="name" value="<?php echo $name;?>"></td>
      <td><?php echo $error['name']; ?></td>
    </tr>
    <tr>
      <th>電話番号</th>
      <td><input type="text" name="tel" value="<?php echo $tel;?>"></td>
      <td><?php echo $error['tel']; ?></td>
    </tr>
    <tr>
      <th>メール</th>
      <td><input type="text" name="mail" value="<?php echo $mail;?>"></td>
      <td><?php echo $error['mail']; ?></td>
    </tr>
      <tr>
      <td></td>
      <td><input type="submit" name='enter' value="確認"></td>
    </tr>
  </table>
</form>
