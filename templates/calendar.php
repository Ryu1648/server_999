<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>calender</title>

    <link href="bootstrap/static/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/static/css/bootstrap.style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/static/js/bootstrap.min.js"></script>

  </head>
  <body style="background:#fff">

    <br><br><br>
    <div class="container" style="max-width: 800px;">
      <div class="row">
        <div class="jumbotron" style="background:#CCC">
          <h1>現在作成中です</h1>
        </div>
      </div>
    </div>

    <div class="container" style="max-width: 800px;">
      <div class="row">
        <div class="col-xs-12" style="padding:0;">
          <form action="mypage.php" method="get">
            <button type="submit" class="btn btn-warning btn-lg btn-block" style="font-size:25px;height:70px;border-radius:0;">
              マイページへ</button>
          </form>
        </div>
      </div>
    </div>

  </body>
</html>
