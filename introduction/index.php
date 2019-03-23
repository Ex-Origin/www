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
    <title>编程入门</title>
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
                        <h2 class="page-title">好好学习，天天向上</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo (relative(SELF_FILE)); ?>index.php">首页</a></li>
                                <li class="active">编程入门</li>
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
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="service-block">
                        <!-- service block -->
                        <div class="service-icon mb20">
                            <!-- service img -->
                            <a href="<?php echo (relative(SELF_FILE)); ?>introduction/content.php?page=c"><img src="<?php echo (relative(SELF_FILE)); ?>images/c.png" class="program-icon" alt="C语言"> </a>
                        </div>
                        <!-- service img -->
                        <div class="service-content">
                            <!-- service content -->
                            <h2><a href="<?php echo (relative(SELF_FILE)); ?>introduction/content.php?page=c" class="title">C语言</a></h2>
                            <p>C 语言是一种通用的、面向过程式的计算机程序设计语言。1972 年，为了移植与开发 UNIX 操作系统，丹尼斯·里奇在贝尔电话实验室设计开发了 C 语言。</p>
                            <p>C语言是一种广泛使用的计算机语言，它与 Java 编程语言一样普及，二者在现代软件程序员之间都得到广泛使用。 当前最新的C语言标准为 C11 ，在它之前的C语言标准为 C99。 </p>
                        </div>
                        <!-- service content -->
                    </div>
                    <!-- /.service block -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="service-block">
                        <!-- service block -->
                        <div class="service-icon mb20">
                            <!-- service img -->
                            <a href="<?php echo (relative(SELF_FILE)); ?>introduction/content.php?page=c_2"><img src="<?php echo (relative(SELF_FILE)); ?>images/c++.png" class="program-icon" alt="C++"> </a>
                        </div>
                        <!-- service img -->
                        <div class="service-content">
                            <!-- service content -->
                            <h2><a href="<?php echo (relative(SELF_FILE)); ?>introduction/content.php?page=c_2" class="title">C++</a></h2>
                            <p>C++ 是一种中级语言，它是由 Bjarne Stroustrup 于 1979 年在贝尔实验室开始设计开发的。C++ 进一步扩充和完善了 C 语言，是一种面向对象的程序设计语言。C++ 可运行于多种平台上，如 Windows、MAC 操作系统以及 UNIX 的各种版本。</p>
                        </div>
                        <!-- service content -->
                    </div>
                    <!-- /.service block -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="service-block">
                        <!-- service block -->
                        <div class="service-icon mb20">
                            <!-- service img -->
                            <a href="<?php echo (relative(SELF_FILE)); ?>introduction/content.php?page=java" ><img src="<?php echo (relative(SELF_FILE)); ?>images/java.png" class="program-icon" alt="Java"> </div></a>
                        <!-- service img -->
                        <div class="service-content">
                            <!-- service content -->
                            <h2><a href="<?php echo (relative(SELF_FILE)); ?>introduction/content.php?page=java"  class="title">Java</a></h2>
                            <p>Java 是由Sun Microsystems公司于1995年5月推出的高级程序设计语言。</p>
                            <p>Java可运行于多个平台，如Windows, Mac OS，及其他多种UNIX版本的系统。</p>
                        </div>
                        <!-- service content -->
                    </div>
                    <!-- /.service block -->
                </div>

                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 text-center"> <a id="show-more" class="btn btn-default"> 查看更多 </a> </div>
            </div>

            <div id="extend"></div>
        </div>
    </div>
    <div class="space-small bg-primary">
        <!-- call to action -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-7 col-md-8 col-xs-12">
                    <h1 class="cta-title">Noting is impossible！</h1>
                    <p class="cta-text"> 世上无难事！</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- footer -->
    <?php include_once(ROOT_DIR.'template/footer.php'); ?>
    
    <!-- source_footer -->
    <?php include_once(ROOT_DIR.'template/source_footer.php'); ?>

    <script> 
    $(document).ready(function(){
        $("#show-more").click(function(){
            jQuery.ajax({
                url: "<?php echo (relative(SELF_FILE)); ?>introduction/show_more.php",
                type: "get",
                success: function(msg) {
                    $("#show-more").remove();
                    $( "#extend" ).html( msg );
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    if(XMLHttpRequest.status == 403){
                        $('#error403').modal('show');
                    }else if(XMLHttpRequest.status == 404){
                        $('#error404').modal('show');
                    }else if(XMLHttpRequest.status == 500){
                        $('#error500').modal('show');
                    }else{
                        alert("未知错误：" + XMLHttpRequest.status);
                    }
                },
                complete: function(XMLHttpRequest, textStatus) {
                    this; // 调用本次AJAX请求时传递的options参数
                }
            });
        });
    });
    </script>
</body>

</html>
