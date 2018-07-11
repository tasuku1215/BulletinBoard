<?php
function sample02($num1,$num2){
  $ans = max($num1,$num2);
  return $ans;
}

function sample03($num1,$num2){
  $ans = min($num1,$num2);
  return $ans;
}

function sample04($check,$num1,$num2){
  if(sample03($num1,$num2) <= $check && $check <= sample02($num1,$num2)){
    return 'TRUE!';
  }
  return 'NOT TRUE!';
}

function sample05($check,$num1,$num2){
  $length = strlen($check);
  return sample04($length,$num1,$num2);
}
 ?>
