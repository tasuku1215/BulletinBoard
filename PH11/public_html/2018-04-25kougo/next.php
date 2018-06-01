<!DOCTYPE html>
<html lang="jp" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>php</title>
  <link href="style.css" rel="stylesheet" type="text/css">
  <!-- <style>
  .color{
  width:100px;
  height:100px;
  background-color:#000;
}
.color2{
  width:100px;
  height:100px;
  background-color:#ddd;
}
  </style> -->
</head>
<body>
  <table class>
    <?php
    for($i=1;$i<=$_GET['height'];$i++){
      echo '<tr>';
      for($j=1;$j<=$_GET['width'];$j++){
        if($i%2==1 xor $j%2==0){
          $color= 'color';
        }else{
          $color= 'color2';
        }
        echo '<td class="'.$color.'"></td>';
      }
      echo '</tr>';
    }
    ?>
  </table>
</body>
</html>
