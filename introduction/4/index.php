<?php
$path='../../';
$site='introduction';

require_once '../all.php';
require_once $path.'template/message.php';

$conn=new mysqli('****','****','****','****');
$conn->query("SET NAMES utf8");


get_message($conn,$site);

echo <<<EOF
<!DOCTYPE html>
<html>
<head>
<title>编程入门</title>
<meta name="description" content="本站推荐了很多优秀的编程教学视频。"/>
<meta name="keywords" content="编程,编程入门,自学编程,编程视频">
<script>
function change(num) {
    if (window.XMLHttpRequest)
    {
        // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行的代码
        xmlhttp=new XMLHttpRequest();
    }
    else
    {    
        //IE6, IE5 浏览器执行的代码
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            var s=xmlhttp.responseText;
            s=s.split("`@");
            var ii=0;
            for(var i=0;i<4;i++){
                document.getElementById("word"+i.toString()).innerHTML=s[ii++];
                document.getElementById("time"+i.toString()).innerHTML=s[ii++];
            }
        }
    }
    xmlhttp.open("GET",".?num="+num.toString(),true);
    xmlhttp.send();
}
function add() {
    var sum=Number( document.getElementById("sum").innerHTML);
  var po=Number( document.getElementById("position").innerHTML);
  if(po<sum){
      po++;
      change(po);
      document.getElementById("position").innerHTML=po.toString();
  }
}
function sub() {
    var sum=Number( document.getElementById("sum").innerHTML);
  var po=Number( document.getElementById("position").innerHTML);
  if(po>1&&po<=sum&&sum!=1){
      po--;
      change(po);
      document.getElementById("position").innerHTML=po.toString();
  }
}

function addWords() {
    if (window.XMLHttpRequest)
    {
        // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行的代码
        xmlhttp=new XMLHttpRequest();
    }
    else
    {    
        //IE6, IE5 浏览器执行的代码
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  var str=document.getElementById("in").value;
  xmlhttp.open("GET",".?words="+str,true);
  xmlhttp.send();
  document.getElementById("in").value='';
  setTimeout("change(1)",400);
}
</script>
<style>
div.service-bottom {
    padding: 3em 0 0;
}
</style>
<script src="../../js/jquery-1.11.1.min.js"></script>
<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />
EOF;

include_once '../../template/head.html';

echo '</head>';

echo '<body>';

echo '<div class="banner1" style="background-image: url(\''.get_picture_url().'\')">';
echo <<<EOF
		<div class="container">
			<div class="logo">
				<a href="..">编程入门<span>Find Your Home</span></a>
			</div>
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

echo <<<EOF
<!-- services -->
	<div class="services">
		<div class="container">
			<h3><span>编程</span>语言</h3>
			<p class="dolore">在多如繁星的编程语言中，总有适合你的语言。</p>
			
			<div class="service-bottom">
				<div class="col-md-6 service-bottom-left banner-bottom-grid-left">
					<figure class="effect-moses">
						<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1536676594&di=317bd3de57e4cc6e233a47c62692e06b&imgtype=jpg&er=1&src=http%3A%2F%2Fimg.pconline.com.cn%2Fimages%2Fphotoblog%2F8%2F4%2F0%2F2%2F8402006%2F20095%2F31%2F1243750897890.jpg" alt=" " class="img-responsive" />
						<figcaption>
							<h2>计算机组成原理</h2>
							<p>来源：哔哩哔哩</p>
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-6 service-bottom-right">
					<div class="service-bottom-right1">
						<a target="_blank" href="https://www.bilibili.com/video/av24033143/?p=1">
						<h4>[哈工大]计算机组成原理-刘宏伟</h4></a>
						<p>虽然课程画质不怎么好，但是刘宏伟老师讲的还是非常不错的。</p>
						<p>玩CTF的推荐了解这个，越了解底层可以对计算机行业理解的更深。</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="service-bottom">
				<div class="col-md-6 service-bottom-left banner-bottom-grid-left">
					<figure class="effect-moses">
						<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1538359991&di=74bbbbb3ad54dd4ef48729603e3f6b75&imgtype=jpg&er=1&src=http%3A%2F%2Fpic1.win4000.com%2Fwallpaper%2F6%2F59bf23d915097.jpg" alt=" " class="img-responsive" />
						<figcaption>
							<h2>操作系统</h2>
							<p>来源：哔哩哔哩</p>
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-6 service-bottom-right">
					<div class="service-bottom-right1">
						<a href="https://www.bilibili.com/video/av6538245/?p=1" target="_blank">
						<h4>操作系统_清华大学(向勇、陈渝)</h4></a>
						<p>操作系统（Operating System，简称OS）是管理和控制计算机硬件与软件资源的计算机程序，是直接运行在“裸机”上的最基本的系统软件，任何其他软件都必须在操作系统的支持下才能运行。</p>
						<p>玩CTF的再推荐了解这个，越了解底层可以对计算机行业理解的更深。</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="service-bottom">
				<div class="col-md-6 service-bottom-left banner-bottom-grid-left">
					<figure class="effect-moses">
						<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1536676700&di=06a19b030a530ea0872df2a71aa6a581&imgtype=jpg&er=1&src=http%3A%2F%2Fpic1.win4000.com%2Fwallpaper%2F0%2F57c013029f1f5.jpg" alt=" " class="img-responsive" />
						<figcaption>
							<h2>人工智能</h2>
							<p>来源：哔哩哔哩</p>
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-6 service-bottom-right">
					<div class="service-bottom-right1">
						<a href="https://www.bilibili.com/video/av26890839/?p=1" target="_blank">
						<h4>人工智能开发课程【尚学堂·百战程序员201805版】</h4></a>
						<p>新世界的起点，还是人类的终点。无论如何这都是人类的进化，进化的趋势不可阻挡。</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<p class="dolore">如果这些你都学过，那么你不再是菜鸟了。</p>
			
			
			<nav style="text-align: center">
			  <ul class="pagination pagination-lg">
				<li><a href="../">1</a></li>
				<li><a href="../2">2</a></li>
				<li><a href="../3">3</a></li>
				<li class="active"><a>4</a></li>
			  </ul>
			</nav>
		</div>
	</div>
<!-- //services -->
EOF;

messge_and_tail($site,$conn);

