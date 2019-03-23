<?php

$path='../';
$nav='connect';

require_once $path.'template/message.php';
$site='connect';

$conn=new mysqli('****','****','****','****');
$conn->query("SET NAMES utf8");


get_message($conn,$site);



echo <<<EOF
<!DOCTYPE html>
<html>
<head>
<title>联系站长</title>
<meta name="description" content="如果有任何介意，欢迎联系站长。"/>
<meta name="keywords" content="编程,编程技术,Ex">
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
</style>
<script src="../js/jquery-1.11.1.min.js"></script>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
EOF;

include_once '../template/head.html';

echo '</head>';

echo '<body>';

echo <<<EOF
<div class="banner1" style="background-image: url('https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1536675012&di=de5368a849b0dfc864a534bc5b47c532&imgtype=jpg&er=1&src=http%3A%2F%2Fbbsfiles.vivo.com.cn%2Fvivobbs%2Fattachment%2Fforum%2F201601%2F24%2F175433rossj7cn74vksn4p.jpg')">
		<div class="container">
			<div class="logo">
				<a href="..">联系站长<span>Find Your Home</span></a>
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
<div class="mail">
		<div class="container">
			<div class="col-md-6 mail-left" style="margin: auto;float: none">
				<h3>联系<span>信息</span></h3>
				<p>欢迎大家提意见哦</p>
				<ul>
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>qq<span>2462148389</span></li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>邮箱<a>2462148389@qq.com</a></li>
				</ul>
                <ul>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>交流Q群<span>972125311</span></li>
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>地址<span>中国*****</span></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
EOF;

messge_and_tail($site,$conn);
