<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>regist</title>

    <!-- Bootstrap -->
    <link href="../static/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <br>
      <div class="jumbotron center-block
       text-center">
        <h2>登録情報を<br>入力してください</h2>
      </div>
      <br><br>

      <form class="" action="/regist_check" method="post">
        <div class="input-group form-inline text-center">
          <span class="input-group-addon" id="uID">@</span>
          <input type="text" class="form-control" placeholder="ユーザ名" aria-describedby="uID" name="regist_uName">
        </div>

        <br>

        <div class="input-group">
          <input type="text" class="form-control" placeholder="ユーザメール" aria-describedby="uMail" name="regist_uMail">
          <span class="input-group-addon" id="uMail">@gmail.com</span>
        </div>

        <br>

        <div class="input-group">
          <span class="input-group-addon" id="pass">PASS:</span>
          <input type="text" class="form-control" placeholder="パスワード" aria-describedby="pass" name="">
        </div>

        <br><br>

        <button type="submit"  class="btn btn-default btn-group-justified" role="button">確認</button>




    </div>
      </form>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../static/js/bootstrap.min.js"></script>
  </body>
</html>
