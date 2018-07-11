<?php
session_start();
$_SESSION['msg'] = '値のセットに成功しました！';
 ?>
 <a href='a.php'>セット</a>
 <a href="b.php">取得</a>
 <a href="c.php">削除</a>
