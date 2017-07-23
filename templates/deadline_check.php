<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>deadline_check</title>

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

    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand active" href="/mypage">Welcome to DeadLine "{{ request.cookies.get('name') }}"さん</a>

    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="mypage"><span class="glyphicon glyphicon-list-alt"></span>マイページ</a></li>
        <li><a href="/deadline"><span class="glyphicon glyphicon-pencil"></span> 締切追加</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> アカウント <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/mypage">マイページ</a></li>
            <li><a href="calendar">カレンダー</a></li>
            <!-- <li><a href="change_user">ユーザ変更</a></li> -->
            <li role="separator" class="divider"></li>
            <li><a href="/logout">ログアウト</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>






    <div class="container-fluid text-center" style="max-width: 1000px;">
      <div class="jumbotron">
        <h1>Please Check!!</h1>
      </div>
        <p><br><div class="lead">
          <h4>以下の内容で締め切りを登録しますか？</h4>
        </div>
        タイトル：{{ title }}
        <br>締め切り日時：{{ deadline }}
        <br>内容（メモ）：{{ memo }}
        </p>

        <br>

        <p><div class="lead">
          <h4>以下の日時で通知します。</h4>
        </div>
        通知日時：
        <br>
        <!-- テスト処理 -->
        {% if alert1 %}
          {{ alert1 }}
        {% endif %}
        <br>

        {% if alert2 %}
          {{ alert2 }}
        {% endif %}
        <br>

        {% if alert3 %}
          {{ alert3 }}
        {% endif %}
        <br>

        {% if alert4 %}
          {{ alert4 }}
        {% endif %}
        <br>

        {% if alert5 %}
          {{ alert5 }}
        {% endif %}

        <!-- {% for value in alert %}
          {{ value }},
        {% endfor %} -->
        <!--/*何回も通知する可能性*/ -->
        </p>

      </div>

      <br><br>

    <div class="container-fluid" style="max-width: 1000px;">
      <div class="row">
          <div class="col-xs-6" style="padding-right:0;">
            <form action="/deadline">
              <button href="#" class="btn btn-warning text-center" role="button" style="width:100%; height: 70px; font-size: 100%;">修正</button>
            </form>
          </div>

          <div class="col-xs-6" style="padding-left:0;">
            <form action="/deadline_complete" method="get">
              <input type="hidden" name="title" value="{% if title %}{{ title }}{% endif %}">
              <input type="hidden" name="deadline" value="{% if deadline %}{{ deadline }}{% endif %}">
              <input type="hidden" name="memo" value="{% if memo %}{{ memo }}{% endif %}">
              <button href="#" class="btn btn-success text-center" role="button" style="width:100%; height: 70px; font-size: 100%;">登録</button>
            </form>
          </div>
        </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/static/js/bootstrap.min.js"></script>
  </body>
</html>
