<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>入力画面</title>
  </head>
  <style>
  form{
    width:800px;
  }
  </style>
  <body style="padding: 50px;">

    <div class="container">
      <h1>Bootstrap & PHP Input Form</h1>
      <form action="#" method="post">
        <p><span class="badge badge-pill badge-primary">入力画面</span>　-> 確認画面　-> 完了画面</p>
        <div class="form-group">
          <label for="name">氏名</label>
          <input type="text" class="form-control" placeholder="氏名" name="name" value="<?php echo $name ?>">
          <br><span style="color:red"><?php echo $errors['name'];?></span>
        </div>

        <div class="form-group">
        <label for="tel">TEL</label>
        <input type="text" class="form-control" placeholder="電話番号" name="tel" value="<?php echo $tel ?>">
        <br><span style="color:red"><?php echo $errors['tel']; ?></span>
        </div>

        <div class="form-group">
        <label for="mail">メールアドレス</label>
        <input type="text" class="form-control" placeholder="メールアドレス" name="mail" value="<?php echo $mail ?>">
        <br><span style="color:red"><?php echo $errors['mail']; ?></span>
        </div>

        <button type="submit" class="btn btn-outline-dark" name="input" value="input">確認</button>
      </form>
    </div>
  </body>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</html>
