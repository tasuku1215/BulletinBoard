<?php
/**
* func36_01
* 引数$nam1と$nam2に入っている数値を$kaiに入っている演算子で計算する
* @param $nam1 計算する1つ目の数値
* @param $nam2 計算する2つ目の数値
* @param $kai 計算方法の演算子を文字列で受け取る
* @return 計算結果を返す
*/
function func36_01($nam1,$nam2,$kei){
  switch($kei){
    case "+":
    return $nam1+$nam2;
    break;
    case "-":
    return $nam1-$nam2;
    break;
    case "*":
    return $nam1*$nam2;
    break;
    case "/":
    // もし第二引数が０だった場合FALSEを返す
    if($nam2==0){
      return false;
    }
    else{
      return $nam1/$nam2;
    }
    break;
  }
}
/**
* func36_02
* 引数$sqlに入っているSQL文をその他の引数に格納されているDB情報に接続して実行する
* @param $sql 実行したいSQL分を格納する
* @param $dbHost データベースホスト情報を格納する
* @param $dbUser データベースユーザーネームを格納する
* @param $dbPass データベースパスワードを格納する
* @param $dbName データベース名を格納する
*/
function func36_02($sql,$dbHost,$dbUser,$dbPass,$dbName){
  $link=mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
  mysqli_set_charset($link,'utf8');
  mysqli_query($link,$sql);
  mysqli_close($link);
}
// var_dump(func36_01(1,0,"/"));
// func36_02("INSERT INTO test(name) VALUE('naruto')","localhost","root","root","ph22");
?>