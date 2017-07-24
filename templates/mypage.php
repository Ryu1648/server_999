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
    <title>mypage</title>

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


<?php
if (!isset($_SESSION['name'])){
  $name = $_GET['name'];
  $_SESSION['name'] = $name;
}
else {
  $name = $_SESSION['name'];
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
      <!-- このaタグはFlaskでどこに飛ぶのか？ -->
      <a class="navbar-brand active" href="mypage.php">Welcome to DeadLine "<?php echo $name ?>"さん</a>

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

<br>

  <div class="container-fluid" style="max-width: 1000px;">
    <div class="jumbotron" style="background-color:brown; color: white;">
      <h2>ここは"<?php echo $name ?>"さんのマイページです</h2>
    </div>


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
    $sql = "select * from layout where name='$name' order by deadline";
    $stm = $pdo -> prepare($sql);
    $stm -> execute();
    $result = $stm -> fetchAll(PDO::FETCH_ASSOC);

    <div class="jumbotron">
    // レイアウトの修正
    foreach ($result as $row){
      echo $row['title'],"<br>";
      echo $row['deadline'],"<br>";
      echo $row['memo'],"<br><br>";
    }

    $pdo = null;

  } catch (Exception $e) {
    echo 'エラーがありました。<br>';
    echo $e -> getMessage();
    exit();
  }
  </div>
?>






  <!-- <div class="container-fluid" style="max-width: 1000px;">
    <section>
      <h2>次の締め切り：{% if title_deadline %}{{ title_deadline[0][0] }}{% endif %}</h2>
      <h2>残り：{% if title_deadline %}{{ deadline_date[0][1] }}{% endif %}</h2>
    </section>
    </div>

    <br><br>

    <div class="container-fluid" style="max-width: 1000px;">
      <div class="panel-group" id="ac1"> -->

      <!-- データを受け取る部分 -->
      <!-- deadline_IDは個人データのカラム数 -->
      <!-- {% for value in deadline_ID %}
        <div class="panel panel-warning">
          <div class="panel-heading">
            <h3 class="panel-title">
              <a data-toggle="collapse" data-parent="#ac1" href="#'{{ value[0] }}'"> -->
              <!-- <a data-toggle="collapse" data-parent="#ac1" href="#24"> -->

                <!-- 時間 -->
                <!-- {{ value[2] }}, -->
                <!-- タイトル -->
                <!-- {{ value[1] }} -->
              <!-- </a>
            </h3>
          </div>

          <div id='{{ value[0] }}'class="panel-collapse collapse"> -->
          <!-- <div id="24"　class="panel-collapse collapse "> -->
            <!-- <div class="panel-body"> -->
              <!-- メモ -->
              <!-- {{ value[2] }} -->
              <!-- <p>こんにちは</p> -->
            <!-- </div>
          </div>
        </div>
            {% endfor %}
    </div> -->
  <!-- </div> -->
</div>

      <div class="container-fluid">
        <div class="row">
          <form action="deadline.php" method="get">
            <button type="submit"  class="btn btn-warning col-xs-offset-1 col-xs-10 col-xs-offset-1" role="button" name="mypage_to_deadline" style="font-size:30px; position:fixed; bottom:0; height:100px">締め切り追加</button>
          </form>
        </div>
      </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/static/js/bootstrap.min.js"></script>
    <script src="https://ajax.google.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </body>
</html>
