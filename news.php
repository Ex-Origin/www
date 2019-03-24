<?php
include_once('./config.php');
// 定义文件目录
define('SELF_FILE',__FILE__);

// 定义一次显示的消息数量
define('SHOW_NUM',10);

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
    <meta name="description" content="简讯">
    <meta name="keywords" content="简讯">
    <title>简讯</title>
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
                        <h2 class="page-title">编程文章</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="<?php echo (relative(SELF_FILE)); ?>index.php">首页</a></li>
                                <li class="active">简讯</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">

            <?php
            $page=1;
            if(isset($_GET['page']) ){
                $temp = addslashes($_GET['page']);
                if(is_numeric($temp)){
                    $page=(int)$temp;
                }
            }

            $sql = "select title,introduction,time,id from news order by time desc , id desc limit ".(string)($page * SHOW_NUM - SHOW_NUM).",".(string)SHOW_NUM;
            $result = $conn->query($sql);
            while($result->num_rows > 0 && $row = $result->fetch_assoc()) {
            ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="service-bottom-right1">
                        <a href="<?php echo (relative(SELF_FILE)); ?>news_content/<?php echo urlencode($row['id']); ?>.html">
                            <h4><?php echo $row['title']; ?></h4>
                        </a>
                        <p><?php echo $row['introduction']; ?></p>
                        <h5 class="small-title text-right">时间：<?php echo $row['time']; ?></h5>
                    </div>
                </div>
            </div>

            <?php
            }
            ?>

            <?php
            $sql = "select count(*) from news";
            $result = $conn->query($sql);
            if($result->num_rows <= 0){
                $all_log_num = 0;
            }else{
                $result = $result->fetch_all();
                $all_log_num = $result[0][0];
            }
            $head = $page<=1?true:false;
            $tail = ceil($all_log_num/SHOW_NUM)<=$page?true:false;
            ?>

            <p style="text-align:center">
                第<?php echo (string)$page; ?>页/共<?php echo ceil($all_log_num/SHOW_NUM); ?>页
            </p>
            <p style="text-align:center;margin-bottom:3em;">
                <a href="<?php echo (relative(SELF_FILE)); ?>news.php?page=1" class="btn btn-primary">首页</a>
                <a <?php if(!$head){echo 'href="'.(relative(SELF_FILE)).'news.php?page='.(string)($page-1).'"';} ?> class="btn btn-primary <?php if($head){echo "disabled";} ?>">上一页</a>
                <a <?php if(!$tail){echo 'href="'.(relative(SELF_FILE)).'news.php?page='.(string)($page+1).'"';} ?> class="btn btn-primary <?php if($tail){echo "disabled";} ?>">下一页</a>
                <a href="<?php echo (relative(SELF_FILE)); ?>news.php?page=<?php echo ceil($all_log_num/SHOW_NUM); ?>" class="btn btn-primary">末页</a>
            </p>

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