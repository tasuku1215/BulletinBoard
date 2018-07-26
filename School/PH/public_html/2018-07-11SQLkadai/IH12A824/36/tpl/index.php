<?php
// ヘッダーHTML呼び出し
  require_once './tpl/header.html';
?>
<table>
<tr>
  <td>
    ID
  </td>
  <td>
    名前
  </td>
  <td>
    年齢
  </td>
</tr>
<?php
// DBから取得した二次元連想配列をテーブル化して表示
foreach($sql_data as $val){
?>
  <tr>
  <?php
  foreach($val as $val2){
    ?>
    <td>
      <?php echo $val2; ?>
    </td>
    <?php
  }
  ?>
  </tr>
  <?php
}?>
</table>
<a href='./entry.php'>登録する</a>
<?php
  // フッターHTML呼び出し
  require_once './tpl/footer.html';
?>