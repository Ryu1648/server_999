# Flaskに関するモジュール
from flask import Flask,render_template,request,make_response
# データベースに関するモジュール
import pymysql.cursors
# 時間に関するモジュール
import datetime



# データベースに接続
connection = pymysql.connect(
    host='localhost',
    user='zemi_player',
    # password='zemipass',
    # 大学のサーバー内のデータベースにアクセスする場合のパスワード
    password='password',
    db='server_built',
    charset='utf8',
    )


# Flaskを起動
app = Flask(__name__)



# ログイン画面
@app.route('/')
def index():
    return render_template('index.html')




# 新規ユーザー登録関係
@app.route('/regist')
def regist():
    return render_template('regist.html')


@app.route('/regist_check')
def regist_check():
    name = request.args.get('name','')
    password = request.args.get('password','')
    email = request.args.get('email','')

    # エラー判定
    if error:
        return render_template('regist_error.html')


    return render_template('regist_check.html',name=name,password=password,email=email)


@app.route('/regist_complete')
def regist_complete():
    name = request.args.get('name','')
    password = request.args.get('password','')
    email = request.args.get('email','')

    max_age = 60 * 60 * 24 # 1 days
    expires = int(datetime.datetime.now().timestamp()) + max_age
    resp = make_response(render_template('regist_complete.html',name=name))
    resp.set_cookie('name',name,max_age=max_age,expires=expires)

    return resp





# ログインエラー画面
# 入力内容をデータベースと照合して、正しければマイページへ、正しくなければエラーページへ
@app.route('/login_error')
def login_error():
    name = request.args.get('name','')
    password = request.args.get('password','')

    error = False
    if error:
        return render_template('login_error.html')


    # データベースから予定の一覧を入手する
    with connection.cursor() as cursor:
        sql_a = 'select title,deadline from layout where name = "{}" order by deadline'.format(name)
        cursor.execute(sql_a)
        title_deadline = cursor.fetchall()
        print(title_deadline)


    name = 'テスト'

    max_age = 60 * 60 * 24 # 1 days
    expires = int(datetime.datetime.now().timestamp()) + max_age
    resp = make_response(render_template('mypage.html',title_deadline=title_deadline))
    resp.set_cookie('name',name,max_age=max_age,expires=expires)

    return resp





# マイページ画面
@app.route('/mypage')
def mypage():
    name = request.cookies.get('name',None)
    if name is None:
        return render_template('index.html')

    # データベースから予定の一覧を入手する
    with connection.cursor() as cursor:
        sql_a = 'select * from layout where name = "{}" order by deadline'.format(name)
        cursor.execute(sql_a)
        mypage_deadline = cursor.fetchall()
        print(title_deadline)

    return render_template('mypage.html',name=name,mypage_deadline=mypage_deadline)



# ログアウト画面
@app.route('/logout')
def logout():
    # クッキーを受け取る
    name = request.cookies.get('name', None)
    # クッキーの消去
    resp = make_response(render_template('logout.html'))
    resp.set_cookie('name',name,expires=0)
    print('Flask経由でのログアウトに成功しました')
    return resp




# 予定詳細画面
@app.route('/view')
def view():
    name = request.cookies.get('name', None)
    if name is None:
        return render_template('index.html')


    return render_template('view.html')




# 締切追加関係
@app.route('/deadline')
def deadline():
    name = request.cookies.get('name', None)
    if name is None:
        return render_template('index.html')


    return render_template('deadline.html')


@app.route('/deadline_check')
def deadline_check():
    name = request.cookies.get('name', None)
    if name is None:
        return render_template('index.html')

    # 入力内容の受け取り
    title = request.args.get('deadline_title','')
    deadline = request.args.get('deadline_deadline','')
    # alertは自動追加の方が楽
    alert1 = request.args.get('alert1','')
    alert2 = request.args.get('alert2','')
    alert3 = request.args.get('alert3','')
    alert4 = request.args.get('alert4','')
    alert5 = request.args.get('alert5','')

    memo = request.args.get('deadline_memo','')

    # 入力内容の確認
    print('*' * 100)
    print('title')
    print(title)
    print(type(title))
    print('deadline')
    print(deadline)
    print(type(deadline))
    print('alert1')
    print(alert1)
    print(type(alert1))
    print('alert2')
    print(alert2)
    print(type(alert2))
    print('alert3')
    print(alert3)
    print(type(alert3))
    print('alert4')
    print(alert4)
    print(type(alert4))
    print('alert5')
    print(alert5)
    print(type(alert5))
    print('memo')
    print(memo)
    print(type(memo))

    # 通知日時の計算


    return render_template('deadline_check.html',title=title,deadline=deadline,alert1=alert1,alert2=alert2,alert3=alert3,alert4=alert4,alert5=alert5,memo=memo)


@app.route('/deadline_complete')
def deadline_complete():
    name = request.cookies.get('name', None)
    if name is None:
        return render_template('index.html')

    # 入力内容の受け取り
    title = request.args.get('title','')
    deadline = request.args.get('deadline','')
    # alertは自動追加の方が楽
    alert1 = request.args.get('alert1','')
    alert2 = request.args.get('alert2','')
    alert3 = request.args.get('alert3','')
    alert4 = request.args.get('alert4','')
    alert5 = request.args.get('alert5','')

    memo = request.args.get('memo','')


    return render_template('deadline_complete.html')



# Ubuntu Webサーバーを起動
if __name__ == '__main__':
    app.debug=True
    app.run()
