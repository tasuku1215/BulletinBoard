<?php
  session_start();
  $SESSION = array();
  if(isset($_COOKIE['SESSION_msg()'])){
    setcookie(session_name(), '',time() -42000);
  }
  session_destroy();
 ?>

<a href='a.php'>セット</a>
<a href="b.php">取得</a>
<a href="c.php">削除</a>
