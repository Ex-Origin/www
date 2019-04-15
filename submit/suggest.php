<?php
include_once ('../config.php');
// 定义文件目录
define('SELF_FILE',__FILE__);

// 连接数据库
$suggest_conn = get_sql_conn();

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
        system('python3 ../../suggest.py');
    }else{
        header('HTTP/1.1 500 Internal Server Error');
        // echo $sql;
        die("数据记录失败");
    }
}

$suggest_conn->close();
?>