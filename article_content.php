<?php
include_once('./config.php');
// 定义文件目录
// 为了迎合重写规则
define('SELF_FILE',dirname(__FILE__) . str_replace(dirname(__FILE__),'/article_content',__FILE__));

$id = 0;
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id = (int)addslashes($_GET['id']);
}else{
    include_once ROOT_DIR . '403.html';
    header('HTTP/1.1 403 Forbidden');
    die();
}

// 连接数据库
$conn = get_sql_conn();

// 读取内容
$sql = "select title,introduction,time,markdown_content from article where id ='".(string)$id."'";
$result = $conn->query($sql);
if($result->num_rows <= 0){
    include_once ROOT_DIR . '403.html';
    header('HTTP/1.1 403 Forbidden');
    die();
}
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php echo $data['introduction']; ?>">
    <title><?php echo $data['title']; ?></title>
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
                        <h2 class="page-title"><?php echo $data['title']; ?></h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo (relative(SELF_FILE)); ?>index.php">首页</a></li>
                                <li><a href="<?php echo (relative(SELF_FILE)); ?>article.php">文章</a></li>
                                <li class="active"><?php echo $data['title']; ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">

            <article class="markdown"><?php echo htmlspecialchars($data['markdown_content']); ?></article>

        </div>
    </div>

    <!-- footer -->
    <?php include_once(ROOT_DIR.'template/footer.php'); ?>
    
    <!-- source_footer -->
    <?php include_once(ROOT_DIR.'template/source_footer.php'); ?>
</body>

</html>
<?php
$conn->close();
?>