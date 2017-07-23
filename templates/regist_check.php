<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>regist_check</title>

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
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
?>


    <br><br>

    <div class="container text-center" style="max-width:1000px">
      <div class="row">
        <div class="jumbotron">
          <h1>入力内容を確認してください</h1>
        </div>
      </div>
      <div class="row">
        <h3><?php echo $name; ?></h3>
        <h3><?php echo $password; ?></h3>
        <h3><?php echo $email; ?></h3>
      </div>
    </div>


    <br><br>

    <div class="container" style="max-width:1000px">
      <div class="row">
        <div class="col-xs-6" style="padding:0;">
          <form action="regist.php" method="get">
            <button type="deadline_add" class="btn btn-warning btn-lg btn-block" style="font-size:25px;height:70px;border-radius:0;">
              修正する</button>
          </form>
        </div>
        <div class="col-xs-6" style="padding:0;">
          <form action="regist_complete.php" method="post">
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="password" value="<?php echo $password; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <button type="submit" class="btn btn-success btn-lg btn-block" style="font-size:25px;height:70px;border-radius:0;">
              登録する</button>
          </form>
        </div>
      </div>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/static/js/bootstrap.min.js"></script>
  </body>
</html>
