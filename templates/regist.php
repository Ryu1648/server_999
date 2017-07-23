<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>regist</title>

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


<br>


    <div class="container" style="max-width: 800px;">
      <div class="jumbotron center-block
       text-center">
        <h2>登録情報を<br>入力してください</h2>
      </div>
      <br><br>


    </div>


    <div class="container" style="max-width:800px">
      <form action="regist_error.php" method="post">
        <div class="input-group input-group-lg">
          <span class="input-group-addon" id="sizing-addon1">1</span>
          <input type="text" name="name" class="form-control" placeholder="名前" aria-describedby="sizing-addon1">
        </div>
        <br>
        <div class="input-group input-group-lg">
          <span class="input-group-addon" id="sizing-addon1">2</span>
          <input type="password" name="password" class="form-control" placeholder="パスワード" aria-describedby="sizing-addon1">
        </div>
        <br>
        <div class="input-group input-group-lg">
          <span class="input-group-addon" id="sizing-addon1">3</span>
          <input type="email" name="email" class="form-control" placeholder="メールアドレス" aria-describedby="sizing-addon1">
        </div>
        <br><br>
        <div class="row">
          <!-- <div class="col-xs-6"> -->
            <button type="submit" class="btn btn-warning btn-lg btn-block" style="font-size:25px;height:70px;border-radius:0;">
              登録する</button>
          <!-- </div> -->
        </div>
      </form>

      <form action="index.php">
        <div class="row">
          <!-- <div class="col-xs-6"> -->
            <button type="submit" class="btn btn-success btn-lg btn-block" style="font-size:25px;height:70px;border-radius:0;">
              戻る</button>
          <!-- </div> -->
        </div>
      </form>
    </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/static/js/bootstrap.min.js"></script>
  </body>
</html>
