<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>deadline</title>

    <!-- Bootstrap -->
    <link href="bootstrap/static/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/static/css/bootstrap.style.css" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../static/js/bootstrap.min.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file://' -->
     <!--[if lt IE 9] -->
     <!-- <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <!-- //   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    // <!--[endif] -->

  </head>
  <body>

<?php
$name = $_SESSION['name'];
?>

    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- このaタグはFlaskでどこに飛ぶのか？ -->
      <a class="navbar-brand active" href="mypage.php">Welcome to DeadLine "<?php echo $name; ?>"さん</a>

    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="mypage.php"><span class="glyphicon glyphicon-list-alt"></span>マイページ</a></li>
        <li><a href="deadline.php"><span class="glyphicon glyphicon-pencil"></span> 締切追加</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> アカウント <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="mypage.php">マイページ</a></li>
            <li><a href="calendar.php">カレンダー</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">ログアウト</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>




    <div class="container-fluid" style="max-width: 750px;">
      <div class="jumbotron text-center">

        <h3>この画面では、締め切りを登録することが出来ます。</h3>

          <div class="center-block
           text-center">
            <h2>登録情報を<br>入力してください</h2>
          </div>
          <br><br>

        <form action="deadline_check.php" method="get">
          <div class="form-group">
            <label class="text-left">タイトル</label>
            <input type="text" class="form-control" name="deadline_title">
          </div>
          <br>
          <div class="form-group">
            <label class="text-left">締切</label>
            <input type="datetime-local" class="form-control" name="deadline_deadline">
          </div>


<br>
<div class="row">
  <div class="form-group">
    <label class="control-label">通知日時の選択</label>
    <label class="control-label help-block">※対象を全て選択してください</label>
    <br>
    <div>
      <div class="checkbox-inline"><label><input type="checkbox" name="alert[]" value="1">１週間前</label></div>
      <div class="checkbox-inline"><label><input type="checkbox" name="alert[]" value="2">３日前</label></div>
      <div class="checkbox-inline"><label><input type="checkbox" name="alert[]" value="3">１日前</label></div>
      <div class="checkbox-inline"><label><input type="checkbox" name="alert[]" value="4">１２時間前</label></div>
      <div class="checkbox-inline"><label><input type="checkbox" name="alert[]" value="5">２時間前</label></div>
    </div>
  </div>
</div>


              <br>
              <div class="row">
                <div class="form-group col-xs-12">
                  <label>メモ</label><br>
                  <!-- <input type="textarea" class="form-control" name="deadline_memo"> -->
                  <textarea class="form-control" name="memo" rows="5"></textarea>
                </div>
              </div>

              <br>
              <button type="submit"  class="btn btn-success" role="button" style="height: 70px; width: 50%; font-size: 100%">締め切りを追加</button>


            </form>

        </div>
        </div>
      </div>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/static/js/bootstrap.min.js"></script>


  </body>
</html>
