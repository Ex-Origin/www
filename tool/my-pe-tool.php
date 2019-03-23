<?php
include_once('../config.php');
// 定义文件目录
define('SELF_FILE',__FILE__);
?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="PE工具">
    <title>PE工具</title>
    <!-- source_header -->
    <?php include_once(ROOT_DIR.'template/source_header.php'); ?>
</head>

<body>
    <!-- header -->
    <?php include_once(ROOT_DIR.'template/header.php'); ?>

    <div class="page-header" style="background: linear-gradient(rgba(36, 39, 38, 0.5), rgba(36, 39, 38, 0.5)), rgba(36, 39, 38, 0.5) url(<?php echo (relative(SELF_FILE)); ?>images/program.jpg) no-repeat center; background-size: cover; margin: 0; border-bottom: none; padding-bottom: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title">PE工具</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo (relative(SELF_FILE)); ?>index.php">首页</a></li>
                                <li><a href="<?php echo (relative(SELF_FILE)); ?>tool/index.php">我的工具</a></li>
                                <li class="active">PE工具</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">

            <article class="markdown"><?php echo file_get_contents('my-pe-tool.md'); ?></article>

        </div>
    </div>

    <!-- footer -->
    <?php include_once(ROOT_DIR.'template/footer.php'); ?>
    
    <!-- source_footer -->
    <?php include_once(ROOT_DIR.'template/source_footer.php'); ?>
</body>

</html>