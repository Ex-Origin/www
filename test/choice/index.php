<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "lc199812180615";
$datebase="question_bank";

// 创建连接
$conn = new mysqli($servername, $username, $password,$datebase);
$conn->query("SET NAMES utf8");


// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}


if(! isset($_SESSION['user']))
{
    $_SESSION['user']=array();
}

if(isset($_GET['r']))
{
    $_SESSION['user']=array();
    $_SESSION['times']=0;
}

$sum=3029;

$test=0;

$id=null;
if(isset($_GET['q'])&& is_numeric($_GET['q']))
{
    $num=(int)$_GET['q'];
    $sql='select a,b,c,d,question,answer,type,difficulty,num from choice where num='.(string)$num;
    $test=1;
}
else
{
    while (true)
    {
        $id=mt_rand(1,$sum);
        if(!in_array($id,$_SESSION['user']))
        {
            break;
        }
    }

    array_push($_SESSION['user'],$id);

    $sql='select a,b,c,d,question,answer,type,difficulty,num from choice where id='.(string)$id;
}




$table=array(
    "J"=>"数据结构",
    "K"=>"数据库原理",
    "W"=>"网络",
    "R"=>"软件工程",
    "Z"=>"操作系统",
    "C"=>"应用基础",
    "D"=>"多媒体技术",
    "Y"=>"硬件部分",
    "H"=>"移动互联应",
    "S"=>"数据表示和计算",
    "L"=>"离散数学",
    "Q"=>"软件知识产权",
    "1"=>"C语言",
    "2"=>"C++语言",
    "3"=>"Java语言",
    "4"=>"JavaScript语言",
    "5"=>"C#语言");

$difficulty=array(
    0=>'简单',
    1=>'困难'
);

$answer=array(
    'A'=>0,
    'B'=>1,
    'C'=>2,
    'D'=>3
);

$random=array(0,1,2,3);

shuffle($random);

$question=$conn->query($sql)->fetch_all();

$answer=$answer[$question[0][5]];

if(!isset($_SESSION['times']))
{
    $_SESSION['times']=0;
}
else if($test==0)
{
    $_SESSION['times']++;
}
else if($test==1)
{
    
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>题库</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="container">
<?php
echo '<p style="text-align: center">已回答 <b>'.(string)$_SESSION['times'].'</b> 题 &emsp;<a href=".?r=1" class="button">重置</a>';
echo '<p><b style="color: #9A5334">类型</b>：'.$table[$question[0][6]].'&emsp;<b style="color: #9A5334">难度</b>：'.$difficulty[$question[0][7]].'&emsp;<b style="color: #9A5334">题号</b>： '.$question[0][8].' </p>';


$temp_q=preg_split('/\n/',$question[0][4],-1);
$temp_s='';
for ($i=0;$i<count($temp_q);$i++)
{
    if($i==count($temp_q)-1)
    {
        $temp_s=$temp_s.htmlspecialchars($temp_q[$i]);
    }
    else
    {
        $temp_s=$temp_s.htmlspecialchars($temp_q[$i]).'<br/>';
    }
}

if(strpos($question[0][4],'<sup>')!=false ||strpos($question[0][4],'<sub>')!=false )
    echo '<p><b style="color: #9A5334">问题</b>：'.($question[0][4]).replace('\n','<br/>').'&emsp;<a href="https://www.baidu.com/s?wd='.urlencode($question[0][4]).'" target="_blank">百度</a></p>';
else
    echo '<p><b style="color: #9A5334">问题</b>：'.$temp_s.'&emsp;<a href="https://www.baidu.com/s?wd='.urlencode($question[0][4]).'" target="_blank">百度</a></p>';


for ($i=0;$i<4;$i++)
{
    $temp=$random[$i];
    if($temp==$answer)
    {
        if(strpos($question[0][$temp],'<sup>')!=false ||strpos($question[0][$temp],'<sub>')!=false )
            echo '<p><span class="q" onclick="a'.(string)$i.'()">'.chr(65+$i).'. '.($question[0][$temp]).'</span>&emsp;<a href="https://www.baidu.com/s?wd='.urlencode($question[0][$temp]).'" target="_blank">百度</a>&emsp;<span id="a'.(string)$i.'" class="true" style="display: none">正确</span></p>';
        else
            echo '<p><span class="q" onclick="a'.(string)$i.'()">'.chr(65+$i).'. '.htmlspecialchars($question[0][$temp]).'</span>&emsp;<a href="https://www.baidu.com/s?wd='.urlencode($question[0][$temp]).'" target="_blank">百度</a>&emsp;<span id="a'.(string)$i.'" class="true" style="display: none">正确</span></p>';
    }
    else
    {
        if(strpos($question[0][$temp],'<sup>')!=false ||strpos($question[0][$temp],'<sub>')!=false )
            echo '<p><span class="q" onclick="a'.(string)$i.'()">'.chr(65+$i).'. '.($question[0][$temp]).'</span>&emsp;<a href="https://www.baidu.com/s?wd='.urlencode($question[0][$temp]).'" target="_blank">百度</a>&emsp;<span class="false" id="a'.(string)$i.'" style="display: none">错误</span></p>';
        else
            echo '<p><span class="q" onclick="a'.(string)$i.'()">'.chr(65+$i).'. '.htmlspecialchars($question[0][$temp]).'</span>&emsp;<a href="https://www.baidu.com/s?wd='.urlencode($question[0][$temp]).'" target="_blank">百度</a>&emsp;<span class="false" id="a'.(string)$i.'" style="display: none">错误</span></p>';
    }
}
?>
<p style="text-align: center"><a class="next" href=".">下一题</a></p>
</div>
</body>
</html>



<?php
$conn->close();
?>