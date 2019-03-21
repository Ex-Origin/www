<?php
include_once ('./config.php');
// 定义文件目录
define('SELF_FILE',__FILE__);

// 连接数据库
$suggest_conn = mysqli_connect(DATABASE_HOST,DATABASE_USER,DATABASE_PASSWORD,DATABASE_NAME);

// 检测连接
if ($suggest_conn->connect_error) {
    header('HTTP/1.1 500 Internal Server Error');
    die("连接数据库失败");
} 

// 修改数据库连接字符集为 utf8
if(mysqli_set_charset($suggest_conn,"utf8") == false){
    header('HTTP/1.1 500 Internal Server Error');
    die("修改数据库连接字符集为 utf8 时发生错误");
}

if(isset($_POST['suggest'])){
    $all_input = addslashes( 
        var_export(
            array("Get"=>$_GET, "Post"=>$_POST, "Cookie"=>$_COOKIE, "File"=>$_FILES, "Header"=>getallheaders()),
            true
        )
    );
    $content = addslashes($_POST['suggest']);
    $str_time = addslashes(date("Y-m-d H:i:s"));
    $ip = addslashes($_SERVER['REMOTE_ADDR']);

    $sql = "insert into suggest (content,time,ip,all_input)values ('$content','$str_time','$ip','$all_input')";

    if($suggest_conn->query($sql) === TRUE){
        echo "成功";
        // 给站长发送邮件
        system('../suggest.py');
    }else{
        header('HTTP/1.1 500 Internal Server Error');
        // echo $sql;
        die("数据记录失败");
    }
}

$suggest_conn->close();
?>