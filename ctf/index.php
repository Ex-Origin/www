<?php
include_once ('../config.php');
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
    <meta name="description" content="本站推荐了很多优秀的编程教学视频。">
    <meta name="keywords" content="编程,编程入门,自学编程,编程视频">
    <title>CTF</title>
    <!-- source_header -->
    <?php include_once(ROOT_DIR.'template/source_header.php'); ?>
</head>

<body>
    <!-- header -->
    <?php include_once(ROOT_DIR.'template/header.php'); ?>

    <div class="page-header" style="background: linear-gradient(rgba(36, 39, 38, 0.5), rgba(36, 39, 38, 0.5)), rgba(36, 39, 38, 0.5) url(<?php echo (relative(SELF_FILE)); ?>images/program.jpg) no-repeat center; background-size: cover; margin: 0; border-bottom: none; padding-bottom: 0px;"><!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title">计算机中的奥林匹克</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo (relative(SELF_FILE)); ?>index.php">首页</a></li>
                                <li class="active">CTF</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.page header -->

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
                                    <h2><a href="<?php echo (relative(SELF_FILE)); ?>ctf/web.php" class="title" target="_blank">Web（渗透）</a></h2>
                                    <p>Vestibulum eget tellus tincidunt erat posuere lobortisulla facilisi auris rutrum mollis dui, quis elementum turpis one viverra sedam mollis.</p>
                                    <a href="<?php echo (relative(SELF_FILE)); ?>ctf/web.php" class="btn btn-default">阅读全文</a> </div>
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
                                    <a href="#"><img src="images/post-img-1.jpg" alt="" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-content">
                                    <h2><a href="<?php echo (relative(SELF_FILE)); ?>ctf/re.php" class="title" target="_blank"> Re（逆向）</a></h2>
                                    <p>Suspendisse lacus est scelerisque quis anteet pharetra one fermentum nibhmus placerat velit sit amet felis consequat, etbibe ndum purus ultrices.</p>
                                    <a href="<?php echo (relative(SELF_FILE)); ?>ctf/re.php" class="btn btn-default">阅读全文</a> </div>
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
                                    <a href="#"><img src="images/post-img-2.jpg" alt="" class="img-responsive"></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="post-content">
                                    <h2><a href="<?php echo (relative(SELF_FILE)); ?>ctf/pwn.php" class="title" target="_blank"> Pwn（溢出）</a></h2>
                                    <p>Cras dolor arcu porttitor atfinibus idcondi mentum uttu rpis one fuscenec justo idle libero pharetra posuere aliq uam tempus is porttitor atfinibus.</p>
                                    <a href="<?php echo (relative(SELF_FILE)); ?>ctf/pwn.php" class="btn btn-default">阅读全文</a> </div>
                            </div>
                        </div>
                        <!-- /.post block -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="space-small bg-primary">
        <!-- call to action -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-7 col-md-8 col-xs-12">
                    <h1 class="cta-title">如果您对这些感兴趣，却苦于难以理解</h1>
                    <p class="cta-text"> 那就先从基础的编程入门开始吧，CTF是需要非常好的功底才能够掌握的。</p>
                </div>
                <div class="col-lg-4 col-sm-5 col-md-4 col-xs-12">
                    <a href="<?php echo (relative(SELF_FILE)); ?>introduction/index.php" class="btn btn-white btn-lg mt20">去编程入门学习</a>
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
