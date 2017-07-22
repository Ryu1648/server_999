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
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



  <div class="container-fluid">
    <div class="jumbotron" style="background-color:blue; color: white;">
      <h2>Here is {{uID}} page</h2>
    </div>
  </div>

  <div class="container-fluid">
    <section>
      <h2>最新の締め切り　{{ dealine_title }}　<br>
      締め切りまで</h2>
    </section>
    </div>

    <br><br>


  <div class="container-fluid">
  <div class="panel-group" id="title_deadline">

    {% for value in title_deadline %}
      <div class="panel panel-warning">
        <div class="panel-heading">
          <h3 class="panel-title">
            <a data-toggle="collapse" data-parent="#title_deadline" href="#'{{loop.counter}}'">
              {{ value.deadline_date }}, 
              {{ value.deadline_title }}
            </a>
          </h3>
        </div>
        <div id='{{loop.counter}}' class="panel-collapse collapse in">
          <div class="panel-body">
            <h4>優先順位：'value'</h4>
            {{ value[2] }}
          </div>
        </div>
      </div>
          {% endfor %}
  </div>
<!--    <? php
      // for ($i=0; $i < deadline_ID.length; $i++) {

      // <div class="panel panel-warning">
      //   <div class="panel-heading">
      //     <h3 class="panel-title">
      //       <a data-toggle="collapse" data-parent="#title_deadline" href='{{$i}}'>
      //         {{deadline_ID[$i].deadline_date}}
      //         {{deadline_ID[$i].deadline_title}}
      //       </a>
      //     </h3>
      //   </div>
      // </div>        
      //   <tr>
      //     <th scope="row">{{$i}}</th>
      //     <td>{{deadline_ID[$i].deadline_date}}</td>
      //     <td>{{deadline_ID[$i].deadline_title}}</td>
      //     <td>{{deadline_ID[$i].deadline_memo}}</td>
      //   </tr>
      }
    ?> -->

  
 <!--      <table class="table table-striped table-inverse">
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Deadline</th>
      <th>memo</th>
    </tr>
  </thead>
  <!-- ここに締め切り情報を順次代入 -->
    <!-- <!-- <? php
    for ($i=0; $i < deadline_ID.length; $i++) {
      <tr>
        <th scope="row">{{$i}}</th>
        <td>{{deadline_ID[$i].deadline_date}}</td>
        <td>{{deadline_ID[$i].deadline_title}}</td>
        <td>{{deadline_ID[$i].deadline_memo}}</td>
      </tr>
    }
    ?>
  </tbody>
</table> -->

    </div>



    <script type="text/javascript">
      var countdown = function(due){
        var now = new Date();

        var rest = due.getTime() - now.getTime();
        var sec = Math.floor(rest / 1000 % 60);
        var min = Math.floor(rest / 1000 / 60) % 60;
        var hours = Math.floor(rest / 1000 / 60 / 60) % 24;
        var days = Math.floor(rest / 1000 / 60 / 60 / 24);
        var count = [days, hours, min, sec];

        return count;
      }

      <!--この中に(deadline_date)を入れる！！-->
      var goal = new Date(2019, 06, 30);
      console.log(countdown(goal));

      var recalc = function(){
        var counter = countdown(goal);
        document.getElementById('day').textContent = counter[0];
        document.getElementById('hour').textContent = counter[1];
        document.getElementById('min').textContent = counter[2];

        refresh();
      }
      var refresh = function(){
        setTimeout(recalc(), 1000);
      }

      recalc();


    </script>



    <section>

    </section>



      <div class="container-fluid">
        <div class="row">
          <form action="/deadline" method="post">
            <button type="submit"  class="btn btn-default col-xs-offset-1 col-xs-10 col-xs-offset-1" role="button" name="mypage_to_deadline" style="position:fixed; bottom:0;">締め切り予約</button>
          </form>
        </div>
      </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../static/js/bootstrap.min.js"></script>
    <script src="https://ajax.google.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </body>
</html>
