<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Index</title>

    <!-- Bootstrap -->
    <link href="../static/css/bootstrap.min.css" rel="stylesheet">
    <link href="../static/css/bootstrap.style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand active" href="/">Welcome to DeadLine "{{ session.get('uID') }}"さん</a>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
      <ul class="nav navbar-nav navbar-right">
        <li><a href="post_content"><span class="glyphicon glyphicon-list-alt"></span> 自分の予定</a></li>
        <li><a href="post_content"><span class="glyphicon glyphicon-pencil"></span> 記事作成</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> ユーザ情報 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="mypage">自分の予定</a></li>
            <li><a href="calendar">カレンダー</a></li>
            <li><a href="change_user">ユーザ変更</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/logout">ログアウト</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <div class="container">
      <br>
      <div class="jumbotron center-block
       text-center">

        <h1>Welcome to DeadLine!</h1>
        <br><br>


      <div class="btn-group btn-group-justified" role="group">
        <form class="form-inline text-center" action="/check" method="post">

          <div class="form-group">
            <label class="sr-only" for="uMail">メールアドレス</label>
            <input type="text" class="form-control" placeholder="メールアドレス＠gmail.com" id="uMail" size="16">
          </div>

          <div class="form-group">
            <label class="sr-only" for="pass">パスワード</label>
            <input type="text" class="form-control" placeholder="パスワード" id="pass" size="16">
          </div>

          <button type="submit"  class="btn btn-default" role="button">ログイン</button>

        </form>
      </div>

      <br>

      <div class="btn-group btn-group-justified" role="group">
        <form class="form-inline text-right" action="/regist" method="post">
          <button type="submit" class="btn btn-default btn-group-justified" role="button" onclick="sample.html">新規登録</button>
        </form>

      </div>
    </div>
  </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../static/js/bootstrap.min.js"></script>
  </body>
</html>
