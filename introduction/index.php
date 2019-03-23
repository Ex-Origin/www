<?php
$path='../';
$site='introduction';

require_once 'all.php';
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
<script src="../js/jquery-1.11.1.min.js"></script>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
EOF;

include_once $path.'template/head.html';

echo '</head>';

echo '<body>';

echo '<div class="banner" style="background-image: url(\''.get_picture_url().'\')">';
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
			<div class="banner-info" >
				<h1>加油吧，少年</h1>
				<p style="color: #00FF00">学习从来就不是一件简单的事，你认为它痛苦，他自然就痛苦。</p>
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
						<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1536675540&di=259beed0cb15a7af28295e26d7284fac&imgtype=jpg&er=1&src=http%3A%2F%2Fp18.qhimg.com%2Fbdr%2F__85%2Fd%2F_open360%2Fmeinv130%2FABC26cbd.jpg" alt=" " class="img-responsive" />
						<figcaption>
							<h2>C语言</h2>
							<p>来源：哔哩哔哩</p>
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-6 service-bottom-right">
					<div class="service-bottom-right1">
						<a href="https://www.bilibili.com/video/av2831981/?p=1" target="_blank"><h4>【C语言】C语言视频教程</h4></a>
						<p>C 语言是一种通用的、面向过程式的计算机程序设计语言。1972 年，为了移植与开发 UNIX 操作系统，丹尼斯·里奇在贝尔电话实验室设计开发了 C 语言。

</p><p> C语言是一种广泛使用的计算机语言，它与 Java 编程语言一样普及，二者在现代软件程序员之间都得到广泛使用。

当前最新的C语言标准为 C11 ，在它之前的C语言标准为 C99。 </p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="service-bottom">
				<div class="col-md-6 service-bottom-left banner-bottom-grid-left">
					<figure class="effect-moses">
						<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1536675577&di=c772f266b2886859eed30fb0ad4f6634&imgtype=jpg&er=1&src=http%3A%2F%2Fimg.pconline.com.cn%2Fimages%2Fupload%2Fupc%2Ftx%2Fwallpaper%2F1209%2F11%2Fc0%2F13783009_1347330674324.jpg" alt=" " class="img-responsive" />
						<figcaption>
							<h2>C++</h2>
							<p>来源：哔哩哔哩</p>
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-6 service-bottom-right">
					<div class="service-bottom-right1">
						<a target="_blank" href="https://www.bilibili.com/video/av7595819/?p=1"><h4>C++快速入门系列教程-小甲鱼</h4></a>
						<p>C++ 是一种中级语言，它是由 Bjarne Stroustrup 于 1979 年在贝尔实验室开始设计开发的。C++ 进一步扩充和完善了 C 语言，是一种面向对象的程序设计语言。C++ 可运行于多种平台上，如 Windows、MAC 操作系统以及 UNIX 的各种版本。</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="service-bottom">
				<div class="col-md-6 service-bottom-left banner-bottom-grid-left">
					<figure class="effect-moses">
						<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1536675669&di=d5d3cf006ec721b93b5817bad5912c97&imgtype=jpg&er=1&src=http%3A%2F%2Fpic1.win4000.com%2Fwallpaper%2Fd%2F599b8d9044181.jpg" alt=" " class="img-responsive" />
						<figcaption>
							<h2>Java</h2>
							<p>来源：哔哩哔哩</p>
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-6 service-bottom-right">
					<div class="service-bottom-right1">
						<a target="_blank" href="https://www.bilibili.com/video/av7299271/?p=1"><h4>韩顺平老师-Java从入门到精通[全]</h4></a>
						<p>Java 是由Sun Microsystems公司于1995年5月推出的高级程序设计语言。</p>

<p>Java可运行于多个平台，如Windows, Mac OS，及其他多种UNIX版本的系统。.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="service-bottom">
				<div class="col-md-6 service-bottom-left banner-bottom-grid-left">
					<figure class="effect-moses">
						<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1536675710&di=fd8946710516208b50bad5460da81efe&imgtype=jpg&er=1&src=http%3A%2F%2Fattachments.gfan.com%2Fforum%2F201503%2F11%2F192730paqqqkfvcwcmwvt2.jpg" alt=" " class="img-responsive" />
						<figcaption>
							<h2>C#</h2>
							<p>来源：哔哩哔哩</p>
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-6 service-bottom-right">
					<div class="service-bottom-right1">
						<a target="_blank" href="https://www.bilibili.com/video/av7606481/?p=1"><h4>C#语言入门详解</h4></a>
						<p>C# 是一个简单的、现代的、通用的、面向对象的编程语言，它是由微软（Microsoft）开发的。</p>
						<p>C# 编程是基于 C 和 C++ 编程语言的，因此如果您对 C 和 C++ 编程有基本的了解，将有助于您学习 C# 编程语言。</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<nav style="text-align: center">
			  <ul class="pagination pagination-lg">
				<li class="active"><a>1</a></li>
				<li><a href="2">2</a></li>
				<li><a href="3">3</a></li>
				<li><a href="4">4</a></li>
			  </ul>
			</nav>
		</div>
	</div>
<!-- //services -->
EOF;

messge_and_tail($site,$conn);