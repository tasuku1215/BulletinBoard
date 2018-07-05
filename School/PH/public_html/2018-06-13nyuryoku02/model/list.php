<?php
$csv='./csv/data.csv';
// CSVの中身を読み出して2次元配列に入れる
$fp=fopen($csv,'r');
if (!$fp)
{
  $error[]= 'ユーザーデータファイルは読み込み可能状態ではありません';
}
if(flock($fp,LOCK_EX))
{
  $usr_list=array();
  while($usr=fgets($fp))
  {
    $usr_list[]=explode(',',$usr);
  }
  flock($fp,LOCK_UN);
}
else
{
  $error[]= 'ユーザーデータファイルは読み込み可能状態ではありません';
}
fclose($fp);
// もし入力情報が入ったセッションがあればCSVに書き込む
if(!empty($_SESSION))
{
  $fp=fopen($csv,'a');
  if (!$fp)
  {
    $error[]= 'ユーザーデータファイルは読み込み可能状態ではありません';
  }
  if(flock($fp,LOCK_EX))
  {
    // ユーザーデータファイルにIDをつけるアルゴリズムはMAX＋１
    if(isset($usr_list[0]))
    {
      $max=0;
      for($i=0;$i<count($usr_list);$i++)
      {
        if($max<$usr_list[$i][0])
        {
          $max=$usr_list[$i][0];
        }
      }
      $max+=1;
      $str=$max.','.$_SESSION['name'].','.$_SESSION['tel'].','.$_SESSION['mail']."\n";
      fwrite($fp,$str);
      $str=explode(',',$str);
    }
    else
    {
      $str='1,'.$_SESSION['name'].','.$_SESSION['tel'].','.$_SESSION['mail']."\n";
      fwrite($fp,$str);
      $str=explode(',',$str);
    }
    flock($fp,LOCK_UN);
    // 書き込みが終わったあとセッションを消す
    session_delete();
  }
  else
  {
    $error[]= 'ユーザーデータファイルは使用されています';
  }
  fclose($fp);
}

?>
