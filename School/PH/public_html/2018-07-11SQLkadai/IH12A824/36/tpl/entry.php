<?php
// ヘッダーHTML呼び出し
require_once './tpl/header.html';
?>
<form action="./entry.php">
名前
<input type="text" name="name">
<br>
年齢
<input type="text" name="age">
<br>
<input type="submit" name="enter" value="確定">
</form>
<?php
// フッターHTML呼び出し
require_once './tpl/footer.html';
?>