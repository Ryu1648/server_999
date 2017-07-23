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
      <a class="navbar-brand active" href="mypage.php">Welcome to DeadLine "{{ request.cookies.get('name') }}"さん</a>

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

            <!--おそらく選択式になる-->

          <!-- このフォームから送信されるのは
          deadline_title
          deadline_deadline
          deadline_alert
          deadline_memo -->
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


<!-- メール通知日時 開始-->
<br>
<div class="row">
  <div class="form-group">
    <label class="control-label">通知日時の選択</label>
    <label class="control-label help-block">※対象を全て選択してください</label>
    <br>
    <div>
      <div class="checkbox-inline"><label><input type="checkbox" name="alert1" value="1">１週間前</label></div>
      <div class="checkbox-inline"><label><input type="checkbox" name="alert2" value="2">３日前</label></div>
      <div class="checkbox-inline"><label><input type="checkbox" name="alert3" value="3">１日前</label></div>
      <div class="checkbox-inline"><label><input type="checkbox" name="alert4" value="4">１２時間前</label></div>
      <div class="checkbox-inline"><label><input type="checkbox" name="alert5" value="5">２時間前</label></div>
    </div>
  </div>
</div>

                <!-- <br>
                <div class="row">
                  <div class="input-group form-inline text-center">
                    <div class="center-block">
                    <div class="form-block" id="form_block[0]" style="padding:5px;">

                      <span class="close glyphicon glyphicon-minus" title="Close" style="display: none;" ria-hidden="true"></span>
                        <label class="text-left">メール通知日時</label>
                        <select name="deadline_alert_1">
                          <option value="1" selected>選択してください</option>
                          <option value="1">1週間前</option>
                          <option value="2">3日前</option>
                          <option value="3">1日前</option>
                          <option value="4">12時間前</option>
                          <option value="5">2時間前</option>
                        </select>

                    </div>

                    <div class="form-block" id="form_add">
                      <span class="add glyphicon glyphicon-plus" title="Add" aria-hidden="true"></span>
                    </div>
                  </div>
                </div>
              </div> -->

<!-- メール通知日時 終了 -->

              <br>
              <div class="row">
                <div class="form-group col-xs-12">
                  <label>メモ</label><br>
                  <!-- <input type="textarea" class="form-control" name="deadline_memo"> -->
                  <textarea class="form-control" name="deadline_memo" rows="5"></textarea>
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

    <!-- <script type="text/javascript">
      var now = new Date();
      var year = now.getFullYear();
      var month = now.getMonth();
      var date = now.getDate();
    </script>

    <script type="text/javascript">
    $(function () {
    var frm_cnt = 0;


      $(document).on('click', '.add', function(){
        if (frm_cnt <= 1) {
          var original = $('#form_block\\[' + frm_cnt + '\\]');
          var originCnt = frm_cnt;
          var originVal = $("input[name='sex\\[" + frm_cnt + "\\]']:checked").val();


            frm_cnt++;
        }



      original
          .clone()
          .hide()
          .insertAfter(original)
          .attr('id', 'form_block[' + frm_cnt + ']') // クローンのid属性を変更。
          .find("input[type='radio'][checked]").prop('checked', true)
          .end() // 一度適用する
          .find('input, textarea').each(function(idx, obj) {
              $(obj).attr({
                  id: $(obj).attr('id').replace(/\[[0-9]\]+$/, '[' + frm_cnt + ']'),
                  name: $(obj).attr('name').replace(/\[[0-9]\]+$/, '[' + frm_cnt + ']')
              });
              if ($(obj).attr('type') == 'text') {
                $(obj).val('');
              }
          });

      // clone取得
      var clone = $('#form_block\\[' + frm_cnt + '\\]');
      clone.children('span.close').show();
      clone.slideDown('slow');

      // originalラジオボタン復元
      original.find("input[name='sex\\[" + originCnt + "\\]'][value='" + originVal + "']").prop('checked', true);
    });

    $(document).on('click', '.close', function(){
        var removeObj = $(this).parent();
        removeObj.fadeOut('fast', function() {
            removeObj.remove();
            // 番号振り直し
            frm_cnt = 0;
            $(".form-block[id^='form_block']").each(function(index, formObj) {
                if ($(formObj).attr('id') != 'form_block[0]') {
                    frm_cnt++;
                    $(formObj)
                        .attr('id', 'form_block[' + frm_cnt + ']') // id属性を変更。
                        .find('input, textarea').each(function(idx, obj) {
                            $(obj).attr({
                                id: $(obj).attr('id').replace(/\[[0-9]\]+$/, '[' + frm_cnt + ']'),
                                name: $(obj).attr('name').replace(/\[[0-9]\]+$/, '[' + frm_cnt + ']')
                            });
                        });
                    }
            });
        });
    });
});
    </script> -->

  </body>
</html>
