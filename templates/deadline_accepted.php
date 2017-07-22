<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>deaLine_accepted</title>

    <!-- Bootstrap -->
    <link href="../static/css/bootstrap.min.css" rel="stylesheet">
    <link href="../static/css/bootstrap-add.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


  <body>

      <nav class="navbar navbar-default col-xs-12" style="top:0;">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Navigater(締め切り予約)</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!-- 共通で"/navbar"に送り、かく<li>のnameで振り分け -->
            <form class="" action="/navbar" method="post">
              <ul class="nav navbar-nav">
                <li class="active"><a type="submit" name="calendar">カレンダー<span class="sr-only">(current)</span></a></li>
                <li><a type="submit" name="priority">優先順</a></li>
                <li><a type="submit" name="important">重要度</a></li>
              </ul>
            </form>

            <!-- 予定を検索。検索内容（予定タイトル、日時）を返す。 -->
            <form class="navbar-form navbar-left" action="/search" method="post">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">検索</button>
            </form>


            <ul class="nav navbar-nav navbar-right">
              <form action="/navbar" method="post">
                <li><a type="submit" name="mypage">マイページ</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">プロファイル<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li>ID:{{}}</li>
                    <li>MailAdress:{{}}</li>
                    <li role="separator" class="divider"></li>

                    <li><a type="submit" name="mypage">マイページ</a></li>
                    <li><a type="submit" name="set_up">設定</a></li>
                    <li><a type="submit" name="change_user">ユーザ変更</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a type="submit" name="logout">ログアウト</a></li>
              </form>

                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
      </nav>


    <div class="container-fluid">
      <div class="jumbotron">
        <h1>Accepted!!</h1>
        <p><br><div class="lead">
          <h4>以下の内容で締め切りを登録しました。</h4>
        </div>
        タイトル：{{}}
        <br>締め切り日時：{{}}
        <br>内容（メモ）：{{}} <!--もっと小さい文字でもいいかも、できればだけど。半透明にするとか。-->
        </p>

        <br>

        <p><div class="lead">
          <h4>以下の日時で通知します。</h4>
        </div>
        通知日時：{{}},{{}} <!--/*何回も通知する可能性*/ -->
        <br>通知連絡先：{{}},{{}} <!--複数人に送信する可能性も考えて。メールアドレスを表示-->
        <br>
        </p>

      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
          <div class="col-xs-6" style="padding-right:0;">
            <form action="/mypage" method="post">
              <button href="#" class="btn btn-default text-center" role="button" style="width:100%;">マイページに戻る</button>
            </form>
          </div>

          <div class="col-xs-6" style="padding-left:0;">
            <form action="/deadline" method="post">
              <button href="#" class="btn btn-default text-center" role="button" style="width:100%;">締め切りをさらに追加</button>
            </form>
          </div>
        </div>
      </div>







        <!-- <div class="container">
          <div class="row">
            <form action="/deadline" method="post" action="/deadline">
              <button type="submit"  class="btn btn-default col-xs-offset-1 col-xs-10 col-xs-offset-1" role="button" name="mypage_to_deadline" style="position:fixed; bottom:0;">締め切り予約</button>
            </form>
          </div>
        </div> -->



      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="../static/js/bootstrap.min.js"></script>


  </body>
</html>
