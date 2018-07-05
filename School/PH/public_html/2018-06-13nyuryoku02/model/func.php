<?php
function h($str){
  return htmlspecialchars($str,ENT_QUOTES);
}
function session_delete(){
  $_SESSION = array();
  if(isset($_COOKIE[SESSION_name()])){
    setcookie(session_name(),'',time()-42000);
  }
  session_destroy();
}
?>