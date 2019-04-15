<?php
include_once('./config.php');
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
    <meta name="description" content="我的子站">
    <meta name="keywords" content="我的子站">
    <title>我的子站</title>
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
                        <h2 class="page-title">欢迎大家使用</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo (relative(SELF_FILE)); ?>index.php">首页</a></li>
                                <li class="active">子站</li>
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
                                    <a href="#"><img src="" alt="" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-content">
                                    <h2><a href="http://video.eonew.cn/" class="title" target="_blank">最新电影</a></h2>
                                    <h5 class="small-title ">video.eonew.cn</h5>
                                    <p>动态更新最新的电影资源，以及电视剧，数据来自开心一瞬微信公众号，每条资源保存三天后即会删除。</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.post block -->
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="post-block">
                        <div class="row ">
                            <!-- post block -->
                            <div class="col-md-6">
                                <div class="post-img">
                                    <a href="#"><img src="" alt="" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-content">
                                    <h2><a href="http://blog.eonew.cn/" class="title" target="_blank"> Ex个人博客 </a></h2>
                                    <h5 class="small-title ">blog.eonew.cn</h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <!-- /.post block -->
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="post-block">
                        <div class="row ">
                            <!-- post block -->
                            <div class="col-md-6">
                                <div class="post-img">
                                    <a href="#"><img src="" alt="" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-content">
                                    <h2><a href="http://study.eonew.cn/" class="title" target="_blank"> 题库</a></h2>
                                    <h5 class="small-title ">study.eonew.cn</h5>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <!-- /.post block -->
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="post-block">
                        <div class="row ">
                            <!-- post block -->
                            <div class="col-md-6">
                                <div class="post-img">
                                    <a href="#"><img src="" alt="" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-content">
                                    <h2><a href="http://kaoyan.eonew.cn/" class="title" target="_blank"> 考研论坛 </a></h2>
                                    <h5 class="small-title ">kaoyan.eonew.cn</h5>
                                    <p></p>
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
                                    <blockquote>“Nothing is impossible!”</blockquote>
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
