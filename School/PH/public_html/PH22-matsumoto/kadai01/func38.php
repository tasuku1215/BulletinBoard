<?php
//Lv.1 四則演算
function kadai38_1($num1,$num2){

  //文字列確認
  //ctype_digit()
  if(!is_numeric($num1) || !is_numeric($num2)){
    return false;
  }

  $array = array();
  $array[] = $num1 + $num2;
  $array[] = $num1 - $num2;
  $array[] = $num1 * $num2;
  if($num2 == 0){
    $array[] = 'エラー';
  }else{
    $array[] = $num1 / $num2;
  }
  //配列を返す
  return $array;
}

//Lv.2 MAX値
function kadai38_2($array){
  foreach($array as $data){
    if(!is_numeric($data)){
      return false;
    }
  }
  //変数maxの初期化
  $max = 0;

  foreach($array as $data){
    if($max < $data){
      $max = $data;
    }
  }

  //最大値を返す
  return $max;
}

//Lv.3 配列のソート
function kadai38_3($array){
  
  foreach($array as $data){
    if(!is_numeric($data)){
      return false;
    }
  }

//配列をループ
for($i = 0; $i < count($array); $i++)
{
  for($j = 0; $j < count($array)-1; $j++){
    if($array[$j] > $array[$j+1])
    {
      //値を入れ替える処理
      $temp = $array[$j];
      $array[$j] = $array[$j+1];
      $array[$j+1] = $temp;
    }
  }
}
//配列を返す
return $array;
}

//オプション - 二次元配列のソート
function kadai38_4($user_list,$sort){
//配列をループ
 for($i = 0; $i < count($user_list)-1 ; $i++){
   for($j = count($user_list)-1 ; $j > $i ; $j--){
     if($user_list[$j-1][$sort] > $user_list[$j][$sort]){
       //値を入れ替える処理
       $temp = $user_list[$j-1];
       $user_list[$j-1] = $user_list[$j];
       $user_list[$j] = $temp;
     }
   }
 }
  //配列を返す
  return $user_list;
}
 ?>
