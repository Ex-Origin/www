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
    <meta name="description" content="本站为您推荐编程的基础技术教程，同时本站中也提供了一些测试模块和工具，通过实例，您可以更好的学习编程。..">
    <meta name="keywords" content="编程技术,ctf,编程入门">
    <title>编程技术</title>
    
    <!-- source_header -->
    <?php include_once(ROOT_DIR.'template/source_header.php'); ?>
</head>

<body>
    <!-- header -->
    <?php include_once(ROOT_DIR.'template/header.php'); ?>

    <div class="hero-section" style="padding-top: 135px; padding-bottom: 135px; background: linear-gradient(rgba(36, 39, 38, 0.5), rgba(36, 39, 38, 0.5)), rgba(36, 39, 38, 0.5) url(<?php echo (relative(SELF_FILE)); ?>images/program.jpg) no-repeat center; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h1 class="hero-title">Shoot for the stars, so if you fall, you land on a cloud.</h1>
                    <p class="hero-text"><strong>飞向天空吧，即使坠落下来，接住你的也是云彩。</strong> </p>
                    <a href="<?php echo (relative(SELF_FILE)); ?>introduction/index.php" class="btn btn-default">开始学习</a> </div>
            </div>
        </div>
    </div>
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1>优秀的编程网站</h1>
                        <h5 class="small-title ">让编程更加简单，更加使用</h5>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="service-block">
                        <!-- service block -->
                        <div class="service-icon mb20">
                            <a href="https://github.com/" target="_blank" class="Github "><i class="fa fa-git" style="font-size:80px;color:#5d5c59;"></i></a>
                        </div>
                        <!-- service img -->
                        <div class="service-content">
                            <!-- service content -->
                            <h2><a href="https://github.com/" target="_blank" class="title ">Github</a></h2>
                            <div class="link ">github.com</div>
                            <p>世界上最大的代码开源社区，任意源码，应有尽有。</p>
                        </div>
                        <!-- service content -->
                    </div>
                    <!-- /.service block -->
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="service-block">
                        <!-- service block -->
                        <div class="service-icon mb20">
                            <a href="http://www.runoob.com/" target="_blank"><img src="http://static.runoob.com/images/favicon.ico" alt="菜鸟教程" style="width:80px"></a>
                        </div>
                        <!-- service img -->
                        <div class="service-content">
                            <!-- service content -->
                            <h2><a href="http://www.runoob.com/" target="_blank" class="title ">菜鸟教程</a></h2>
                            <div class="link">www.runoob.com</div>
                            <p>学的不仅是技术，更是梦想！</p>
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
                            <a href="https://www.bilibili.com/" target="_blank"><img src="<?php echo (relative(SELF_FILE)); ?>images/bilibili.png" style="width:80px" alt="bilibili"></a>
                        </div>
                        <!-- service img -->
                        <div class="service-content">
                            <!-- service content -->
                            <h2><a href="https://www.bilibili.com/" target="_blank" class="title ">B站</a></h2>
                            <div class="link ">www.bilibili.com</div>
                            <p>不仅仅是日常娱乐，里面还有很多编程入门视频，一个很良心的网站。</p>
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

    <div class="space-medium bg-default">
        <div class="container">

            <div class="row">
                <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                    <div class="section-title mb60 text-center">
                        <!-- section title start-->
                        <h1>简讯</h1>
                        <h5 class="small-title">力推好的文章。</h5>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><img src="<?php echo (relative(SELF_FILE)); ?>images/hacker.jpeg" alt="" class="img-responsive"></div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="well-block">
                        <h1>黑客技术如何从零学起？</h1>
                        <h5 class="small-title ">知乎 - 任晓珲</h5>
                        <p>我们经常看到媒体在报道时说国内某组织的某黑客在几秒内就攻破了IE浏览器，在几秒内就绕过了XX保护机制。但事实的真相是他们其实就是运行了一个自己准备好的代码而已，而媒体上说的这几秒钟的时间其实是代码的运行时间。据我说知，他们在参赛之前，整个团队为了这几秒钟的ShowTime，需要经历至少十余个甚至数十个不眠之夜，然后才能打造出可能仅有几百个字节的艺术品般的代码（也就是Exploit），最后才能拿去现场过五关斩六将。</p>
                        <p class="important">如果在这个十三亿人口的国度里最牛逼的黑客都需要如此付出，那么作为目前默默无闻的你来说，想要学会这门技术应该需要多少个不眠之夜呢？</p>
                        <a href="# " class="btn btn-default">阅读全文</a> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="tlinks">Collect from <a href="http://www.cssmoban.com/" >建站模板</a></div> -->
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                    <div class="section-title mb60 text-center">
                        <!-- section title start-->
                        <h1>友情链接</h1>
                        <h5 class="small-title">推荐优秀的外链</h5>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="inbound-link">
                <a href="http://www.xmcve.com/" target="_blank">
                    <div class="alert alert-info" role="alert">
						<strong>星盟安全团队 </strong>很强很厉害 www.xmcve.com
				    </div>    
				</a>
                <a href="http://movie.jxesk.cn/" target="_blank">
					<div class="alert alert-warning" role="alert">
						<strong>贝壳影视 </strong>免费播放VIP视频，支持在线观看 movie.jxesk.cn
				    </div>    
                </a>
                
                <a href="https://www.dytt8.net/" target="_blank">
                    <div class="alert alert-danger" role="alert">
					    <strong>电影天堂 </strong>最好的迅雷电影下载网，分享最新电影，高清电影、综艺、动漫、电视剧等下载！ www.dytt8.net
				    </div>    
				</a>
            </div>

        </div>
    </div>
    <div class="cta-section" 
        style="background: linear-gradient(rgba(30,28,24,0.8),rgba(30,28,24,0.8)),rgba(30,28,24,0.8) url(<?php echo (relative(SELF_FILE)); ?>images/program2.jpg) no-repeat center"
    >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="cta-title">Nothing is impossible</h1>
                    <p class="cta-text">世上无难事，只怕有心人。现在就开始学习把。</p>
                    <a href="<?php echo (relative(SELF_FILE)); ?>introduction/index.php" class="btn btn-default" target="_blank">开始学习</a> </div>
            </div>
        </div>
    </div>
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                    <div class="section-title mb40 text-center">
                        <!-- section title start-->
                        <h1 class="important">思想启蒙</h1>
                        <h5 class="small-title">能和自己内心产生共鸣的鸡汤，往往能加快我们的意识觉醒</h5>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            
            <div class="panel panel-success">
                <div class="panel-body">
                    <p class="paragraph">It doesn't matter how smart you are, someone is always smarter. If you really wants to grow strong, then you're going to need all the help you can get.</p>
                    <p class="paragraph">不管你有多么聪明，总有人比你更聪明。如果你想变得更强，那就必须得到能得到的一切帮助。</p>
                </div>
                <div class="panel-footer"><h3 class="panel-title text-right">————《The Imitation Game》Joan（有改动）</h3></div>
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
                url: "<?php echo (relative(SELF_FILE)); ?>show_more.php",
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
