<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>login_error</title>

    <!-- Bootstrap -->
    <link href="bootstrap/static/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/static/css/bootstrap.style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<?php
if !((!isset($_POST['name']) or !isset($_POST['password']))) {
  $name = $_POST['name'];
  $url = "http://133.2.176.112/mypage.php?name=$name";
  header('Location:'.$url);
  exit();
}
?>

<br><br><br>

  <div class="container-fluid" style="max-width:1000px">
    <div class="text-center">
      <div class="jumbotron">
        <h2>ログインエラー</h2>
      </div>
      <h4>入力情報に不足か誤りがあったため、ログインできませんでした。<br>情報が正しいか確認して、ログインしなおしてください。</h4>
    </div>

    <br>

      <div class="row">
          <div class="col-xs-12" style="padding-right:0;">
            <form action="index.php" method="post">
              <button type="submit" class="btn btn-success text-center" role="button" style="width:100%; height: 70px; font-size: 100%;">ログイン画面へ</button>
            </form>
          </div>

        </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/static/js/bootstrap.min.js"></script>
  </body>
</html>
