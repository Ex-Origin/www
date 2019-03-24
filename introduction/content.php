<?php
include_once '../config.php';
// 定义文件目录
// 为了迎合重写规则
define('SELF_FILE',dirname(__FILE__) . str_replace(dirname(__FILE__),'/content',__FILE__));

// 读取配置文件
$data = json_decode(file_get_contents(ROOT_DIR . 'introduction/data.json'),true);
if(isset($_GET['page']) && $data[$_GET['page']]){
    // 丢弃不需要的内容
    $data = $data[$_GET['page']];
}else{
    include_once ROOT_DIR . '403.html';
    header('HTTP/1.1 403 Forbidden');
    die();
}
?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php echo $data['description']; ?>">
    <meta name="keywords" content="<?php echo $data['keywords']; ?>">
    <title><?php echo $data['title']; ?></title>

    <!-- source_header -->
    <?php include_once ROOT_DIR . 'template/source_header.php';?>
</head>

<body>
    <!-- header -->
    <?php include_once ROOT_DIR . 'template/header.php';?>

    <div class="page-header" style="background: linear-gradient(rgba(36, 39, 38, 0.5), rgba(36, 39, 38, 0.5)), rgba(36, 39, 38, 0.5) url(<?php echo (relative(SELF_FILE)); ?>images/program.jpg) no-repeat center; background-size: cover; margin: 0; border-bottom: none; padding-bottom: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title"><?php echo $data['name']; ?></h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo (relative(SELF_FILE)); ?>index.php">首页</a></li>
                                <li><a href="<?php echo (relative(SELF_FILE)); ?>introduction/index.php">编程入门</a></li>
                                <li class="active"><?php echo $data['name']; ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <article class="markdown"><?php htmlspecialchars(include_once($data['markdown_file_path'])); ?></article>
                </div>

                <!-- sidenav -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidenav">
                        <ul class="listnone">
                            <?php
                            foreach($data['sidenav'] as $content){
                                echo '<li> <a href="'.$content['url'].'" target="_blank">'.$content['title'].'</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="widget widget-call-to-action">
                        <h1 class="widget-title">路在前方</h1>
                        <p class="text-white">成功就在脚下。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include_once ROOT_DIR . 'template/footer.php';?>

    <!-- source_footer -->
    <?php include_once ROOT_DIR . 'template/source_footer.php';?>
</body>

</html>
