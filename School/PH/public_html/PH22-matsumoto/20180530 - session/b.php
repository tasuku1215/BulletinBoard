<?php
session_start();
$msg = $_SESSION['msg'];
echo $msg;
 ?>

 <a href='a.php'>セット</a>
 <a href="b.php">取得</a>
 <a href="c.php">削除</a>
