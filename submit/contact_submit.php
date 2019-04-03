<?php
include_once ('../config.php');
// 定义文件目录
define('SELF_FILE',__FILE__);

// 连接数据库
$book_conn = mysqli_connect(DATABASE_HOST,DATABASE_USER,DATABASE_PASSWORD,DATABASE_NAME);

// 检测连接
if ($book_conn->connect_error) {
    header('HTTP/1.1 500 Internal Server Error');
    die("连接数据库失败");
} 

// 修改数据库连接字符集为 utf8
if(mysqli_set_charset($book_conn,"utf8") == false){
    header('HTTP/1.1 500 Internal Server Error');
    die("修改数据库连接字符集为 utf8 时发生错误");
}

if(isset($_POST['content'])){
    $all_input = addslashes( 
        var_export(
            array("Get"=>$_GET, "Post"=>$_POST, "Cookie"=>$_COOKIE, "File"=>$_FILES, "Header"=>getallheaders()),
            true
        )
    );
    $name = addslashes($_POST['name']);
    $phone = addslashes($_POST['phone']);
    $email = addslashes($_POST['email']);
    $subject = addslashes($_POST['subject']);
    $content = addslashes($_POST['content']);

    $str_time = addslashes(date("Y-m-d H:i:s"));
    $ip = addslashes($_SERVER['REMOTE_ADDR']);

    $sql = "insert into contact (name,phone,email,subject,content,time,ip,all_input) values ('$name','$phone','$email','$subject', '$content'  ,'$str_time','$ip','$all_input')";

    if($book_conn->query($sql) === TRUE){
        echo "成功";
        // 给站长发送邮件
        system('../../contact_submit.py');
    }else{
        header('HTTP/1.1 500 Internal Server Error');
        // echo $sql;
        die("数据记录失败");
    }
}

$book_conn->close();
?>