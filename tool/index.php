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
    <meta name="description" content="提供原创工具的使用和软件的下载，也推荐一些互联网上的优秀软件。">
    <meta name="keywords" content="软件,软件工具,原创软件">
    <title>我的工具</title>
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
                        <h2 class="page-title">代码开源</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo (relative(SELF_FILE)); ?>index.php">首页</a></li>
                                <li class="active">我的工具</li>
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

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="post-block">
                        <div class="row ">
                            <!-- post block -->
                            <div class="col-md-6">
                                <div class="post-img">
                                    <a href="#"><img src="images/post-img.jpg" alt="" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-content">
                                    <h2><a href="<?php echo (relative(SELF_FILE)); ?>tool/my-pe-tool.php" class="title">我的PE工具</a></h2>
                                    <p>Vestibulum eget tellus tincidunt erat posuere lobortisulla facilisi auris rutrum mollis dui, quis elementum turpis one viverra sedam mollis.</p>
                                    <a href="<?php echo (relative(SELF_FILE)); ?>tool/my-pe-tool.php" class="btn btn-default">了解更多</a> 
                                    <a href="https://github.com/Ex-Origin/my-pe-tool" target="_blank" class="btn btn-default">查看源码</a> 
                                </div>
                            </div>
                        </div>
                        <!-- /.post block -->
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="post-block post-quote">
                        <div class="row ">
                            <!-- post block -->
                            <div class="col-md-12">
                                <div class="quote-content">
                                    <blockquote>“比编程语言更难学的是编程思想。”</blockquote>
                                </div>
                            </div>
                            <!-- /.post block -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include_once(ROOT_DIR.'template/footer.php'); ?>
    
    <!-- source_footer -->
    <?php include_once(ROOT_DIR.'template/source_footer.php'); ?>
</body>

</html>
