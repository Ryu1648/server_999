<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>regist_complete</title>

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
$name = $_GET['name'];
$password = $_GET['password'];
$email = $_GET['email']
?>

    <br><br><br><br><br>

    <div class="container text-center" style="max-width:800px">
      <div class="row">
        <div class="jumbotron">
          <div class="lead">
            <h2 class="text-center"><?php echo $name; ?><br><br>ようこそ!</h2><br>
          </div>
        </div>
      </div>
    </div>

    <div class="container text-center" style="max-width:800px">
      <div class="row">
        <form action="mypage.php" method="get">
          <button type="submit" class="btn btn-success btn-lg btn-block" style="font-size:25px;height:70px;border-radius:0;">
            マイページへ</button>
        </form>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/static/js/bootstrap.min.js"></script>
  </body>
</html>