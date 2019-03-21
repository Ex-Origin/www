<?php

/** 定义根目录 */
// 为了取相对路径更加方便，在后面加上了斜杠
define('ROOT_DIR', dirname(__FILE__).'/');

@require_once ROOT_DIR . 'waf.php';

/** 数据库 */
// define('DATABASE_HOST','**************');
// define('DATABASE_USER','**************');
// define('DATABASE_PASSWORD','**************');
// define('DATABASE_NAME','**************');
@include_once './password.php';

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
