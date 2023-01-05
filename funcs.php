<?php
//XSS対応（ echoする場所で使用！）
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

//DB接続関数：db_conn() 
//※関数を作成し、内容をreturnさせる。
//※ DBname等、今回の授業に合わせる。
function db_conn(){
    try {
        //ID:'root', Password: xamppは 空白 ''
        $pdo = new PDO('mysql:dbname=book;charset=utf8;host=localhost', 'root', '');
        return $pdo;

    } catch (PDOException $e) {
        exit('DBConnectError:'.$e->getMessage());
    }
}
//SQLエラー関数：sql_error($stmt)


//リダイレクト関数: redirect($file_name)
