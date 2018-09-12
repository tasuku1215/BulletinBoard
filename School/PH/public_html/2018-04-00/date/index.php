<!doctype>
<html lang="ja">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>welcome</title>
</head>
<body>
  <p>
    Welcome HTML!
    <?php
    print("\n");
    echo "from PHP!!<br><br>";
    echo "学籍番号:70120<br>";
    echo "名前:細見　祐<br>";
    echo "<br>";
    echo 'print(date("Y年m月d日"));<br>';
    print(date("Y年m月d日"));
    echo "<br>";
    print(date("生年月日Y年m月d日D",mktime(0,0,0,12,15,1997)));
    $i=rand(1,50);
    echo "<br>";
    if($i%2==0)
    {
      print("偶数 $i");
    }
    else
    {
      print("奇数 $i");
    }
    ?>
    <form name="frm1">
    名前:<input type="text" name="name"><br>
    <select name="example2">
    <option value="サンプル１" >男性</option>
    <option value="サンプル２" >女性</option>
    <option value="サンプル３" >どちらでもない</option>
    <option value="サンプル４" selected>たすく</option>
    <option value="サンプル５" >未回答</option>
    </select>
    <br>
    <form name="fan">
    <select name="data">
    <option value="1" >げんきでーす！！</option>
    <option value="2" >今日もメグねぇと一緒</option>
    <option value="3" >今日はお買い物！</option>
    <option value="4" selected>あれ？窓割れてね？</option>
    <option value="5" >未回答</option>
    </select>
    <br>
  </p>
</body>
</html>
