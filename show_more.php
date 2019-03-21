<?php

include_once('./config.php');
// 定义文件目录
define('SELF_FILE',__FILE__);

?>

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
                <p>世界上最大的代码开源社区，任意源码，应有尽有。</p>
                <div class="link ">github.com</div>
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
                <p>学的不仅是技术，更是梦想！</p>
                <div class="link">www.runoob.com</div>
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
                <p>不仅仅是日常娱乐，里面还有很多编程入门视频，一个很良心的网站。</p>
                <div class="link ">www.bilibili.com</div>
            </div>
            <!-- service content -->
        </div>
        <!-- /.service block -->
    </div>
</div>