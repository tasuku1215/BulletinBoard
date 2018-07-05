  <?php
  if(isset($error))
  {
    foreach($error as $error)
    {
      ?>
      <p>
      <?php echo $error;?>
      </p>
      <?php
    }
  }
  ?>
  <table>
  <tr>
    <th>ユーザーID</th>
    <th>ユーザーネーム</th>
    <th>電話番号</th>
    <th>メールアドレス</th>
  </tr>
  <?php
  foreach($usr_list as $usr)
  {
    ?>
    <tr>
      <td>
        <?php echo $usr[0];?>
      </td>
      <td>
        <?php echo $usr[1];?>
      </td>
      <td>
        <?php echo $usr[2];?>
      </td>
      <td>
        <?php echo $usr[3];?>
      </td>
    </tr>
    <?php
  }
?>
<?php
if(isset($str))
{
  ?>
    <tr>
      <td>
        <?php echo $str[0];?>
      </td>
      <td>
        <?php echo $str[1];?>
      </td>
      <td>
        <?php echo $str[2];?>
      </td>
      <td>
        <?php echo $str[3];?>
      </td>
    </tr>
<?php }?>
      <tr>
        <td></td>
        <td><a href="./index.php">登録する</a></td>
      </tr>
    </table>
  </body>
</html>