<?php
$path='../';


require_once $path.'template/message.php';
$site='test';

$conn=new mysqli('****','****','****','****');
$conn->query("SET NAMES utf8");


get_message($conn,$site);

echo <<<EOF
<!DOCTYPE html>
<html>
<head>
<title>软件工具</title>
<meta name="description" content="提供原创工具的使用和软件的下载，也推荐一些互联网上的优秀软件。"/>
<meta name="keywords" content="软件,软件工具,原创软件">
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

<script type="text/javascript" src="../js/jquery.flexisel.js"></script>
<script src="../js/bootstrap.js"></script>
<style>
div.banner-info h1 {
    font-family: 华文楷体,华文行楷,KaiTi,STXingkai;
    color: #03a9f4;
}
div.banner-info h1 span {
    font-family: 华文楷体,华文行楷,KaiTi,STXingkai;
}
div.banner-info p {
    color: cyan;
}
</style>
<script src="../js/jquery-1.11.1.min.js"></script>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
EOF;

include_once '../template/head.html';

echo '</head>';

echo '<body>';

echo <<<EOF
<div class="banner" style="background-image: url('https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1536674523&di=f7b870a7929499d1836c462db9a41583&imgtype=jpg&er=1&src=http%3A%2F%2Fpic1.win4000.com%2Fwallpaper%2F3%2F57b55545e6e50.jpg') ">
		<div class="container">
			<div class="logo">
				<a href=".">软件工具<span>Find Your Home</span></a>
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
				<h1>仅为交流、学习所用<span style="color: #FF0000">请勿用于不正当途径</span></h1>
				<p>实践出真知。事物的本来面目和发展规律,是在实践中探索得来的;亲身体会得出的结论,才是靠得住的,才更接近真理。</p>
			</div>
		</div>
	</div>
EOF;
//<!-- blog -->
//	<div class="blog">
//		<div class="container">
//			<h3><span>Latest</span> Blog</h3>
//			<p class="dolore">Consectetur adipiscing elit, sed do
//    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
//				minim veniam.</p>
//			<div class="blog-grids">
//				<div class="blog-grid">
//					<div class="col-md-5 blog-grid-right">
//						<a href="single.html"><img src="images/10.jpg" alt=" " class="img-responsive" /></a>
//						<div class="blog-grid-right-pos">
//							<ul>
//								<li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 100 Likes</li>
//								<li><a href="#"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 3200 Views</a></li>
//								<li><a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 47 Comments</a></li>
//								<li><a href="#"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> 1 Tag</a></li>
//								<li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span> 389 Shares</a></li>
//							</ul>
//						</div>
//					</div>
//					<div class="col-md-7 blog-grid-left">
//						<h4><a href="single.html">incididunt ut labore et dolore magna</a></h4>
//						<p>By <a href="single.html">Admin</a> <span>- Jan 26, 2016.</span></p>
//						<div class="rem">
//							<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
//								doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
//								veritatis et quasi Inventoro beatae.</p>
//						</div>
//					</div>
//					<div class="clearfix"> </div>
//				</div>
//				<div class="blog-grid">
//					<div class="col-md-7 blog-grid-left">
//						<h4><a href="single.html">incididunt ut labore et dolore magna</a></h4>
//						<p>By <a href="single.html">Admin</a> <span>- Jan 30, 2016.</span></p>
//						<div class="rem">
//							<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
//								doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
//								veritatis et quasi Inventoro beatae.</p>
//						</div>
//					</div>
//					<div class="col-md-5 blog-grid-right">
//						<a href="single.html"><img src="images/1.jpg" alt=" " class="img-responsive" /></a>
//						<div class="blog-grid-right-pos1">
//							<ul>
//								<li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 100 Likes</li>
//								<li><a href="#"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 3200 Views</a></li>
//								<li><a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 47 Comments</a></li>
//								<li><a href="#"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> 1 Tag</a></li>
//								<li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span> 389 Shares</a></li>
//							</ul>
//						</div>
//					</div>
//					<div class="clearfix"> </div>
//				</div>
//				<div class="blog-grid">
//					<div class="col-md-5 blog-grid-right">
//						<a href="single.html"><img src="images/10.jpg" alt=" " class="img-responsive" /></a>
//						<div class="blog-grid-right-pos">
//							<ul>
//								<li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 100 Likes</li>
//								<li><a href="#"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> 3200 Views</a></li>
//								<li><a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 47 Comments</a></li>
//								<li><a href="#"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> 1 Tag</a></li>
//								<li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span> 389 Shares</a></li>
//							</ul>
//						</div>
//					</div>
//					<div class="col-md-7 blog-grid-left">
//						<h4><a href="single.html">incididunt ut labore et dolore magna</a></h4>
//						<p>By <a href="single.html">Admin</a> <span>- Jan 26, 2016.</span></p>
//						<div class="rem">
//							<p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
//								doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
//								veritatis et quasi Inventoro beatae.</p>
//						</div>
//					</div>
//					<div class="clearfix"> </div>
//				</div>
//			</div>
//		</div>
//	</div>
//<!-- //blog -->

echo <<<EOF
<!-- blog -->
	<div class="blog">
		<div class="container">
			<h3>工具</h3>
			<p class="dolore">以下工具大部分附带源码，欢迎大家将自己写的工具展示出来</p>
			<div class="blog-grids">

				<div class="blog-grid">
					<div class="col-md-5 blog-grid-right">
						<a href="https://github.com/Ex-Origin/remote-keyboard" target="_black"><img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1539107712&di=1512fd57de7d8e5ff390465d041f6b6a&imgtype=jpg&er=1&src=http%3A%2F%2Fattach.bbs.miui.com%2Fforum%2F201312%2F06%2F182315myd5tkbttwwdxbbz.jpg" alt="远程键盘" title="远程键盘" class="img-responsive" /></a>
						<div class="blog-grid-right-pos">
							<ul>
								<li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>Ex</li>
								<li><a href="#"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>2018-11-07</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>(QQ)2462148389</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span></a></li>
								<li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>Python</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="col-md-7 blog-grid-left">
						<h4><a href="https://github.com/Ex-Origin/remote-keyboard" target="_blank">远程键盘</a></h4>
						<p>来源： <a href="http://www.eonew.cn"><span>www.eonew.cn</span></a></p>
						<div class="rem">
							<p>远程键盘输入，让一个键盘可以通过socket控制另一台设备的全局输入，方便多设备使用。

							新增鼠标远程投射，粘贴板远程投射，代码托管在 github 上。</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>


				<div class="blog-grid">
					<div class="col-md-7 blog-grid-left">
						<h4><a href="syn.tar.gz">SYN攻击器（linux版）</a></h4>
						<p>来源： <a href="http://www.eonew.cn"><span>www.eonew.cn</span></a></p>  
						<div class="rem">
							<p>本软件可以进行外网攻击，内设 debug 模式，可以动态调试，支持多线程，仅为交流、学习、测试所用，请勿用于不正当途径。</p>
						</div>
					</div>
					<div class="col-md-5 blog-grid-right">
						<a href="syn.tar.gz"><img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1537144417&di=302ff7a6f9b4eab0baca133a8deb2dde&imgtype=jpg&er=1&src=http%3A%2F%2Fimg.pptjia.com%2Fimage%2F20180117%2F0bbd0b4d4c9e1fb43147e566728f8e7e.jpg" alt="SYN攻击器（linux版）" title="SYN攻击器（linux版）" class="img-responsive" /></a>
						<div class="blog-grid-right-pos1">
							<ul>
								<li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>Ex</li>
								<li><a href="#"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>2018-10-05</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>(QQ)2462148389</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span>21.2KB</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>C语言</a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>


				
			
			   
				<div class="blog-grid">
					<div class="col-md-5 blog-grid-right">
						<a href="pe.zip"><img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1537886850&di=9140a35ee97546c57c4aeb4d9a23bafc&imgtype=jpg&er=1&src=http%3A%2F%2Fimg17.3lian.com%2Fd%2Ffile%2F201702%2F18%2F33795420f13a64c0f7eccda11f1f1666.jpg" alt="pe" title="pe" class="img-responsive" /></a>
						<div class="blog-grid-right-pos">
							<ul>
								<li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>Ex</li>
								<li><a href="#"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>2018-09-18</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>(QQ)2462148389</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span>80.5KB</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>C语言</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="col-md-7 blog-grid-left">
						<h4><a href="pe.zip" target="_blank">PE函数查询</a></h4>
						<p>来源： <a href="pe.zip"><span>www.eonew.cn</span></a></p>
						<div class="rem">
							<p>可以打印dll文件内的所有函数名和RVA，用的PE文件协议，支持Linux mint和Win10，其他平台可以自行编译，站长对该协议并不能把握的很好，欢迎对其进行更正。</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>


				<div class="blog-grid">
					<div class="col-md-7 blog-grid-left">
						<h4><a href="break_net.tar.gz">内网穿透</a></h4>
						<p>来源： <a href="http://www.eonew.cn"><span>www.eonew.cn</span></a></p>  
						<div class="rem">
							<p>该程序可以将内网机器的端口映射到公网，类似于代理软件，可以达到击穿内网的效果，支持多端口，多线程。</p>
						</div>
					</div>
					<div class="col-md-5 blog-grid-right">
						<a href=""break_net.tar.gz"><img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1539107712&di=1512fd57de7d8e5ff390465d041f6b6a&imgtype=jpg&er=1&src=http%3A%2F%2Fattach.bbs.miui.com%2Fforum%2F201312%2F06%2F182315myd5tkbttwwdxbbz.jpg" alt="SYN攻击器（linux版）" title="SYN攻击器（linux版）" class="img-responsive" /></a>
						<div class="blog-grid-right-pos1">
							<ul>
								<li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>Ex</li>
								<li><a href="#"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>2018-10-10</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>(QQ)2462148389</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span>698.5KB</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>Java</a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>

			
			    
			
				<div class="blog-grid">
					<div class="col-md-5 blog-grid-right">
						<a href="http://video.eonew.cn"><img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1537145558&di=16c45f8a56493da793150c1fe46ebcaa&imgtype=jpg&er=1&src=http%3A%2F%2Fpic1.win4000.com%2Fwallpaper%2F2%2F58006dda3bf0f.jpg" alt="最新电影" title="最新电影" class="img-responsive" /></a>
						<div class="blog-grid-right-pos">
							<ul>
								<li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>Ex</li>
								<li><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>none</li>
								<li><a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>(QQ)2462148389</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span>none</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>php</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="col-md-7 blog-grid-left">
						<h4><a href="http://video.eonew.cn" target="_blank">最新电影</a></h4>
						<p>来源： <a href="http://www.eonew.cn"><span>www.eonew.cn</span></a></p>
						<div class="rem">
							<p>动态更新最新的电影资源，以及电视剧，数据来自开心一瞬微信公众号，每条资源保存三天后即会删除。</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				
				<div class="blog-grid">
					<div class="col-md-7 blog-grid-left">
						<h4><a href="https://pan.baidu.com/s/13oxVkeetbxME4HgVGgHALQ" target="_blank">SYN攻击器（Win版）（网盘：bzm3）</a></h4>
						<p>来源： <a href="http://www.eonew.cn"><span>www.eonew.cn</span></a></p>  
						<div class="rem">
							<p>该软件用pcap库开发，目前只在内网测试成功，无法攻击外网目标，欢迎大家进行修正。新更新了一些bug，加入了窗口化版本。</p>
						</div>
					</div>
					<div class="col-md-5 blog-grid-right">
						<a href="https://pan.baidu.com/s/13oxVkeetbxME4HgVGgHALQ" target="_blank"><img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1537145629&di=eb48b328731a14cc7bf0477269d27f3f&imgtype=jpg&er=1&src=http%3A%2F%2Fimg17.3lian.com%2Fd%2Ffile%2F201702%2F18%2F33795420f13a64c0f7eccda11f1f1666.jpg" alt="SYN攻击器" title="SYN攻击器" class="img-responsive" /></a>
						<div class="blog-grid-right-pos1">
							<ul>
								<li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>Ex</li>
								<li><a href="#"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>2018-08-03</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>(QQ)2462148389</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span>2.29MB</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>C语言</a></li>
							</ul>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				
				<div class="blog-grid">
					<div class="col-md-5 blog-grid-right">
						<a href="arc.zip"><img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1537145690&di=bd174f5df56639022314451b5628fcb9&imgtype=jpg&er=1&src=http%3A%2F%2Fpic1.win4000.com%2Fwallpaper%2F8%2F58fef88cd07de.jpg" alt="arc压缩器" title="arc压缩器" class="img-responsive" /></a>
						<div class="blog-grid-right-pos">
							<ul>
								<li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>Ex</li>
								<li><a href="#"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>2018-06-29</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>(QQ)2462148389</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span>26.5KB</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>C语言</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-7 blog-grid-left">
						<h4><a href="arc.zip">arc压缩器</a></h4>
						<p>来源： <a href="http://www.eonew.cn"><span>www.eonew.cn</span></a></p>  
						<div class="rem">
							<p>该软件用霍夫曼编码写成，内部仍有总多bug，效率也不高，仅供学习、交流。</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				
			</div>
		</div>
	</div>
<!-- //blog -->
EOF;

messge_and_tail($site,$conn);

