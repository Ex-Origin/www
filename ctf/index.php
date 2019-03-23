<?php


$path='../';

require_once $path.'template/message.php';

$site='ctf';



$conn=new mysqli('****','****','****','****');
$conn->query("SET NAMES utf8");


get_message($conn,$site);

$sql='select type,count(*) from article group by type';
$all_result=$conn->query($sql)->fetch_all();

function return_amount($all_result,$type)
{
    $length=count($all_result);

    for($i=0;$i<$length;$i++)
    {
        if($type==$all_result[$i][0])
        {
            return (int)$all_result[$i][1];
        }
    }

    return 0;
}
echo <<<EOF
<!DOCTYPE html>
<html>
<head>
<title>CTF</title>
<meta name="description" content="主要讲述关于CTF的博客。"/>
<meta name="keywords" content="ctf,ctf夺旗赛,ctf夺旗爱好者">
<style>
@media (min-width: 960px) {
    div.new_right{
        padding-left: 2em;
    }
}

</style>
EOF;

echo '<link href="'.$path.'css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />';
echo '<link href="'.$path.'css/style.css" rel="stylesheet" type="text/css" media="all" />';

include_once $path.'template/head.html';

echo '</head>';

echo '<body>';

echo "<div class=\"banner\" style=\"background-image: url('https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1536674572&di=86e0b63f7d3e216314bb4afededd7932&imgtype=jpg&er=1&src=http%3A%2F%2Fi9.download.fd.pchome.net%2Ft_1600x1200%2Fg1%2FM00%2F0C%2F15%2FooYBAFRu9MaIKnNYAARX6_i9J5YAACGXQOm9kwABFgD510.jpg')\">";

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
			
EOF;



echo <<<EOF
        <div class="banner-info" >
            <h1>智力大挑战</h1>
            <p style="color: #FF0000">这里站长简要谈谈自己玩CTF的经验，站长专攻逆向和渗透。</p>
        </div>
    </div>
</div>
<!-- services -->
	<div class="services">
		<div class="container">
			<h3><span>热爱就是</span>动力</h3>
			<p class="dolore">一个人,当他选择要做一件事的时候,首先要具备的就是热爱自己所选择的任何一个职业和行业,否则这个人终将一生一事无成。</p>
			<div class="services-grids">
				<div class="col-md-5 services-grid-left">
					<div class="services-grid-left1">
						<ul>
							<li style="background: none"><h4>首先你得满足这些要求</h4></li>
							<li>基础知识雄厚</li>
							<li>脑洞巨大，思维天马行空</li>
							<li>要有细思极恐的观察力</li>
							<li>体力耐力不错，能通宵熬夜</li>
							<li>对编程环抱满满的热爱</li>
						</ul>
					</div>
				</div>
				<div class="col-md-7 services-grid-right">
					<div class="services-grid-right1">
						<a href="re">
						<div  class="col-xs-4 services-grid-right1-left">
							<div style="margin: 3em 0 0 0" class="services-grid-right1-left1">
								<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
							</div>
						</div>
						</a>
						<div style="padding-left: 5px" class="col-xs-8 services-grid-right1-right">
							<a href="re"><h4>逆向工程</h4>
							<p>逆向工程，有的人也叫反求工程，英文是reverse engineering，大意是根据已有的东西和结果，通过分析来推导出具体的实现方法。</p></a>
							<div class="more">
                                
EOF;


$amount=return_amount($all_result,'re');
echo '<p>共'.(string)$amount.'篇文章</p>';

echo <<<EOF
                            </div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="services-grid-right1">
						<a href="web">
						<div class="col-xs-4 services-grid-right1-left">
							<div style="margin: 3em 0 0 0" class="services-grid-right1-left1">
								<span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
							</div>
						</div>
						</a>
						<div style="padding-left: 5px" class="col-xs-8 services-grid-right1-right">
							<a href="web"><h4>渗透测试</h4>
							<p>渗透测试是通过模拟恶意黑客的攻击方法，来评估计算机网络系统安全的一种评估方法。</p></a>
							
                            <div class="more">
EOF;

$amount=return_amount($all_result,'web');
echo '<p>共'.(string)$amount.'篇文章</p>';

echo <<<EOF
                            </div>
						</div>
					</div>
					
					
					
					
					
				</div>
				<div class="clearfix"> </div>
			
			</div>
			
			
			
			
EOF;

//下面的是新行
echo <<<EOF
			
			
			
			<div class="services-grids">
                <div class="col-md-6 services-grid-right new_right">
                    <div class="services-grid-right1">
                        <a href="pwn">
                        <div class="col-xs-4 services-grid-right1-left">
                            <div style="margin: 3em 0 0 0" class="services-grid-right1-left1">
                                <span class="glyphicon glyphicon-pwn" aria-hidden="true"></span>
                            </div>
                        </div>
						</a>
						
                        <div style="padding-left: 5px;" class="col-xs-8 services-grid-right1-right">
							<a href="pwn">
							<h4>溢出攻击</h4>
							<p>”Pwn”是一个黑客语法的俚语词，是指攻破设备或者系统。发音类似“砰”，对黑客而言，这就是成功实施黑客攻击的声音——砰的一声，被“黑”的电脑或手机就被你操纵了。</p>
							</a>
							
                            <div class="more">
EOF;

$amount=return_amount($all_result,'pwn');
echo '<p>共'.(string)$amount.'篇文章</p>';

echo <<<EOF
                            </div>
                        </div>
                        <div class="clearfix"> </div>
				    </div>
				    
				    <div class="services-grid-right1">
                        <a href="program">
                        <div class="col-xs-4 services-grid-right1-left">
                            <div style="margin: 3em 0 0 0" class="services-grid-right1-left1">
                                <span class="glyphicon glyphicon-pro" aria-hidden="true"></span>
                            </div>
                        </div>
						</a>
						
                        <div style="padding-left: 5px" class="col-xs-8 services-grid-right1-right">
							<a href="program">
							<h4>编程挑战</h4>
							<p>考验编程功底，程序编写，编程算法实现。</p>
							</a>
							
                            <div class="more">
EOF;

$amount=return_amount($all_result,'program');
echo '<p>共'.(string)$amount.'篇文章</p>';

echo <<<EOF
                            </div>
                        </div>
                        <div class="clearfix"> </div>
				    </div>
				    
				    <div class="services-grid-right1">
                        <a href="cryptography">
                        <div class="col-xs-4 services-grid-right1-left">
                            <div style="margin: 3em 0 0 0" class="services-grid-right1-left1">
                                <span class="glyphicon glyphicon-crypt" aria-hidden="true"></span>
                            </div>
                        </div>
						</a>
						
                        <div style="padding-left: 5px;padding-bottom: 50px" class="col-xs-8 services-grid-right1-right">
							<a href="cryptography">
							<h4>密码学</h4>
							<p>各种加密解密技术，包括古典加密技术，现代加密技术，甚至自创加密技术。</p>
							</a>
							
                            <div class="more">
EOF;

$amount=return_amount($all_result,'cryptography');
echo '<p>共'.(string)$amount.'篇文章</p>';

echo <<<EOF
                            </div>
                        </div>
                        <div class="clearfix"> </div>
				    </div>
				</div>
				
				
				
				
				<div class="col-md-6 services-grid-right new_right">
					<div class="services-grid-right1">
                        <a href="steganography">
                        <div class="col-xs-4 services-grid-right1-left">
                            <div style="margin: 3em 0 0 0" class="services-grid-right1-left1">
                                <span class="glyphicon glyphicon-ste" aria-hidden="true"></span>
                            </div>
                        </div>
						</a>
						
                        <div style="padding-left: 5px" class="col-xs-8 services-grid-right1-right">
							<a href="steganorgraphy">
							<h4>隐写术</h4>
							<p>隐写术是一门关于信息隐藏的技巧与科学，所谓信息隐藏指的是不让除预期的接收者之外的任何人知晓信息的传递事件或者信息的内容。</p>
							</a>
							
                            <div class="more">
EOF;

$amount=return_amount($all_result,'steganography');
echo '<p>共'.(string)$amount.'篇文章</p>';

echo <<<EOF
                            </div>
                        </div>
                        <div class="clearfix"> </div>
				    </div>
				    
				    <div class="services-grid-right1">
                        <a href="miscellaneous">
                        <div class="col-xs-4 services-grid-right1-left">
                            <div style="margin: 3em 0 0 0" class="services-grid-right1-left1">
                                <span class="glyphicon glyphicon-misc" aria-hidden="true"></span>
                            </div>
                        </div>
						</a>
						
                        <div style="padding-left: 5px" class="col-xs-8 services-grid-right1-right">
							<a href="miscellaneous">
							<h4>安全杂项</h4>
							<p>流量分析，电子取证，人肉搜索，数据分析，大数据统计等等。</p>
							</a>
							
                            <div class="more">
EOF;

$amount=return_amount($all_result,'miscellaneous');
echo '<p>共'.(string)$amount.'篇文章</p>';

echo <<<EOF
                            </div>
                        </div>
                        <div class="clearfix"> </div>
				    </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services -->
EOF;




messge_and_taili($site,$conn,$path);

