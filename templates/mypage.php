<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>mypage</title>

    <!-- Bootstrap -->
    <link href="../static/css/bootstrap.min.css" rel="stylesheet">
    <link href="../static/css/bootstrap.style.css" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../static/js/bootstrap.min.js"></script>


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
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand active" href="/mypage">Welcome to DeadLine "{% if uID %}{{ session.get('uID') }}{% endif %}"さん</a>

    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="post_content active"><span class="glyphicon glyphicon-list-alt"></span> 自分の予定</a></li>
        <li><a href="post_content"><span class="glyphicon glyphicon-pencil"></span> 締め切り追加</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> アカウント <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="mypage">自分の予定</a></li>
            <li><a href="calendar">カレンダー</a></li>
            <li><a href="change_user">ユーザ変更</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/logout">ログアウト</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>



  <div class="container-fluid">
    <div class="jumbotron" style="background-color:blue; color: white;">
      <h2>Here is {{ session.get('uID') }} page</h2>
    </div>
  </div>

  <div class="container-fluid">
    <section>
      <h2>最新の締め切り　{{ latest_dealine_title }}　<br>
      締め切りまで</h2>
    </section>
    </div>

    <br><br>


  <div class="container-fluid">
    <div class="panel-group" id="ac1">


    <!-- データを受け取る部分 -->
    {% for value in mypage_deadline %}
      <div class="panel panel-warning">
        <div class="panel-heading">
          <h3 class="panel-title">
            <!--  -->
            <!-- hrefでの受けとり -->
            <a data-toggle="collapse" data-parent="#ac1" href="#'{{ value[0] }}'">
              <!-- 時間 -->
              {{ value[3] }},
              <!-- タイトル -->
              {{ value[2] }}
            </a>
          </h3>
        </div>
        <div id='{{ value[0] }}' class="panel-collapse collapse">
          <div class="panel-body">
            <!-- <h4>優先順位：{{ value[0] }}</h4> -->
            <!-- メモ -->
            {{ value[4] }}
          </div>
        </div>
      </div>
          {% endfor %}
  </div>
</div>




      <div class="container-fluid">
        <div class="row">
          <form action="/deadline" method="post">
            <button type="submit"  class="btn btn-default col-xs-offset-1 col-xs-10 col-xs-offset-1" role="button" name="mypage_to_deadline" style="position:fixed; bottom:0;">締め切り追加</button>
          </form>
        </div>
      </div>




  </body>
</html>
