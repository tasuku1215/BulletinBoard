<?php
$data1=array();
$data2=array();
$data3=array();

$sum = 0;

for($i=0;$i<=3;$i++){
  $data1[]=$_GET["t".$i];
  $data2[]=$_GET["y".$i];
  $data3[]=$_GET["n".$i];
}

$array=array(
  $data1,
  $data2,
  $data3,
);

 ?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border="1">
      <tr>
        <th></th>
        <th>PH</th>
        <th>DB</th>
        <th>CS</th>
        <th>合計</th>
        <th>平均</th>
      </tr>

      <?php
      foreach($array as $data){
        echo '<tr>';
        $cnt = count($data) -1;
        foreach($data as $point){
          echo '<td class="redcolor">'.$point.'</td>';
          $sum += (int)$point;
        }

        echo '<td>'.$sum.'</td><td class="redcolor">'.$sum / $cnt.'</td></tr>';
        $sum =0;
      }
      ?>
    </table>
  </body>
</html
