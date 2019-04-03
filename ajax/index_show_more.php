<?php

include_once('../config.php');
// 定义文件目录
define('SELF_FILE',__FILE__);

?>

<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="service-block">
            <!-- service block -->
            <div class="service-icon mb20">
                <a href="https://www.csdn.net/" target="_blank" class="csdn "><img src="<?php echo (relative(SELF_FILE)); ?>images/csdn.ico" alt="CSDN" style="width:80px"></a>
            </div>
            <!-- service img -->
            <div class="service-content">
                <!-- service content -->
                <h2><a href="https://www.csdn.net/" target="_blank" class="title ">CSDN</a></h2>
                <p>专业IT技术发表平台，支持ckeditor及markdown，300万技术博主的共同选择</p>
                <div class="link ">www.csdn.net</div>
            </div>
            <!-- service content -->
        </div>
        <!-- /.service block -->
    </div>
</div>