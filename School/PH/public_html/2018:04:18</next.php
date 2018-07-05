<!DOCTYPE html>
<html lang="jp" dir="ltr">
 <head>
  <meta charset="utf-8">
  <title>php</title>
 </head>
 <body>
  <?php
  if(!empty($_GET["text"])){
   if(!empty($_GET["text2"])){
     if($_GET["text"] <= $_GET["text2"]){
      echo $_GET["text2"]."のほうが大きい";
     }else{
      echo $_GET["text"]."のほうが大きい";
     }
  }
 }
  ?>
 </body>
</html>
