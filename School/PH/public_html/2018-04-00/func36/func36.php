<?php
// 課題１
// 関数（数値１、数値２）四則演算
function kadai36_1($nam1,$nam2){
  // 配列を作る
  $array=array();
  // 足し算の結果を配列０番地に入れる
  $array[0]=$nam1+$nam2;
  // 引き算
  $array[1]=$nam1-$nam2;
  // 掛け算
  $array[2]=$nam1*$nam2;
  // 二番目の数値がゼロの場合「エラー」を配列に入れる
  if($nam2){
    $array[3]=$nam1/$nam2;
  }else{
    $array[3]='エラー';
  }
  // 作成した配列を返す
  return $array;
}

// 課題２
// 関数（配列）最大値取得
function kadai36_2($array){
  // 変数宣言
  $i=0;
  // 配列の中身をループで取り出す
  foreach($array as $val){
    // 取り出した値が数値以外ならFALSEを返す
    if(!is_numeric($val)){
      return false;
    }
    // より大きい数字を保存
    if($i<$val){
      $i=$val;
    }
  }
  // 保存した値を返す
  return $i;
}

// 課題３
// 関数（１次元配列）バブルソート
function kadai36_3($array){
  // 配列の中身をループで取り出す
  for($j=0;$j<count($array);$j++)
  {
    // 取り出した値が数値以外ならFALSEを返す
    if(!is_numeric($array[$j]))
    {
      return false;
    }
    // 取り出した値をループでバブルソートする
    for($i=0;$i<count($array)-1-$j;$i++)
    {
      if($array[$i]>$array[$i+1])
      {
        $tmp=$array[$i];
        $array[$i]=$array[$i+1];
        $array[$i+1]=$tmp;
      }
    }
  }
  // ソートした値を返す
  return $array;
  // クイックソート
  // $nam=count($array);
  // $l=1;
  // $h=$nam;
  // $p=$array[0];
  // $i=0;
  // $j=0;
  // $f=true;
  // while($f){
  //   if($p>$array[$h-$i]){
  //     $p=$array[$h-$i];
  //     $array[$h-$i]=$array[0]
  //   }
  //   if($p>$array[$l+$i]){

  //   }
  //   $i++;
  // }
}

// 課題４
// 関数（２次元配列、配列番号）二次元配列の指定列をバブルソート
function kadai36_4($array,$nam){
  // ２次元配列から１次元ループで取り出す
  for($j=0;$j<count($array);$j++)
  {
    // 取り出した値が数値以外ならFALSEを返す
    if(!is_numeric($array[$j][$nam]))
    {
      return false;
    }
    // 取り出した配列をバブルソート
    for($i=0;$i<count($array)-1-$j;$i++)
    {
      if($array[$i][$nam]>$array[$i+1][$nam])
      {
        $tmp=$array[$i];
        $array[$i]=$array[$i+1];
        $array[$i+1]=$tmp;
      }
    }
  }
  // ソートした配列を返す
  return $array;
}
?>