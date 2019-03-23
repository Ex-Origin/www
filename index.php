<?php

$path='./';

require_once $path.'template/message.php';
$site='www';

$conn=new mysqli('****','****','****','****');
$conn->query("SET NAMES utf8");


get_message($conn,$site);

echo '<script src="'.$path.'js/jquery-1.11.1.min.js"></script>';
echo <<<EOF
<!DOCTYPE html>
<html>
<head>
<title>编程技术</title>
<meta name="description" content="本站为您推荐编程的基础技术教程，同时本站中也提供了一些测试模块和工具，通过实例，您可以更好的学习编程。.."/>
<meta name="keywords" content="编程技术,ctf,编程入门">
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

<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<style>
body h1,body h2,body h3,body h4,body h5,body h6{
	font-family:'Abril Fatface', cursive;
	margin:0;
}
#my_new{
    
    text-align: center;
    font-weight: 500;
    line-height: 1.1;
    font-family: 华文楷体,华文行楷,KaiTi,STXingkai, 'Abril Fatface', cursive;
    font-size: 2.5em;
    color: #999;
}
@media (max-width: 414px){
    #my_new{
        font-size: 1.3em;
    }
}

div.alert-success:hover{
    background-color: #3c763d;
    color: #dff0d8;
}
div.alert-info:hover{
    background-color: #31708f;
    color: #d9edf7;
}
div.alert-warning:hover{
    background-color: #8a6d3b;
    color: #fcf8e3;
}
</style>
<script src="js/jquery-1.11.1.min.js"></script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
EOF;

require_once $path.'template/head.html';

echo '</head>';

echo '<body>';

echo <<<EOF
<div class="banner" style="background-image: url('https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1536673324&di=800683a417b656a8b2b987712946890a&imgtype=jpg&er=1&src=http%3A%2F%2Fp4.gexing.com%2FG1%2FM00%2F23%2F9E%2FrBACFFN_7GrifQDPABG7E9pSVn0478.jpg') ">
		<div class="container">
			<div class="logo">
				<a href=".">编程技术<span>Find Your Home</span></a>
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
				<h1>Welcome to my website<!--<span></span>--></h1>
				<p>飞向天空吧,即使坠落下来,接住你的也是云彩。</p>
			</div>
		</div>
	</div>
EOF;

echo <<<EOF
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
		    
		    <div class="my_container" style="margin-bottom: 50px">
		    <h3 id="my_new" ><span style="color: #f72459;">简讯</span></h3>
			<p class="dolore"></p>
			</div>
		    
		   <div class="banner-bottom-grids">
				<div class="col-md-6 banner-bottom-grid-left">
					<figure class="effect-lexi">
						<img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1536678293&di=cd5ed69675b7db4912b3a7f8d49e8292&imgtype=jpg&er=1&src=http%3A%2F%2Fimages.ali213.net%2Fpicfile%2Fpic%2F2017%2F09%2F03%2F2017090331319850.jpg" alt="ctf爱好者" class="img-responsive">
						<figcaption>
							<h3><span>CTF</span>夺旗赛</h3>
							<p>计算机领域的奥林匹克，正真的强者竞赛</p>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-6 banner-bottom-grid-right">
					<h3><span>CTF</span>夺旗爱好者</h3>
					<p>CTF（Capture The Flag）中文一般译作夺旗赛，在网络安全领域中指的是网络安全技术人员之间进行技术竞技的一种比赛形式。
					 <span>本站长作为一名CTF爱好者，欢迎大家和我一起讨论相关知识，为以后在赛场有更好地表现而奋斗。</span>
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="banner-bottom-grids">
				<div class="col-md-6 banner-bottom-grid-left">
					<figure class="effect-lexi">
						<img src="images/logo.jpeg" itemprop="logo" alt="编程技术" class="img-responsive" />
						<figcaption>
							<h3>黑客说</span></h3>
							<p>只有成长才是永恒的主题，过程中的成功仅仅是你成长路上的里程碑而已。</p>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-6 banner-bottom-grid-right">
					<h3><a href="https://zhuanlan.zhihu.com/p/24698829">黑客技术如何从零学起？</a></h3>
					<p>我们经常看到媒体在报道时说国内某组织的某黑客在几秒内就攻破了IE浏览器，在几秒内就绕过了XX保护机制。但事实的真相是他们其实就是运行了一个自己准备好的代码而已，而媒体上说的这几秒钟的时间其实是代码的运行时间。据我说知，他们在参赛之前，整个团队为了这几秒钟的ShowTime，需要经历至少十余个甚至数十个不眠之夜，然后才能打造出可能仅有几百个字节的艺术品般的代码（也就是Exploit），最后才能拿去现场过五关斩六将。

<span>如果在这个十三亿人口的国度里最牛逼的黑客都需要如此付出，那么作为目前默默无闻的你来说，想要学会这门技术应该需要多少个不眠之夜呢？&emsp;来源：<a href="https://zhuanlan.zhihu.com/p/24698829">知乎 - 任晓珲</a></span></p>
				</div>
				<div class="clearfix"> </div>
			</div>
		    
			<h2 style="font-family: 华文楷体,华文行楷,KaiTi,STXingkai;margin-top: 3em">推荐网站</h2>
			<div class="banner-bottom-info">
				<ul id="flexiselDemo1">
					<li>
						<div class="item">
							<div class="item1">
								<a href="https://www.bilibili.com" target="_blank"><i class="glyphicon glyphicon-home" aria-hidden="true"></i></a>
								<h3>哔哩哔哩</h3>
								<p>里面全是人才，说话又好听</p>
							</div>
						</div>
					</li>
					<li>
						<div class="item">
							<div class="item1">
								<a target="_blank" href="https://www.runoob.com"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></a>
								<h3>菜鸟教程</h3>
								<p>学的不仅是技术，更是梦想！</p>
							</div>
						</div>
					</li>
					<li>
						<div class="item">
							<div class="item1">
								<a href="https://github.com" target="_blank"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></a>
								<h3>GitHub</h3>
								<p>程序员的天堂！</p>
							</div>
						</div>
					</li>
					<li>
						<div class="item">
							<div class="item1">
								<a target="_blank" href="http://www.shiyanbar.com/"><i class="glyphicon glyphicon-camera" aria-hidden="true"></i></a>
								<h3>实验吧</h3>
								<p>CTF，训练营，信息安全，网络攻防，网络安全</p>
							</div>
						</div>
					</li>
				</ul>
					<script type="text/javascript">
						$(window).load(function() {
						$("#flexiselDemo1").flexisel({
							visibleItems: 4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: {
								portrait: {
									changePoint:480,
									visibleItems: 1
								},
								landscape: {
									changePoint:640,
									visibleItems: 2
								},
								tablet: {
									changePoint:768,
									visibleItems: 3
								}
							}
						});

					 });
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
			</div>
			
			<div class="banner-bottom-grids">
			<div class="grid_3 grid_5">
				<h3 style="text-align: center;font-family: 华文楷体,华文行楷,KaiTi,STXingkai">友情链接</h3>
				<a href="http://video.eonew.cn/" target="_blank">
                    <div class="alert alert-info" role="alert">
					    <strong>最新电影&emsp;</strong>（子站）动态分享最新的影视资源。 video.eonew.cn
				    </div>    
                </a>
                <a href="http://blog.eonew.cn/" target="_blank">
                    <div class="alert alert-warning" role="alert">
					    <strong>Ex个人博客&emsp;</strong>（子站）没事写写文章。 blog.eonew.cn
				    </div>    
				</a>
				<a href="http://study.eonew.cn/" target="_blank">
                    <div class="alert alert-danger" role="alert">
					    <strong>题库&emsp;</strong>（子站）复习必备。 study.eonew.cn
				    </div>    
				</a>
				<a href="http://bbs.eonew.cn/" target="_blank">
                    <div class="alert alert-success" role="alert">
						<strong>考研论坛&emsp;</strong>（子站）good good study, day day up... bbs.eonew.cn
				    </div>    
				</a>

				<a href="http://www.xmcve.com/" target="_blank">
                    <div class="alert alert-info" role="alert">
						<strong>星盟安全团队&emsp;</strong>很强很厉害 www.xmcve.com
				    </div>    
				</a>
				
				<a href="http://movie.jxesk.cn/" target="_blank">
					<div class="alert alert-warning" role="alert">
						<strong>贝壳影视&emsp;</strong>免费播放VIP视频，支持在线观看 movie.jxesk.cn
				    </div>    
				</a>
EOF;
//               <div class="alert alert-info" role="alert">
//					<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
//				</div>
//				<div class="alert alert-warning" role="alert">
//					<strong>Warning!</strong> Best check yo self, you're not looking too good.
//				</div>
//				<div class="alert alert-danger" role="alert">
//					<strong>Oh snap!</strong> Change a few things up and try submitting again.
//				</div>
echo <<<EOF
                
				
			</div>
            </div>
			
			
		</div>
	</div>
<!-- //banner-bottom -->
EOF;




messge_and_tail($site,$conn);




