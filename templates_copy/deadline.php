<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Deadline</title>

    <!-- Bootstrap -->
    <link href="../static/css/bootstrap.min.css" rel="stylesheet">
    <link href="../static/css/bootstrap.style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../static/js/bootstrap.min.js">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://' -->
    <!--[if lt IE 9] -->
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!--[endif] -->
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
      <a class="navbar-brand" href="/">Welcome to DeadLine "{{ session.get('uID') }}"さん</a>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
      <ul class="nav navbar-nav navbar-right">
        <li dlass="active"><a href="post_content">自分の予定</a></li>
        <li><a href="post_content">記事作成</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ユーザ情報 <span class="caret"></span></a>
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

  
    <div class="container-fluid" style="max-width: 750px;">
      <div class="jumbotron text-center">

        <h3>この画面では、締め切りを登録することが出来ます。</h3>

          <div class="center-block
           text-center">
            <h2>登録情報を<br>入力してください</h2>
          </div>
          <br><br>

            <!--おそらく選択式になる-->

        <form action="/deadline_check" method="get">
          <div class="form-group">
            <label class="text-left">タイトル</label>
            <input type="text" class="form-control" name="title">
          </div>
          <div class="form-group">
            <label class="text-left">締切</label>
            <input type="datetime-local" class="form-control" name="deadline">
          </div>

                <br>
                <div class="row">
                  <div class="input-group form-inline text-center">
                    <div class="center-block">
                    <div class="form-block" id="form_block[0]" style="padding:5px;">

                      <!-- Closeボタン -->
                      <span class="close glyphicon glyphicon-minus" title="Close" style="display: none;" ria-hidden="true"></span>
                        <label class="text-left">メール通知日時</label>
                        <select name="deadline_select">
                          <option value="1" selected>選択してください</option>
                          <option value="1">1週間前</option>
                          <option value="2">3日前</option>
                          <option value="3">1日前</option>
                          <option value="4">12時間前</option>
                          <option value="5">2時間前</option>
                        </select>

                    </div>

                    <!-- Addボタン -->
                    <div class="form-block" id="form_add">
                      <span class="add glyphicon glyphicon-plus" title="Add" aria-hidden="true"></span>
                    </div>
                  </div>
                </div>
              </div>
            </form>



            <br>
            <div class="form-group">
              <label class="text-left">メモ</label>
              <input type="text" class="form-control" name="deadline_memo">
            </div>

            </form>

            <br>



            <br><br>
            <form action="/deadine_date" method="post">
              <button type="submit"  class="btn btn-default" role="button" style="height: 70px; width: 50%; font-size: 100%">締め切りを追加</button>
            </form>





        </div>
        </div>
      </div>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../static/js/bootstrap.min.js">

    </script>

    <script type="text/javascript">
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
    </script>

  </body>
</html>
