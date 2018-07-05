<?php
//コントローラー
session_start();
// ファンクション呼び出し
require_once './model/func.php';
// ヘッダーHTML呼び出し
require_once './view/header.html';
if(!empty($_GET) && !empty($_SESSION))
{
  if($_GET['enter']=='登録')
  {
      // ユーザーリストモデル呼び出し
      require_once './model/list.php';
      // ユーザーリストビュー呼び出し
      require_once './view/list.php';
  }
  else
  {
    if($_GET['enter']=='確認')
    {
      // ユーザー確認ビュー呼び出し
      require_once './view/confirm.php';
    }
    else
    {
      if($_GET['enter']=='戻る')
      {
        // ユーザー登録モデル呼び出し
        require_once './model/entry.php';
        // ユーザー登録ビュー呼び出し
        require_once './view/entry.php';
      }
    }
  }
}
else
{
  // ユーザー登録モデル呼び出し
  require_once './model/entry.php';
  // ユーザー登録ビュー呼び出し
  require_once './view/entry.php';
}
  // フッターHTML呼び出し
  require_once './view/footer.html';
?>