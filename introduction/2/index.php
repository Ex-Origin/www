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
						<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1536676055&di=4321104a4c1b110e3b04f52e89b1225f&imgtype=jpg&er=1&src=http%3A%2F%2Fattach.bbs.miui.com%2Fforum%2F201606%2F11%2F010523jhkdkk3l30350xg0.jpg" alt=" " class="img-responsive" />
						<figcaption>
							<h2>数据结构</h2>
							<p>来源：哔哩哔哩</p>
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-6 service-bottom-right">
					<div class="service-bottom-right1">
						<a href="https://www.bilibili.com/video/av2975983/?p=1" target="_blank"><h4>（完结）（小甲鱼）数据结构和算法</h4></a>
						<p>数据结构是计算机存储、组织数据的方式。数据结构是指相互之间存在一种或多种特定关系的数据元素的集合。通常情况下，精心选择的数据结构可以带来更高的运行或者存储效率。数据结构往往同高效的检索算法和索引技术有关。

</p><p>把数据结构学扎实了，将更有利于自己的提升，站长觉得这个很重要。</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="service-bottom">
				<div class="col-md-6 service-bottom-left banner-bottom-grid-left">
					<figure class="effect-moses">
						<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1536676082&di=6116062403a9ad2fd913f78ad3f2d287&imgtype=jpg&er=1&src=http%3A%2F%2Fold.bz55.com%2Fuploads%2Fallimg%2F140701%2F1-140F1095637.jpg" alt=" " class="img-responsive" />
						<figcaption>
							<h2>数据库</h2>
							<p>来源：哔哩哔哩</p>
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-6 service-bottom-right">
					<div class="service-bottom-right1">
						<a target="_blank" href="https://www.bilibili.com/video/av14716238/?p=1"><h4>【IT】MySQL入门视频【全】</h4></a>
						<p>MySQL 是最流行的关系型数据库管理系统，在WEB应用方面 MySQL 是最好的RDBMS(Relational Database Management System：关系数据库管理系统)应用软件之一。</p>
						<p>使用数据库系统的好处很多，列如，可以大大提高应用开发的效率，方便用户使用，减轻数据库系统管理人员维护负担，等等。</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="service-bottom">
				<div class="col-md-6 service-bottom-left banner-bottom-grid-left">
					<figure class="effect-moses">
						<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1536676156&di=eb2910a57032b6cf55824f2a77fa1ec9&imgtype=jpg&er=1&src=http%3A%2F%2Fpic1.win4000.com%2Fwallpaper%2F9%2F5912d5b7855f8.jpg" alt=" " class="img-responsive" />
						<figcaption>
							<h2>HTML</h2>
							<p>来源：哔哩哔哩</p>
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-6 service-bottom-right">
					<div class="service-bottom-right1">
						<a target="_blank" href="https://www.bilibili.com/video/av10257787/?p=1"><h4>【极客学院】HTML5基础教学</h4></a>
						<p>超文本标记语言（英语：HyperText Markup Language，简称：HTML）是一种用于创建网页的标准标记语言。</p>
						<p>您可以使用 HTML 来建立自己的 WEB 站点，HTML 运行在浏览器上，由浏览器来解析。</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="service-bottom">
				<div class="col-md-6 service-bottom-left banner-bottom-grid-left">
					<figure class="effect-moses">
						<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1536676218&di=0fb068a454a8184b1df0387ebb7ed456&imgtype=jpg&er=1&src=http%3A%2F%2Fp16.qhimg.com%2Fbdr%2F__85%2Fd%2F_open360%2Fmeinv130%2FABC100cbd.jpg" alt=" " class="img-responsive" />
						<figcaption>
							<h2>PHP</h2>
							<p>来源：哔哩哔哩</p>
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-6 service-bottom-right">
					<div class="service-bottom-right1">
						<a target="_blank" href="https://www.bilibili.com/video/av5491837/?p=1">
						<h4>PHP从入门到精通之PHP入门篇</h4></a>
						<p>PHP 是一种创建动态交互性站点的强有力的服务器端脚本语言。</p>
						<p>PHP 是免费的，并且使用非常广泛。同时，对于像微软 ASP 这样的竞争者来说，PHP 无疑是另一种高效率的选项。</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<nav style="text-align: center">
			  <ul class="pagination pagination-lg">
				<li><a href="../">1</a></li>
				<li class="active"><a>2</a></li>
				<li><a href="../3">3</a></li>
				<li><a href="../4">4</a></li>
			  </ul>
			</nav>
		</div>
	</div>
<!-- //services -->
EOF;

messge_and_tail($site,$conn);
