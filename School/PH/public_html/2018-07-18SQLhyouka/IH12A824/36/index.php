<?php
  // var_dump($_GET['del']);
  // var_dump($_FILES);
  // コンフィグ呼び出し
  require_once './../../config.php';
  $link=mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
  mysqli_set_charset($link,'utf8');
  if(!empty($_GET['del'])){
    $sql="UPDATE t_post SET del_flg = '1' WHERE id = ".$_GET['del'];
    mysqli_query($link,$sql);
  }
  if(empty($_POST['category_search'])){
    $sql="select * from t_post";
  }elseif($_POST['category_search']=='映画'){
    $sql="select * from t_post where category = '映画'";
  }elseif($_POST['category_search']=='本'){
    $sql="select * from t_post where category = '本'";
  }elseif($_POST['category_search']=='音楽'){
    $sql="select * from t_post where category = '音楽'";
  }
  $result=mysqli_query($link,$sql);
  // var_dump($t_post);
  // DB中身取り出し
  $max_id=0;
  if($result){
  for($i=1;$row=mysqli_fetch_assoc($result);$i++){
      // $t_post[$row['id']]=$row;
      if($row['del_flg']==0){
      $t_post[$row['id']]['id']=$row['id'];
      $t_post[$row['id']]['name']=$row['name'];
      $t_post[$row['id']]['msg']=str_replace("\n","<br>",$row['msg']);
      $t_post[$row['id']]['category']=$row['category'];
      $t_post[$row['id']]['reply_id']=$row['reply_id'];
      $t_post[$row['id']]['post_date']=$row['post_date'];
      }
      if($max_id<$row['id']){
        $max_id=$row['id'];
      }
    }
  }
  // echo date('Y-m-d H:i:s');
  if(!empty($_POST['name'])&&!empty($_POST['category'])&&!empty($_POST['msg'])){
    $sql="insert into t_post(id,name,msg,category,reply_id,del_flg,post_date) 
    values(".++$max_id.",'".$_POST['name']."','".$_POST['msg']."','".$_POST['category']."',0,0,".date('YmdHis').")";
    // ,,,
    $t_post[$max_id]['id']=$max_id;
    $t_post[$max_id]['name']=$_POST['name'];
    $t_post[$max_id]['msg']=str_replace("\n","<br>",$_POST['msg']);
    $t_post[$max_id]['category']=$_POST['category'];
    $t_post[$max_id]['reply_id']=0;
    $t_post[$max_id]['del_flg']=0;
    $t_post[$max_id]['post_date']=date('Y-m-d H:i:s');
    if(!empty($_FILES)&&$_FILES['up_file']['type']=='image/jpeg'){
      move_uploaded_file($_FILES['up_file']['tmp_name'],UPLOAD_PATH.$max_id.'.jpg');
    }
    mysqli_query($link,$sql);
  }
  mysqli_close($link);
  // 初期化
  if(empty($t_post)){
    $t_post=array();
    // $t_post[1]['id']='';
    // $t_post[1]['name']='';
    // $t_post[1]['msg']='';
    // $t_post[1]['category']='';
    // $t_post[1]['reply_id']='';
    // $t_post[1]['del_flg']='';
    // $t_post[1]['post_date']='';
  }
  $t_post = array_reverse($t_post);
  // var_dump($t_post);
  // $link=mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
  // mysqli_set_charset($link,'utf8');
  // $sql="select * from sample";
  // $result=mysqli_query($link,$sql);
  // $msg='';
  // $sql_data=array(['id'=>'','name'=>'','age'=>'']);
  // for($i=0;$row=mysqli_fetch_assoc($result);$i++){
  //   $sql_data[$i]['id']=$row['id'];
  //   $sql_data[$i]['name']=$row['name'];
  //   $sql_data[$i]['age']=$row['age'];
  // }
  // mysqli_close($link);
  // var_dump($sql_data);
  // テンプレート呼び出し
  require_once './tpl/index.php';
?>