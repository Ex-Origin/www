<?php


$path='../';

require_once $path.'template/message.php';
require_once 'own.php';

$site='book';

$conn=new mysqli('****','****','****','****');
$conn->query("SET NAMES utf8");


get_message($conn,$site);

echo <<<EOF
<!DOCTYPE html>
<html>
<head>
<title>推荐书籍</title>
<meta name="description" content="书是人类进步的阶梯，这里我推荐一些好书给大家。"/>
<meta name="keywords" content="书籍,书籍下载,编程书籍">
<style>
</style>
EOF;

echo '<link href="'.$path.'css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />';
echo '<link href="'.$path.'css/style.css" rel="stylesheet" type="text/css" media="all" />';

include_once $path.'template/head.html';

echo '</head>';

echo '<body>';

echo "<div class=\"banner\" style=\"background-image: url('".get_url()."')\">";

echo '<div class="container">';
echo    '<div class="logo">';
echo        '<a href="'.$path.$site.'">推荐书籍<span>Find Your Home</span></a>';
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
            <h1>学习不易</h1>
            <p style="color: #FF0000">书是人类进步的阶梯，这里我推荐一些好书给大家。</p>
        </div>
    </div>
</div>
<!-- services -->
<div class="typo">
    <div class="container">
        <div class="grid_3 grid_5">
            <h3 style="text-align: center">目录</h3>
            <ol class="breadcrumb">
                <li class="active">root</li>
            </ol>
        </div>
        
        <div class="grid_3 grid_4">
            <h3 class="hdg">分类</h3>
            <div class="bs-example">
                <table class="table">
                    <tbody>
EOF;
echo '<tr>';
echo    '<td><h3 style="text-align: center" id="h1.-bootstrap-heading"><a class="anchorjs-link" href="program">编程书籍</a></h3></td>';
$sql='select count(*) from book where type like "%program%"';
$result=$conn->query($sql)->fetch_all();
$p=$result[0][0];

echo    '<td class="type-info">总共'.(string)$p.'本书</td>';
echo '</tr>';
echo '<tr>';
echo    '<td><h3 style="text-align: center" id="h2.-bootstrap-heading"><a class="anchorjs-link" href="ctf_book">CTF书籍</a></h3></td>';
$sql='select count(*) from book where type like "%ctf_book%"';
$result=$conn->query($sql)->fetch_all();
$p=$result[0][0];

echo    '<td class="type-info">总共'.(string)$p.'本书</td>';
echo '</tr>';
echo '<tr>';
echo    '<td><h3 style="text-align: center" id="h2.-bootstrap-heading"><a class="anchorjs-link" href="english">英文原版</a></h3></td>';
$sql='select count(*) from book where type like "%english%"';
$result=$conn->query($sql)->fetch_all();
$p=$result[0][0];

echo    '<td class="type-info">总共'.(string)$p.'本书</td>';
echo '</tr>';
echo <<<EOF
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
	
EOF;




messge_and_taili($site,$conn,$path);

