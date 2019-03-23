<?php
/**
 * Created by PhpStorm.
 * User: ex
 * Date: 9/2/18
 * Time: 6:12 PM
 */

function content($dir)
{
    preg_match('/[\d]+\z/',$dir,$result);

    $id=(int)$result[0];

    $path='../../../';

    require_once $path.'template/message.php';

    $site='ctf';

    $conn=new mysqli('****','****','****','****');
    $conn->query("SET NAMES utf8");


    preg_match('/(?<=\/)[a-zA-Z]{1,10}(?=\/[\d]+\z)/',$dir,$result);
    $type=$result[0];

    get_message($conn,$site);



    if(isset($_POST['comment']))
    {
        $comment=$_POST['comment'];
        if(strlen($comment)>200*3)
        {
            echo '<script>alert("您输入的字符太长了！")</script>';
        }

        $comment=str_replace('"','\"',$comment);

        $sql='insert into ctf_comment (type_id,ip,words,time)values('.(string)$id.',"'.$_SERVER['REMOTE_ADDR'].'","'.$comment.'","'.date('Y-m-d H:i:s').'")';
        $conn->query($sql);
    }
    echo '<!DOCTYPE html>';
    echo '<html>' ;
    echo '<head>';

    $sql='select title from article where id='.(string)$id;
    $result= $conn->query($sql)->fetch_all();
    $title=$result[0][0];
    echo '<title>'.$title.'</title>';

    $sql='select words from ctf_article_words where type_id='.(string)$id.' order by words_num';
    $article= $conn->query($sql)->fetch_all();
    $description = $article[0][0];
    echo '<meta name="description" content="'.preg_replace('/<.*?>/u','',$description).'"/>';
    echo '<meta name="keywords" content="'.$title.','.$type.',ctf,ctf博客">';

    echo <<<EOF
<style>
.hljs {
	border: 0;
	font-family: "Consulas", "Courier New", Courier, mono, serif;
	display: block;
	padding: 1px;
	margin: 0;
	width: 100%;
	font-weight: 200;
	white-space: pre-wrap
}
.hljs ul {
	list-style: decimal;
	margin: 0px 0px 0 40px !important;
	padding: 0px;
}
.hljs ul li {
	list-style: decimal-leading-zero;
	border-left: 1px solid #ddd !important;
	padding: 5px!important;
	margin: 0 !important;
	word-break: break-all;
	word-wrap: break-word;
}
.hljs ul li:hover{
	background:darkslategrey;
}
.hljs ul li:nth-of-type(even) {
	color: inherit;
}

@media (min-width: 370px){
    .back{
        background: url(https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1536370217&di=ea187d397ff28f909e635d94c9082d75&imgtype=jpg&er=1&src=http%3A%2F%2Fimg.tupianzj.com%2Fuploads%2FBizhi%2Fxk40_2560.jpg);
    }
    .back2{
        border-color: black;
        background-color: white;
        
    }
}
@media (max-width: 370px){
    .back{
        background: url(https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1536378391&di=9bacc047a7288c280f5c02e26521d045&imgtype=jpg&er=1&src=http%3A%2F%2Fimg5.duitang.com%2Fuploads%2Fitem%2F201508%2F27%2F20150827222812_cJmBP.jpeg);
    }
    div.back2{
        margin: 5px;
        border-color: white;
        background: white;
    }
}
.back{
    background-size: 100%;
    background-attachment: fixed;
}
.back2{
    border-radius: 25px;
    border-style: solid;
    border-width: 5px;
}

div h2{
    margin-top: 20px;
    margin-bottom: 10px;
}
div h5{
    margin-top: 20px;
    margin-bottom: 10px;
}
table {
    font-family: verdana,arial,sans-serif;
    font-size:18px;
    color:#333333;
    border-width: 1px;
    border-color: #666666;
    border-collapse: collapse;
}
table th {
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #666666;
    background-color: #dedede;
}
table td {
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #666666;
    background-color: #ffffff;
}

</style>

<script src="https://cdn.staticfile.org/highlight.js/9.13.1/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
EOF;
    echo '<link rel="stylesheet" href="'.$path.'css/vs2015.css">';

    echo '<link href="'.$path.'css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />';
    echo '<link href="'.$path.'css/style.css" rel="stylesheet" type="text/css" media="all" />';

    include_once $path.'template/head.html';

    echo '</head>';

    echo '<body>';

    echo "<div class=\"banner1\" style=\"background-image: url('https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1536674572&di=86e0b63f7d3e216314bb4afededd7932&imgtype=jpg&er=1&src=http%3A%2F%2Fi9.download.fd.pchome.net%2Ft_1600x1200%2Fg1%2FM00%2F0C%2F15%2FooYBAFRu9MaIKnNYAARX6_i9J5YAACGXQOm9kwABFgD510.jpg')\">";

    echo '<div class="container">';
    echo    '<div class="logo">';
    echo        '<a href="'.$path.$site.'">CTF<span>Find Your Home</span></a>';
    echo    '</div>';
    echo <<<EOF
			<div class="navigation">
				<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
EOF;

nav_show($site,$path);

echo <<<EOF
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
    </div>
			
EOF;
//查询评论是否被注入
    $sql='select time,words from ctf_comment where type_id='.(string)$id;
    $ctf_comment=$conn->query($sql)->fetch_all();
    $sum=count($ctf_comment);
    if($sum%10)
    {
        $sum=(int)($sum/10)+1;
    }
    else
    {
        $sum=(int)($sum/10);
        if($sum==0)
        {
            $sum=1;
        }
    }
    $com=1;
    if(isset($_GET['com']))
    {
        $com=(int)$_GET['com'];
        if($com<=0||$com>$sum)
        {
            header('HTTP/1.1 404');
            require_once $path.'template/404.html';
            messge_and_taili($site,$conn,$path);
            exit(0);
        }
    }

    $sql='select title,time,url from article where id='.(string)$id;
    $prev=$conn->query($sql)->fetch_all();//前缀



    echo <<<EOF

<!-- single -->
	<div class="single back" >
		<div class="container back2" style="padding-top: 60px" >
			<div class="single-grids">
				<div style="width: 100%" class="col-md-7 single-grid-left">
EOF;
    echo '<h3 style="text-align: center">'.$prev[0][0].'</h3>';
    echo '<p style="text-align: right" class="admin">日期：<span>'.$prev[0][1].'</span></p>';
    echo '<img style="border-radius: 15px" src="'.$prev[0][2].'" alt=" "  class="img-responsive" />';

    //文章正文
    for($i=0;$i<count($article);$i++)
    {
        if($article[$i][0][0]=='<')
        {
            echo $article[$i][0];
        }
        else
        {
            echo '<p style="font-size: 18px;margin-top: 20px;line-height: 1.4em;color: black" class="sequi">&emsp;&emsp;'.$article[$i][0].'</p>';
        }
    }
    echo <<<EOF
						<a href="#" onclick="javascript:history.back(-1);"><h3 style="text-align: center;margin-top: 200px">返回上一页</h3></a>
					<div class="related-posts">
						<h4>最近评论</h4>
EOF;

    for($i=0;$i<count($ctf_comment);$i++)
    {
        echo    '<div class="related-posts-grid-left">
					<img src="'.$path.'images/user.png" alt="消息图标" class="img-responsive" style="margin: auto">
			    </div>';
        echo '<div class="related-posts-grid">';
        echo '    <div class="related-posts-grid-right">';
        echo '<h5><span>'.$ctf_comment[$i][0].'</span></h5>';
        echo '<p>'.htmlspecialchars($ctf_comment[$i][1]).'</p>';
        echo '</div>';
        echo '	<div class="clearfix"> </div>';
        echo '</div>';

    }

    if(count($ctf_comment)==0)
    {
        echo '<div class="related-posts-grid">';
        echo '    <div class="related-posts-grid-right">';
        echo '<h5>None</h5>';
        echo '</div>';
        echo '	<div class="clearfix"> </div>';
        echo '</div>';
    }



    if($com<$sum&&$com>1)
    {
        echo '<p style="text-align: center">第'.(string)$com.'页/共'.(string)$sum.'页&ensp;<a href=".?com='.(string)($com-1).'">上一页</a>&ensp;<a href=".?com='.(string)($com+1).'">下一页</a></p>';
    }
    else if($com<=1&&$com<$sum)
    {
        echo '<p style="text-align: center">第'.(string)$com.'页/共'.(string)$sum.'页&ensp;<a>上一页</a>&ensp;<a href=".?com='.(string)($com+1).'">下一页</a></p>';
    }
    else if($com>=$sum&&$com>1)
    {
        echo '<p style="text-align: center">第'.(string)$com.'页/共'.(string)$sum.'页&ensp;<a href=".?com='.(string)($com-1).'">上一页</a>&ensp;<a>下一页</a></p>';
    }
    else
    {
        echo '<p style="text-align: center">第'.(string)$com.'页/共'.(string)$sum.'页&ensp;<a>上一页</a>&ensp;<a>下一页</a></p>';
    }

    echo <<<EOF
					</div>
					<div class="leave-reply">
						<h4>评论</h4>
EOF;
    echo '<form action="." method="post">';
    echo <<<EOF
							<textarea id="comment" style="min-height: 150px" placeholder="欢迎留下您的评论" required=" " maxlength="200" name="comment"></textarea>
							<div class="clearfix"> </div>
							<input type="submit" value="发表评论" style="margin-bottom: 15px">
						</form>
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //single -->
EOF;


    messge_and_taili($site,$conn,$path);
}












function type_show($type)
{
    $path='../../';

    require_once $path.'template/message.php';
    $site='ctf';

    $conn=new mysqli('****','****','****','****');
    $conn->query("SET NAMES utf8");




    $sql='select count(*) from article where type="'.$type.'"';
    $site_amount=$conn->query($sql)->fetch_all();
    $site_amount=$site_amount[0][0];
    if($site_amount%9==0)
    {
        $site_amount=(int)($site_amount/9);
        if($site_amount==0)
        {
            $site_amount=1;
        }

    }
    else
    {
        $site_amount=(int)($site_amount/9)+1;
    }

    get_message($conn,$site);


    $description=array(
        're'=>'逆向工程，有的人也叫反求工程，英文是reverse engineering，大意是根据已有的东西和结果，通过分析来推导出具体的实现方法。',
        'web'=>'渗透测试是通过模拟恶意黑客的攻击方法，来评估计算机网络系统安全的一种评估方法。',
        'cryptography'=>'各种加密解密技术，包括古典加密技术，现代加密技术，甚至自创加密技术。',
        'miscellaneous'=>'流量分析，电子取证，人肉搜索，数据分析，大数据统计等等。',
        'program'=>'考验编程功底，程序编写，编程算法实现。',
        'pwn'=>'”Pwn”是一个黑客语法的俚语词，是指攻破设备或者系统。发音类似“砰”，对黑客而言，这就是成功实施黑客攻击的声音——砰的一声，被“黑”的电脑或手机就被你操纵了。',
        'steganorgraphy'=>'隐写术是一门关于信息隐藏的技巧与科学，所谓信息隐藏指的是不让除预期的接收者之外的任何人知晓信息的传递事件或者信息的内容。'
    );

    $keywords=array(
        're'=>'re,RE,逆向,逆向工程',
        'web'=>'渗透,渗透测试',
        'cryptography'=>'密码,密码学',
        'miscellaneous'=>'misc,安全杂项',
        'program'=>'编程,编程挑战',
        'pwn'=>'溢出,溢出漏洞,溢出攻击',
        'steganorgraphy'=>'隐写,隐写术'
    );

    $title=array(
        're'=>'逆向工程',
        'web'=>'渗透测试',
        'cryptography'=>'密码学',
        'miscellaneous'=>'安全杂项',
        'program'=>'编程挑战',
        'pwn'=>'溢出攻击',
        'steganorgraphy'=>'隐写术'
    );

    $p=array(
        're'=>'通过对原软件进行反汇编/数据结构重建，然后理解程序的意图。',
        'web'=>'渗透是测试注重于技巧的把握，以及强大的发散性思维。',
        'cryptography'=>'Autokey密码 ，置换密码 ，二字母组代替密码 (by Charles Wheatstone) ，多字母替换密码 ，希尔密码 ，维吉尼亚密码 ，替换密码 ，凯撒密码 ，ROT13 ，仿射密码 ，Atbash密码 ，换位密码 ，Scytale ',
        'miscellaneous'=>'流量分析，电子取证，人肉搜索，数据分析，大数据统计等等',
        'program'=>'考验编程功底，程序编写，编程算法实现',
        'pwn'=>'”Pwn”是一个黑客语法的俚语词，是指攻破设备或者系统。发音类似“砰”，对黑客而言，这就是成功实施黑客攻击的声音——砰的一声，被“黑”的电脑或手机就被你操纵了。',
        'steganorgraphy'=>'不要让别人发现你的秘密。'
    );

    echo <<<EOF
<!DOCTYPE html>
<html>
<head>
EOF;

    echo '<title>'.$title[$type].'</title>';
    echo '<meta name="description" content="'.$description[$type].'"/>';
    echo '<meta name="keywords" content="'.$keywords[$type].'">';

echo <<<EOF
<style>
@media (min-width: 992px){
    div.col-md-4 {
    width: 33.33333333%;
    
  }
  div.new1{
    width:50%;
  }
}
</style>
EOF;

    echo '<link href="'.$path.'css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />';
    echo '<link href="'.$path.'css/style.css" rel="stylesheet" type="text/css" media="all" />';

    include_once $path.'template/head.html';

    echo '</head>';

    echo '<body>';

    echo "<div class=\"banner1\" style=\"background-image: url('https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1536674572&di=86e0b63f7d3e216314bb4afededd7932&imgtype=jpg&er=1&src=http%3A%2F%2Fi9.download.fd.pchome.net%2Ft_1600x1200%2Fg1%2FM00%2F0C%2F15%2FooYBAFRu9MaIKnNYAARX6_i9J5YAACGXQOm9kwABFgD510.jpg')\">";

    echo '<div class="container">';
    echo    '<div class="logo">';
    echo        '<a href="'.$path.$site.'">CTF<span>Find Your Home</span></a>';
    echo    '</div>';
    echo <<<EOF
			<div class="navigation">
				<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav class="cl-effect-13" id="cl-effect-13">
EOF;

    nav_show($site,$path);

    echo <<<EOF
						</nav>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
        </div>
    </div>
EOF;

    $page=1;
    if(isset($_GET['page']))
    {
        $page=(int)$_GET['page'];
        if($page<=0 || $page >$site_amount)
        {
            header('HTTP/1.1 404');
            require_once $path.'template/404.html';
            ctf_messge_and_taili($site,$conn,$path);
            exit(0);
        }
    }
//这里面是内容
    echo <<<EOF
       
<!-- news -->
	<div class="news">
		<div class="container">
			
			
				
				
			
			
			
EOF;
    echo '<h3>'.$title[$type].'</h3>';
    echo '<p class="dolore">'.$p[$type].'</p>';
    echo '<div class="news-grids">';



    $sql='select time,title,words,url,id from article where type="'.$type.'" order by time desc limit '.(string)(($page-1)*9).',9';
    $_site=$conn->query($sql)->fetch_all();

    $counts=0;
    for($i=0;$i<3;$i++)
    {
        echo '<div>';
        for($ii=0;$ii<3&&$counts<count($_site);$ii++)
        {
            echo <<<EOF
                <div class="col-md-4 news-grid" style="margin-bottom: 20px">
					<div class="news-grid1">
						<div class="news-grid1-sub">
							<h4><span  class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
EOF;
            echo $_site[$counts][0];
            echo '</h4>';
            echo '<h5 style="text-align: center"><a href="'.$_site[$counts][4].'">'.$_site[$counts][1].'</a></h5>';
            echo '<p>'.$_site[$counts][2].'  [....]</p>';
            echo '</div><img src="'.$_site[$counts][3].'" alt=" " class="img-responsive" />';

            echo '<ul>';

            $sql='select count(*) from ctf_comment where type_id='.$_site[$counts][4];
            $result1=$conn->query($sql)->fetch_all();
            $result1=$result1[0][0];

            echo '<li><span style="left: -0.5em" class="glyphicon glyphicon-random" aria-hidden="true"></span>'.(string)$result1.'</li>';

            $counts++;
            echo <<<EOF
							
							<div class="cleafix"> </div>
						</ul>
					</div>
				</div>
EOF;

        }
        echo '<div class="clearfix"> </div>
                </div>';
    }

    echo <<<EOF
				
			</div>
		</div>
	</div>
EOF;
    if($page<$site_amount&&$page>1)
    {
        echo '<p style="text-align: center">第'.(string)$page.'页/共'.(string)$site_amount.'页&ensp;<a href=".?page='.(string)($page-1).'">上一页</a>&ensp;<a href=".?page='.(string)($page+1).'">下一页</a></p>';
    }
    else if($page<=1&&$page<$site_amount)
    {
        echo '<p style="text-align: center">第'.(string)$page.'页/共'.(string)$site_amount.'页&ensp;<a>上一页</a>&ensp;<a href=".?page='.(string)($page+1).'">下一页</a></p>';
    }
    else if($page>=$site_amount&&$page>1)
    {
        echo '<p style="text-align: center">第'.(string)$page.'页/共'.(string)$site_amount.'页&ensp;<a href=".?page='.(string)($page-1).'">上一页</a>&ensp;<a>下一页</a></p>';
    }
    else
    {
        echo '<p style="text-align: center">第'.(string)$page.'页/共'.(string)$site_amount.'页&ensp;<a>上一页</a>&ensp;<a>下一页</a></p>';
    }

    echo <<<EOF
	<div class="testimonials">
		<div class="container">
			<h3><span>宝剑锋从磨砺出，</span>梅花香自苦寒来</h3>
			<p class="dolore">现在不好好学习，以后和那些清华、北大的有什么两样。</p>
		</div>
	</div>
EOF;




    ctf_messge_and_taili($site,$conn,$path);


}