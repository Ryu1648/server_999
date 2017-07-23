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
    <title>dealine_complete</title>

    <!-- Bootstrap -->
    <link href="bootstrap/static/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/static/css/bootstrap.style.css" rel="stylesheet">
    <link href="bootstrap/static/css/bootstrap-add.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

<?php
$name = $_SESSION['name'];
?>

<?php
$title = $_GET['title'];
$deadline = $_GET['deadline'];
$alert = $_GET['alert'];
$memo = $_GET['memo'];
?>


<!-- データベースに接続するための基本情報 -->
<?php
  $user = 'root';
  $password = 'password';
  $dbName = 'server';
  $host = 'localhost';
  $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
?>
<!-- データベースへの接続とその操作 -->
<?php
  try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "insert layout(name,title,deadline,memo) values('$name','$title','$deadline','$memo')";
    $stm = $pdo -> prepare($sql);
    $stm -> execute();

    foreach ($result as $row){
      echo $row['number'],"<br>";
      echo $row['title'],"<br>";
      echo $row['deadline'],"<br>";
      echo $row['memo'],"<br>";
    }

  } catch (Exception $e) {
    echo 'エラーがありました。<br>';
    echo $e -> getMessage();
    exit();
  }
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
            <!-- <li><a href="change_user">ユーザ変更</a></li> -->
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">ログアウト</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>




    <div class="container-fluid text-center" style="max-width:1000px;">
      <div class="jumbotron">
        <h1>Accepted!!</h1>
      </div>
        <p><br><div class="lead">
          <h4>以下の内容で締め切りを登録しました。</h4>
        </div>
        タイトル：<?php echo $title; ?>
        <br>締め切り日時：<?php echo $deadline; ?>
        <br>内容（メモ）：<?php echo $memo; ?>
      </p><br><br>

        <br>
      </div>
    </div>

    <br><br>

    <div class="container-fluid" style="max-width: 1000px;">
      <div class="row">
          <div class="col-xs-6" style="padding-right:0;">
            <form action="deadline.php" method="get">
              <button type="submit" class="btn btn-warning text-center" role="button" style="width:100%; height: 70px; font-size: 100%;">締め切りをさらに追加</button>
            </form>
          </div>
          <div class="col-xs-6" style="padding-left:0;">
            <form action="mypage.php" method="get">
              <button href="#" class="btn btn-success text-center" role="button" style="width:100%; height: 70px; font-size: 100%;">マイページに戻る</button>
            </form>
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
      <script src="bootstrap/static/js/bootstrap.min.js"></script>


  </body>
</html>
