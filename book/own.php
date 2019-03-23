<?php
/**
 * Created by PhpStorm.
 * User: ex
 * Date: 9/2/18
 * Time: 9:52 PM
 */

function get_url()
{
    return 'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1536674639&di=f1db1ee98e8aa4a7d7e6d78b2b402b0b&imgtype=jpg&er=1&src=http%3A%2F%2Fpicture.ik123.com%2Fuploads%2Fallimg%2F170115%2F3-1F115164149.jpg';
}

function main($site,$a_type,$path)
{

    require_once $path.'template/message.php';

    $dic=array('program'=>'编程书籍','ctf_book'=>'CTF书籍','english'=>'英文原版');

    //$site='book';
    preg_match('/[a-zA-Z_]+\z/',$a_type,$result);
    $type=$result[0];

    $conn=new mysqli('****','****','****','****');
    $conn->query("SET NAMES utf8");


    get_message($conn,$site);

echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo    '<title>'.$dic[$type].'</title>';
echo    '<meta name="keywords" content="'.$dic[$type].'">';
    echo <<<EOF
<meta name="description" content="分享编程书籍！"/>
<style>
@media (max-width: 370px) {
    span.badge{
         white-space: unset;
    }
}

</style>
EOF;

    echo '<link href="'.$path.'css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />';
    echo '<link href="'.$path.'css/style.css" rel="stylesheet" type="text/css" media="all" />';

    include_once $path.'template/head.html';

    echo '</head>';

    echo '<body>';

    echo "<div class=\"banner1\" style=\"background-image: url('".get_url()."')\">";

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
    </div>
</div>
<!-- services -->
<div class="typo">
    <div class="container">
        <div class="grid_3 grid_5">
            <h3 style="text-align: center">目录</h3>
            <ol class="breadcrumb">
EOF;
preg_match_all('/[a-zA-Z_]+/',$a_type,$result);
$result=$result[0];

$length=count($result);
$href='';
for($i=0;$i<$length;$i++)
{
    $href='../'.$href;
}
echo '<li><a href="'.$href.'">root</a></li>';

$iii=0;
for($i=$length;$i>1;$i--)
{
    $href='';
    for($ii=0;$ii<$i-1;$ii++)
    {
        $href='../'.$href;
    }
    echo '<li><a href="'.$href.'">'.$dic[$result[$iii]].'</a></li>';
    $iii++;
}
echo '<li class="active>">'.$dic[$result[$iii]].'</li>';
echo <<<EOF
            </ol>
        </div>
        
        <div class="grid_3 grid_5">
EOF;
echo '<h3>'.$dic[$type].'</h3>';
echo <<<EOF
            <div class="col-md-6" style="width: 100%">
                <p>null</p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="text-align: center">书名</th>
                            <th style="text-align: center;width: 0px">页数</th>
                            <th style="text-align: center;width: 0px">备注</th>
                        </tr>
                    </thead>
                    <tbody>
EOF;
    $sql='select name,remark,url,page from book where type="'.$type.'" order by order_id';
    $result=$conn->query($sql);
    if ($result->num_rows > 0)
    {
        $result=$result->fetch_all();

        for($i=0;$i<count($result);$i++)
        {
            echo '<tr>';
            echo    '<td><a href="'.$result[$i][2].'" target="_blank">'.$result[$i][0].'</a></td>';
            echo    '<td><span class="badge badge-primary">'.(string)$result[$i][3].'</span></td>';
            echo    '<td ><span class="badge badge-success">'.$result[$i][1].'</span></td>';
            echo '</tr>';
        }
    }

    echo <<<EOF
                    </tbody>
                </table>                    
            </div>
            
           <div class="clearfix"> </div>
        </div>
    </div>
</div>
	
EOF;




    messge_and_taili($site,$conn,$path);

}