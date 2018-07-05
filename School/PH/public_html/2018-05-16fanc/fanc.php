<?php
function sample02 ($nam1,$nam2){
    if($nam1<=$nam2){
        $nam1=$nam2;
    }
    return $nam1;
}

function sample03 ($nam1,$nam2){
    if($nam1>=$nam2){
        $nam1=$nam2;
    }
    return $nam1;
}

function sample04 ($nam1,$nam2,$nam3){
    if($nam2 <= $nam1&&$nam1 <= $nam3 || $nam2 <= $nam1&&$nam1 <= $nam3){
        return true;
    }
    return FALSE;
}

function sample05 ($nam1,$nam2,$nam3){
  sample04(strlen($nam1),$nam2,$nam3);
}
?>
