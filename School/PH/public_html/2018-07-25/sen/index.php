<?php
	//外部ファイルからデータを読み込み
	$dataFileName="data.csv";
	$dataFile_check=is_readable($dataFileName);	//読み込み可能か調べる　可能であればtrueが返る
	//echo $dataFile_check;
    $check_flg=false;
    $msg="";
    if ( !$dataFile_check ){
        $check_flg=true;
        $msg=$msg."CSVファイルが見つかりません。<br>";
    }
    if ($_SERVER['REQUEST_METHOD'] == "GET"){
        if(empty($_GET['name'])){
            $check_flg=true;
            $msg=$msg."名前が入力されていません。<br>";
            $getname="";
    }else{
        $getname=$_GET['name'];
    }
    if(empty($_GET['kome'])){
         $check_flg=true;
         $msg=$msg."コメントが入力されていません。<br>";
         $getkome="";
    }else{
        $getkome=$_GET['kome'];
    }
  }
	//

	//もし投稿があったら読み込んだデータに読み込んだデータを追加して書き込み
	if($_SERVER['REQUEST_METHOD'] == "GET" && !empty($_GET['mode'])  && !empty($_GET['name']) && !empty($_GET['kome'])){//GETで投稿されて尚且つ中身が空じゃない場合
		//一番最新の情報を一番初めに表示させる
		// array_unshift($getname,$_GET['name']);
		// array_unshift($getkome,$_GET['kome']);
        $getmode=$_GET['mode'];
        echo $getmode;
    if ($getmode=="w" && !$check_flg){


  		$wval=date("Y-m-d H:i:s").",".$getname.",". $getkome;
  		echo $wval."<br>";
  		//ファイルの書き込み
  		$fp = fopen($dataFileName,"a");
  		fwrite($fp,$wval."\r\n");
  		fclose($fp);
        $getname=null;
        $getkome=null;
        $getmode=="r";
        $check_flg=true;
    }
	}
	$gets=file($dataFileName,FILE_IGNORE_NEW_LINES);
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>kadai04</title>

	</head>
	<body>
    <?php
      if ($_SERVER['REQUEST_METHOD'] == "GET" && !$check_flg ){
        //if ($getmode=="r" && !$check_flg){
          echo "      下記の内容で登録します。<br>\r\n";
          echo "      よろしいですか？<br><br>\r\n";
          echo "      名前：".$getname."<br>\r\n";
          echo "      コメント：".$getkome."<br>\r\n";
          echo "      <form name='form' method='get' action='index.php'> \r\n ";
          echo "        <input type='hidden' name='mode' value='w'>\r\n";
          echo "        <input type='hidden' name='name' value=". $getname .">\r\n";
          echo "        <input type='hidden' name='kome' value=". $getkome .">\r\n";
          echo "        <input type='submit' value='投稿'>\r\n";

          echo "      </form>\r\n";
        //}
      }else{
        if( empty($_GET['name']) && empty($_GET['kome']) ){
          echo "      <form name='form' method='get' action='index.php'> \r\n ";
          echo "        <input type='hidden' name='mode' value='r'>\r\n";
          echo "        <input type='text' name='name' value=''>\r\n";
          echo "        <input type='text' name='kome' value=''>\r\n";
          echo "        <input type='submit' value='投稿'>\r\n";

          echo "      </form>\r\n";
        }else{
          echo $msg;
          echo "      <form name='form' method='get' action='index.php'> \r\n ";
          echo "        <input type='hidden' name='mode' value='r'>\r\n";
          echo "        <input type='text' name='name' value=". $getname .">\r\n";
          echo "        <input type='text' name='kome' value=". $getkome .">\r\n";
          echo "        <input type='submit' value='投稿'>\r\n";

          echo "      </form>\r\n";
        }

      }

     ?>


    <hr>

		<h2>投稿一覧 <?php echo count($gets);?>件</h2>
		<ul>

		<?php
		//htmlの中で投稿を表示
		if(count($gets)) ://中身があったら ?>
		<?php
			foreach (	$gets as $val){
				echo "<li>";
				echo $val."<br>";
				echo "<br></li>";
			}?>

		<?php else :  //中身がなかったら?>
			<li>まだ投稿はありません</li>
		<?php endif;?>
		</ul>
	</body>

</html>
