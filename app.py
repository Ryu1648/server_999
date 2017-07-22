# 時間に関するモジュール
import time
import datetime
# Flaskに関するモジュール
from flask import Flask,render_template,request,make_response


# Flaskをappとして起動
app = Flask(__name__)


# スタート画面
@app.route('/')
def Welcome_to_Deadline():
    return render_template('index.php')



# 登録画面
@app.route('/regist.php')
def regist():
    # regist_checkで重複があった場合からのアクセスであるかどうかを確認する
    accunt_already = request.args.get('accunt_already','')
    if accunt_already is None:
        # 上手く起動されているかどうか確認する
        print(accunt_already)
        return render_template('regist.php',accunt_already=accunt_already)
    # 初回登録であれば、こっちを返却する
    return render_template('regist.php')

@app.route('/regist_check.php')
def regist_check():
    # 入力内容を受け取る
    user_name = request.args.get('','')
    user_email = request.args.get('','')
    user_password = request.args.get('','')
    # データベースにアクセスして、アカウントの重複の有無を確認する
    sql = ''
    connection_in()
    query_execute(sql)
    connection-out()
    # アカウントの重複が無い場合
    if True:
        return render_template('regist_check.php')
    # アカウントの重複がある場合
    else:
        accunt_already = 'このアカウント名は既に登録されています。'
        return render_template('regist.php',accunt_already=accaccunt_already)

@app.route('/regist_complete.php')
def regist_complete():
    # 入力内容を受け取る
    user_name = request.args.get('','')
    user_email = request.args.get('','')
    user_password = request.args.get('','')
    # uID = 'regist完了'

    # データベースに新しいアカウントを追加する
    sql = ''
    connection_in()
    query_execute(sql)
    connection-out()

    # Cookieを起動して、mypageに飛ばす
    resp = make_response(render_template('mypage.php'))
    resp.set_cookie('uID',uID)
    return resp






# マイページ画面
@app.route('/mypage.php')
def mypage():
    # Cookieを受け取る
    user_name = request.cookies.get('user_name', None)
    # コマンドプロンプトに表示して確認する
    print(user_name)
    # データベースにアクセスして、そのユーザーの締切情報を入手する
    sql = ''
    connection_in()
    query_execute(sql)
    connection_out()
    # データベースからの情報を二次元配列として処理する
    result = result

    return render_template('mypage.php', user_name=user_name,result=result)



# 予定の詳細を表示する画面
@app.route('/view.php')
def view():
    # Cookieを受け取る
    user_name = request.cookies.get('user_name', None)
    # 入力内容を受け取る
    number = request.args.get('number','')
    # データベースにアクセスして、要求された締切のより詳しい情報を入手する
    sql = ''
    connection_in()
    query_execute(sql)
    connection_out()

    return render_template('view.php')



# 新しい締切を追加する画面
@app.route('/deadline.php')
def deadline():
    return render_template('deadline.php')

@app.route('/deadline_check.php')
def deadline_check():
    # 入力内容を受け取る
    title = request.args.get('title','')
    deadline = request.args.get('deadline','')
    memo = request.args.get('memo','')
    alert1 = request.args.get('alert1','')
    alert2 = request.args.get('alert2','')
    alert3 = request.args.get('alert3','')
    # 受け取った情報を辞書型にして扱いやすくする

    return render_template('deadline_check.php')

@app.route('/deadline_complete')
def deadline_complete():
    # 入力内容を受け取る
    title = request.args.get('title','')
    deadline = request.args.get('deadline','')
    memo = request.args.get('memo','')
    alert1 = request.args.get('alert1','')
    alert2 = request.args.get('alert2','')
    alert3 = request.args.get('alert3','')
    # 受け取った情報を辞書型に扱いやすくする


    # データベースに新しい締切を追加する
    sql = ''
    connection_in()
    query_execute(sql)
    connection_out()

    # メール自動送信機能へ情報を送信する
    # Linuxのcronに処理を追加する関数を呼び出す

    return render_template('deadline_complete.php')

if __name__ == '__main__':
	app.debug = True
	app.run()
