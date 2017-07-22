# 入力データを受け取って、その情報をLinuxに追加する処理


def make_txt_sh(mail_list):
    # shファイルは一つのなので、はじめに定義する
    file_sh = 'execute.sh'
    with open(file_sh,"a",encoding='utf-8') as fileobj:
        fileobj.write('#!/bin/bash\n')


    # iのところは、リストのインデックスすを利用するのが効率的かも試練
    for i in mail_list:
        # txtの処理
        # ファイル名は、一つの要求ごとに変更して新規作成する
        file_txt = '{0}.txt'.format(i+1)
        # ファイルに追加するコードをファイルに書き込むコードの外側で定義する
        # 締切ごとに違う表示をするための辞書を定義する
        deadline_dict ={
        1_month:'締切１月前です。',
        2_week:'締切２週間前です。',
        1_week:'締切１週間前です。',
        5_day:'締切５日前です。',
        3_day:'締切３日前です。',
        2_day:'締切２日前です。',
        1_day:'明日が締切です。',
        12_hour:'締切１２時間前です。,
        6_hour:'締切６時間前です。',
        3_hour:'締切３時間前です。',
        1_hour:'締切１時間前です。'
        }
        text = '''
        From:text@example.com
        To:r21262126@yahoo.co.jp
        Subject:Hello,e-mail!

        Are you ready?
        {0}
        '''.format(deadline_dict[''])
        with open(file_txt,"w",encoding='utf-8') as fileobj:
            fileobj.write(text)

        # shの処理
        # shファイルは一つのファイルの次々と追加する
        text = 'cat {0}.txt | mailsend -i -t\n'.format(i+1)
        with open(file_sh,"a",encoding='utf-8') as fileobj:
            fileobj.write(text)
