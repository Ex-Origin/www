<?php
include_once ('./config.php');
// 定义文件目录
define('SELF_FILE',__FILE__);

// 连接数据库
$conn = get_sql_conn();

?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="书是人类进步的阶梯，这里我推荐一些好书给大家。">
    <meta name="keywords" content="书籍,书籍下载,编程书籍">
    <title>推荐书籍</title>

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
                        <h2 class="page-title">书籍是人类进步的阶梯</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo (relative(SELF_FILE)); ?>index.php">首页</a></li>
                                <li class="active">编程书籍</li>
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
                <div class="col-md-offset-2 col-md-8">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1>推荐的书籍</h1>
                        <h5 class="small-title ">大家也可以自行提交链接，以供大家分享</h5>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <?php
            // 刚进入时
            if(!isset($_GET['type'])){
                $sql = 'select distinct type from book where is_used=1';
                $result = $conn->query($sql);

                while($row = $result->fetch_assoc()) {
                    echo '<a href="'.(relative(SELF_FILE)).'book.php?type='.urlencode($row['type']).'" class="list-group-item">'.htmlspecialchars($row['type']).'</a>';
                }
            }else{
                $sql = 'select name,url,remark from book where is_used=1 and type="' . addslashes($_GET['type']) .'"';
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    echo '<h1 class="text-center" style="margin-bottom:2em;">'.htmlspecialchars($_GET['type']).'</h1>';
                }

                while($row = $result->fetch_assoc()) {
                    echo '<div class="panel panel-success">';
                    echo '<div class="panel-heading">';
                    echo '<h3 class="panel-title">';
                    echo '<a>';
                    echo htmlspecialchars( $row['name']);
                    echo '</a>';
                    echo '</h3>';
                    echo '</div>';
                    echo '<div class="panel-body">';
                    echo 'URL: <a herf="' . $row['url'] . '" target="_blank">' . htmlspecialchars($row['url']) . '</a><br>';
                    echo '备注：' . htmlspecialchars($row['remark']);
                    echo '</div>';
                    echo '</div>';
                }
            }
            ?>

        </div>
    </div>

    <div class="space-small bg-primary">
        <!-- call to action -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-7 col-md-8 col-xs-12">
                    <h1 class="cta-title">欢迎大家提交自己的电子书籍链接</h1>
                    <div class="quote-content">
                        <blockquote>“让我们共建出一个丰富的书籍世界”</blockquote>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-5 col-md-4 col-xs-12">
                    <a id="share" class="btn btn-white btn-lg mt20">提交书籍</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- footer -->
    <?php include_once(ROOT_DIR.'template/footer.php'); ?>
    
    <!-- source_footer -->
    <?php include_once(ROOT_DIR.'template/source_footer.php'); ?>

    <!-- 模态框（Modal） -->
    <div class="modal fade" id="show-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title text-center" id="myModalLabel">提交书籍</h4>
                </div>
                <div class="modal-body">
                    <div class="input-group input-group-mg">
                        <span class="input-group-addon">书名</span>
                        <input type="text" class="form-control" id="book-name" autocomplete="off" placeholder="">
                    </div>
                    <br>
                    <div class="input-group input-group-mg">
                        <span class="input-group-addon">类别</span>
                        <input type="text" class="form-control" id="book-type" autocomplete="off" placeholder="">
                    </div>
                    <br>
                    <div class="input-group input-group-mg">
                        <span class="input-group-addon">书集链接</span>
                        <input type="text" class="form-control" id="book-url" autocomplete="off" placeholder="">
                    </div>
                    <br>
                    <div class="input-group input-group-mg">
                        <span class="input-group-addon">备注</span>
                        <input type="text" class="form-control" id="book-remark" autocomplete="off" placeholder="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" id="book-submit">提交</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <script> 
    $(document).ready(function(){
        $("#share").click(function(){
            $("#show-submit").modal('show');
        });
        $("#book-submit").click(function(){
            var name = $("#book-name").val();
            var type = $("#book-type").val();
            var url = $("#book-url").val();
            var remark = $("#book-remark").val();
            if(name == '' && type == '' && url == '' && remark == ''){
                $('#empty-content').modal('show');
                return;
            }
            jQuery.ajax({
                // 这里只能用绝对路径了
                url: "<?php echo (relative(SELF_FILE)); ?>book_submit.php",
                type: "post",
                dataType: "json",
                data: {
                    'name':name,
                    'type':type,
                    'url':url,
                    'remark':remark
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

<?php
// 关闭数据库
$conn->close();
?>
