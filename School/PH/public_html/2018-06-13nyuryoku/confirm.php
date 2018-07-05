<?php
// ファンクション呼び出し
require_once './func.php';
// セッションスタート
session_start();
// HTMLテンプレート呼び出し
require_once './html.html';
?>
<!-- テーブルにユーザーが入力したセッション情報を表示する -->
    <table>
      <tr>
        <th>
          名前
        </th>
        <td>
          <?php echo $_SESSION['name']; ?>
        </td>
      </tr>
      <tr>
        <th>
          電話番号
        </th>
        <td>
          <?php echo $_SESSION['tel']; ?>
        </td>
      </tr>
      <tr>
        <th>
          メール
        </th>
        <td>
          <?php echo $_SESSION['mail']; ?>
        </td>
      </tr>
      <tr>
        <td>
          <form action="entry.php" method="get">
            <input type="submit" name='re' value="戻る">
          </form>
        </td>
        <td>
          <form action="list.php" method="get">
            <input type="submit" name='enter' value="登録">
          </form>
        </td>
      </tr>
    </table>
  </body>
</html>