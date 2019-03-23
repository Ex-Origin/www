<?php

/** 定义根目录 */
// 为了取相对路径更加方便，在后面加上了斜杠
define('ROOT_DIR', dirname(__FILE__).'/');

/** 数据库 */
// define('DATABASE_HOST','**************');
// define('DATABASE_USER','**************');
// define('DATABASE_PASSWORD','**************');
// define('DATABASE_NAME','**************');
@include_once ROOT_DIR . 'password.php';

@require_once ROOT_DIR . 'waf.php';

// 函数依赖于 ROOT_DIR，主要功能为根据 ROOT_DIR 全局根目录来计算其传入的文件路径的相对偏移
// 为了避免不必要的步骤，在计算完相对路径之后，程序会定义全局宏 RELATIVE_PATH，
// 下次调用该程序的时候会先判断有无全局宏 RELATIVE_PATH ，若有的话直接返回。
function relative($file)
{

    if (defined('RELATIVE_PATH')) {
        return RELATIVE_PATH;
    }

    $relative_path = '';
    // 防止过度
    $absolute_path = str_replace(ROOT_DIR, '', dirname($file).'/');

    $str_length = strlen($absolute_path);
    for ($i = 0; $i < $str_length; $i++) {
        if ($absolute_path[$i] == '/') {
            $relative_path = $relative_path . '../';
        }
    }

    if ($relative_path == '') {
        $relative_path = './';
    }
    define('RELATIVE_PATH', $relative_path);
    return RELATIVE_PATH;
}

// 连接数据库并进行检查，
// 警告：
// 依赖于全局宏：
//     DATABASE_HOST
//     DATABASE_USER
//     DATABASE_PASSWORD
//     DATABASE_NAME
// 链接失败则直接报错退出
function get_sql_conn(){
    // 连接数据库
    $conn = mysqli_connect(DATABASE_HOST,DATABASE_USER,DATABASE_PASSWORD,DATABASE_NAME);

    // 检测连接
    if ($conn->connect_error) {
        header('HTTP/1.1 500 Internal Server Error');
        die("连接数据库失败");
    } 

    // 修改数据库连接字符集为 utf8
    if(mysqli_set_charset($conn,"utf8") == false){
        header('HTTP/1.1 500 Internal Server Error');
        die("修改数据库连接字符集为 utf8 时发生错误");
    }

    return $conn;
}
