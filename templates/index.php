<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>index</title>

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
<br><br><br>

    <div class="container">


      <div class="jumbotron text-center center-block" style="max-width:1000px">
        <div class="row">
          <h2>
            Welcome to Deadline Management
          </h2>
          <br>
          <p>
            このページでは締切の管理と通知の設定ができます
          </p>
        </div>
      </div>
    </div>



      <div class="center-block
       text-center" style="max-width:1000px">

        <!-- <h1>ようこそ！</h1> -->
        <br><br>


      <div class="btn-group btn-group-justified" role="group">
        <form class="form-inline text-center" action="login_error.php" method="post">

          <div class="form-group">
            <label class="sr-only" for="uName">ユーザー名</label>
            <input type="text" name='name' class="form-control" placeholder="ユーザー名" id="uName" size="16">
          </div>

          <div class="form-group">
            <label class="sr-only" for="pass">パスワード</label>
            <input type="password" name='password' class="form-control" placeholder="パスワード" id="pass" size="16">
          </div>

          <button type="submit"  class="btn btn-success" role="button">ログイン</button>

        </form>
      </div>

      <br><br>

      <div class="btn-group btn-group-justified" role="group">
        <form class="form-inline text-right" action="regist.php">
          <button type="submit" class="btn btn-default btn-group-justified" role="button" onclick="sample.html">新規登録</button>
        </form>

      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/static/js/bootstrap.min.js"></script>
  </body>
</html>
