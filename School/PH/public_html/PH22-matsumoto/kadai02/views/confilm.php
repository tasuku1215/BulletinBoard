
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>確認画面</title>
  </head>
  <style>
  form{
    width:800px;
  }
  </style>
  <body style="padding: 50px;">
    <h1>確認画面</h1>
    <p>入力画面　-> <span class="badge badge-pill badge-primary">確認画面</span>　-> 完了画面</p>
    <p>以下の内容でよろしければ送信ボタンを押してください。</p>
    <form action="#" method="POST">

      <table class="table table-bordered">
        <tr>
          <th scope="col">氏名</th>
          <td width="70%"><?php echo $_SESSION['name'];?></td>
        </tr>
        <tr>
          <th scope="col">TEL</th>
          <td width="70%"><?php echo $_SESSION['tel'];?></td>
        </tr>
        <tr>
        <th scope="col">メールアドレス</th>
        <td width="70%"><?php echo $_SESSION['mail'];?></td>
        </tr>
      </table>
      <input type="submit" name="thanks" style="float:left;margin:10px;" class="btn btn-outline-dark" value="送信">
    </form>
    <form action="#" method="POST">
      <input type="submit" name="back" style="float:left;margin:10px;" class="btn btn-outline-dark" value="戻る">
      <input type="hidden" name="name" value="<?php echo h($_SESSION['name']);?>">
      <input type="hidden" name="tel" value="<?php echo h($_SESSION['tel']);?>">
      <input type="hidden" name="mail" value="<?php echo h($_SESSION['mail']);?>">
    </form>
  </body>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</html>
