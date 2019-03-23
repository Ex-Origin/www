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
    <meta name="description" content="如果有任何介意，欢迎联系站长。">
    <meta name="keywords" content="编程,编程技术,Ex">
    <title>联系站长</title>
    
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
                        <h2 class="page-title">联系站长</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo (relative(SELF_FILE)); ?>index.php">首页</a></li>
                                <li class="active">联系站长</li>
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
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="widget widget-contact">
                        <!-- widget search -->
                        <h3 class="widget-title">站长信息</h3>

                        <div style="text-align:center;margin:1.5em;">
                            <img style="width:80px;border-radius: 100%;" src="<?php echo (relative(SELF_FILE)); ?>images/ex.jpg"/>
                            <br/>
                            <h3 class="label label-success">站长： Ex</h3>
                        </div>

                        <ul class="listnone contact">
                            <li><i class="fa fa-map-marker"></i> 南昌大学科学技术学院（共青校区） </li>
                            <li><i class="fa fa-qq"></i> 站长QQ： 2462148389 </li>
                            <li><i class="fa fa-qq"></i>官方Q群： 972125311</li>
                            <li><i class="fa fa-phone"></i> +86 15170926263</li>
                            <li><i class="fa fa-envelope-o"></i> 2462148389@qq.com</li>
                        </ul>
                    </div>
                    <!-- /.widget search -->
                    <div class="widget widget-social">
                        <div class="social-circle">
                            <a href="https://github.com/Ex-Origin/" target="_blank"> <i class="fa fa-github"></i> </a>
                            <a href="https://space.bilibili.com/150029101" target="_blank"><img style="width:20px" src="https://space.bilibili.com/favicon.ico"/></a>
                            <a href="http://blog.eonew.cn/" target="_blank"><img style="width:20px" src="http://blog.eonew.cn/favicon.ico"/></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1>给站长发邮件</h1>
                            <p> 请尽量完成下面的表格，我会尽快的回复您。</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label" for="name">名字</label>
                                    <input type="text" name="name" id="name" placeholder="" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="phone">电话</label>
                                    <input type="text" name="phone" id="phone" placeholder="" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="email">邮件</label>
                                    <input type="text" name="email" id="email" placeholder="" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label" for="Subject">主题</label>
                                    <input type="text" name="Subject" id="subject" placeholder="" class="form-control">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label" for="textarea">消息</label>
                                        <textarea class="form-control" id="content" name="textarea" rows="6" placeholder=""></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <button id="singlebutton" name="singlebutton" class="btn btn-default">发送消息</button>
                                    </div>
                                </div>
                            </div>
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

    <!-- 模态框（Modal） -->
    <div class="modal fade" id="empty-content-contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title error" id="myModalLabel">提交错误</h4>
                </div>
                <div class="modal-body">消息不能为空，请填写后再提交。</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <script> 
    $(document).ready(function(){
        $("#singlebutton").click(function(){
            var name = $("#name").val();
            var phone = $("#phone").val();
            var email = $("#email").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            if(content == ''){
                $('#empty-content-contact').modal('show');
                return;
            }
            jQuery.ajax({
                url: "<?php echo (relative(SELF_FILE)); ?>contact_submit.php",
                type: "post",
                dataType: "json",
                data: {
                    'name':name,
                    'phone':phone,
                    'email':email,
                    'subject':subject,
                    'content':content
                },
                success: function(msg) {
                    $('#success200').modal('show');
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    if(XMLHttpRequest.status == 403){
                        $('#error403').modal('show');
                    }else if(XMLHttpRequest.status == 404){
                        $('#error404').modal('show');
                    }else if(XMLHttpRequest.status == 500){
                        $('#error500').modal('show');
                    }else if(XMLHttpRequest.status == 200){
                        $('#success200').modal('show');
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
