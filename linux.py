#!/usr/bin/env python
# -*- coding: utf-8 -*-

# データベースに関するモジュール
import pymysql.cursors
# 時間に関するモジュール
import datetime


# データベースに接続
connection = pymysql.connect(
    host='localhost',
    user='root',
    password='password',
    db='server',
    charset='utf8',
    )


# データベースで使える形としての現在時刻の抽出
now = datetime.datetime.now()
now = str(now)
now = now.split(':')
now = now[0]
now += ':00:00'

# データベースのlayoutにある古いデータを削除する
with connection.cursor() as cursor:
    sql = 'delete from layout where deadline <= "{}"'.format(now)
    cursor.execute(sql)
    connection.commit()


# shファイルは一つのなので、はじめに定義する
file_sh = 'execute.sh'
with open(file_sh,"w",encoding='utf-8') as fileobj:
    fileobj.write('#!/bin/bash\n')

# データベースlistから一覧を入手する
with connection.cursor() as cursor:
    # 現在時刻から対象のデータを取り出す
    sql = 'select * from list where alert_time = "{}"'.format(now)
    cursor.execute(sql)
    mail_list = cursor.fetchall()
    # 取り出されたリストを確認
    print(mail_list)

    # 対象のデータを削除する
    # 実行時点より古いデータも削除する
    sql_d = 'delete from list where alert_time <= "{}"'.format(now)
    sql_n = 'delete from list where alert_time is null'
    cursor.execute(sql_d)
    cursor.execute(sql_n)
    connection.commit()


text = '''
From: deadline_alert@example.com
To: {0}
Subject: Your deadline is approaching!

Are you ready?
Your deadline is approaching!
'''
for i in mail_list:
    # text = text.format(i[2],i[1],i[4])
    text = text.format('r21272127@yahoo.co.jp')
    file_txt = '{0}.txt'.format(i[0])
    with open(file_txt,'w',encoding='utf-8') as fileobj:
        fileobj.write(text)

    text_txt = 'cat {0}.txt | mailsend -i -t\n'.format(format(i[0]))
    with open(file_sh,'a',encoding='utf-8') as fileobj:
        fileobj.write(text_txt)
