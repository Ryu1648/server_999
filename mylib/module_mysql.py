# データベースに関するモジュール
import pymysql.cursors


# MySQLに接続し、Queryを実行して、接続の解除までを一括で行う関数


# MySQLに接続する関数
def connection_in():
    connection = pymysql.connect(
        host = 'localhost',
        user = 'zemi_player',
        password = 'zemipass',
        db = 'server_built',
        charset = 'utf-8'
    )

# MySQLから接続を解除する関数
def connection_out():
    connection.commit()
    connection.close


# MySQLに接続された環境で、Queryを実行する関数
def query_execute(mysql_query):
    with connection.cursor() as cursor:
        sql = mysql_query
        cursor.execute(sql)
        result = cursor.fetchall()
    return result
