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
						<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1536676335&di=b9bd1c731b079038c6114624b32e5617&imgtype=jpg&er=1&src=http%3A%2F%2Ffile31.mafengwo.net%2FM00%2FEB%2F38%2FwKgBs1dv202AM0ALABGqpQmw0XQ25.jpeg" alt=" " class="img-responsive" />
						<figcaption>
							<h2>Python</h2>
							<p>来源：哔哩哔哩</p>
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-6 service-bottom-right">
					<div class="service-bottom-right1">
						<a target="_blank" href="https://www.bilibili.com/video/av4050443/?p=1"><h4>[小甲鱼]零基础入门学习Python</h4></a>
						<p>Python是一种解释型、面向对象、动态数据类型的高级程序设计语言。</p>
						<p>个人认为python是一个特别好的脚本工具，可以很方便的写一些小程序来加快开发速度。</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="service-bottom">
				<div class="col-md-6 service-bottom-left banner-bottom-grid-left">
					<figure class="effect-moses">
						<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1538359790&di=39c70024ac3c8563a240165331e4fb8f&imgtype=jpg&er=1&src=http%3A%2F%2Fpic1.win4000.com%2Fwallpaper%2F5%2F56907ebfeec85.jpg" alt=" " class="img-responsive" />
						<figcaption>
							<h2>tcp/ip协议</h2>
							<p>来源：哔哩哔哩</p>
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-6 service-bottom-right">
					<div class="service-bottom-right1">
						<a href="https://www.bilibili.com/video/av23124815/?p=1" target="_blank">
						<h4>韩老师讲大学高校课程《计算机网络原理》</h4></a>
						<p>TCP/IP 通信协议是对计算机必须遵守的规则的描述，只有遵守这些规则，计算机之间才能进行通信。</p>
						<p>很底层的知识，也很重要。</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="service-bottom">
				<div class="col-md-6 service-bottom-left banner-bottom-grid-left">
					<figure class="effect-moses">
						<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1536676471&di=8dc829619935433ca22500c13f36469a&imgtype=jpg&er=1&src=http%3A%2F%2Fdimg07.c-ctrip.com%2Fimages%2Ftg%2F318%2F632%2F586%2Feebc32f098e649cea614e1b59504418f.jpg" alt=" " class="img-responsive" />
						<figcaption>
							<h2>Linux</h2>
							<p>来源：哔哩哔哩</p>
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-6 service-bottom-right">
					<div class="service-bottom-right1">
						<a target="_blank" href="https://www.bilibili.com/video/av21303002/?p=1">
						<h4>尚硅谷_韩顺平_Linux教程</h4></a>
						<p>Linux 英文解释为 Linux is not Unix。</p>
						<p>Linux其实很容易学，相信你们能很快学会。</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="service-bottom">
				<div class="col-md-6 service-bottom-left banner-bottom-grid-left">
					<figure class="effect-moses">
						<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1538359920&di=39341505595929e6bce3db35b54c966a&imgtype=jpg&er=1&src=http%3A%2F%2Fbbs.crsky.com%2F1236983883%2FMon_1304%2F149_200288_d62c3ba9bc4dcaf.jpg" alt=" " class="img-responsive" />
						<figcaption>
							<h2>汇编语言</h2>
							<p>来源：哔哩哔哩</p>
						</figcaption>			
					</figure>
				</div>
				<div class="col-md-6 service-bottom-right">
					<div class="service-bottom-right1">
						<a target="_blank" href="https://www.bilibili.com/video/av18899713/?p=1">
						<h4>【汇编语言】小甲鱼零基础汇编真正全集1-17章</h4></a>
						<p>学习汇编语言可以让我们更加了解代码运行的实质。以便更好地去优化代码。</p>
						<p>对汇编的要求就是能看懂和分析，不要求能够编写复杂的汇编程序。</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<nav style="text-align: center">
			  <ul class="pagination pagination-lg">
				<li><a href="../">1</a></li>
				<li><a href="../2">2</a></li>
				<li class="active"><a>3</a></li>
				<li><a href="../4">4</a></li>
			  </ul>
			</nav>
		</div>
	</div>
<!-- //services -->
EOF;

messge_and_tail($site,$conn);

