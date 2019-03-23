<?php
function messge_and_tail($site, $conn)
{
    echo <<<EOF

<!-- footer -->
	<div class="footer">
		<div class="container">
EOF;

    echo <<<EOF
			<div class="footer-grids">
				<div class="col-md-4 footer-grid-left">
					<h3>近期留言</h3>
					<ul>
EOF;

    $sql='select count(*) from message where site="'.$site.'"';
    $sum=$conn->query($sql)->fetch_all();
    $sum=$sum[0][0];
    if($sum%4)
    {
        $sum=(int)($sum/4)+1;
    }
    else
    {
        $sum=(int)($sum/4);
        if($sum==0)
        {
            $sum=1;
        }
    }

    $sql='select words,time from message where site="'.$site.'" order by id desc limit 4';
    $words=$conn->query($sql)->fetch_all();

    $temp=4- count($words);
    $i=0;
    for(;$i<count($words);$i++)
    {
        echo '<li><b '.'id="word'.(string)$i.'">';
        echo htmlspecialchars($words[$i][0]);
        echo '</b><span '.'id="time'.(string)$i.'">';
        echo $words[$i][1];
        echo '</span>';
        echo '</li>';
    }

    for($ii=0;$ii<$temp;$ii++,$i++)
    {
        echo '<li><b '.'id="word'.(string)$i.'">';
        echo '</b><span '.'id="time'.(string)$i.'">';
        echo '</span>';
        echo '</li>';
    }

    echo '</ul>';
    echo '<p style="text-align: center">第<b id="position">1</b>页/共<b id="sum">'.(string)$sum.'</b>页&ensp;<a onclick="sub()">上一页</a>&ensp;<a onclick="add()">下一页</a></p>';


    echo <<<EOF
				</div>
				<div class="col-md-4 footer-grid-left">
					<h3>New</h3>
					<form>
						<input id="in" type="text" maxlength="40" name="words" style="width: 300px" placeholder="欢迎留下您的建议" required="">
						<br/>
						<div style="height: 10px"></div>
						<input type="button" value="提交" onclick="addWords()">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
EOF;

    echo <<<EOF
			<div class="footer-bottom">
				<div class="footer-bottom-left" style="text-align: center;float: none">
					<p >站长：Ex&emsp;备案号：赣ICP备18006591号-1</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
EOF;
    echo <<<EOF
<div class="fixed_tool"> 
<a id="btn"> <img src="/images/top.png" class="fixed_tool_scrolltop" alt="返回顶部"></a>
EOF;

    echo '<script src="/js/bootstrap.js"></script>';
    echo '</body>';
}

function messge_and_taili($site, $conn,$path)
{
    echo <<<EOF

<!-- footer -->
	<div class="footer">
		<div class="container">
EOF;

    echo <<<EOF
			<div class="footer-grids">
				<div class="col-md-4 footer-grid-left">
					<h3>近期留言</h3>
					<ul>
EOF;

    $sql='select count(*) from message where site="'.$site.'"';
    $sum=$conn->query($sql)->fetch_all();
    $sum=$sum[0][0];
    if($sum%4)
    {
        $sum=(int)($sum/4)+1;
    }
    else
    {
        $sum=(int)($sum/4);
        if($sum==0)
        {
            $sum=1;
        }
    }

    $sql='select words,time from message where site="'.$site.'" order by id desc limit 4';
    $words=$conn->query($sql)->fetch_all();

    $temp=4- count($words);
    $i=0;
    for(;$i<count($words);$i++)
    {
        echo '<li><b '.'id="word'.(string)$i.'">';
        echo htmlspecialchars($words[$i][0]);
        echo '</b><span '.'id="time'.(string)$i.'">';
        echo $words[$i][1];
        echo '</span>';
        echo '</li>';
    }

    for($ii=0;$ii<$temp;$ii++,$i++)
    {
        echo '<li><b '.'id="word'.(string)$i.'">';
        echo '</b><span '.'id="time'.(string)$i.'">';
        echo '</span>';
        echo '</li>';
    }

    echo '</ul>';
    echo '<p style="text-align: center">第<b id="position">1</b>页/共<b id="sum">'.(string)$sum.'</b>页&ensp;<a onclick="sub()">上一页</a>&ensp;<a onclick="add()">下一页</a></p>';


    echo <<<EOF
				</div>
				<div class="col-md-4 footer-grid-left">
					<h3>New</h3>
					<form>
						<input id="in" type="text" maxlength="40" name="words" style="width: 300px" placeholder="欢迎留下您的建议" required="">
						<br/>
						<div style="height: 10px"></div>
						<input type="button" value="提交" onclick="addWords()">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
EOF;
    //value="欢迎留下您的建议" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '欢迎留下您的意见';}"

    echo <<<EOF
			<div class="footer-bottom">
				<div class="footer-bottom-left" style="text-align: center;float: none">
					<p >站长：Ex&emsp;备案号：赣ICP备18006591号-1</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
EOF;
    echo '<div class="fixed_tool"> ';
    echo '<a id="btn"> <img src="'.$path.'images/top.png" class="fixed_tool_scrolltop" alt="返回顶部"></a>';
    echo '</div>';
    echo '<script src="'.$path.'js/jquery-1.11.1.min.js"></script>';
    echo '<script src="'.$path.'js/bootstrap.js"></script>';
    echo '<script src="'.$path.'js/my_script.js"></script>';
    //echo '<script type="text/javascript" src="../../line_number.js"></script>';
    echo '</body>';
}

function ctf_messge_and_taili($site, $conn,$path)
{
    echo <<<EOF

<!-- footer -->
	<div class="footer">
		<div class="container">
EOF;

    echo <<<EOF
			<div class="footer-grids">
				<div class="col-md-4 footer-grid-left new1">
					<h3>近期留言</h3>
					<ul>
EOF;

    $sql='select count(*) from message where site="'.$site.'"';
    $sum=$conn->query($sql)->fetch_all();
    $sum=$sum[0][0];
    if($sum%4)
    {
        $sum=(int)($sum/4)+1;
    }
    else
    {
        $sum=(int)($sum/4);
        if($sum==0)
        {
            $sum=1;
        }
    }

    $sql='select words,time from message where site="'.$site.'" order by id desc limit 4';
    $words=$conn->query($sql)->fetch_all();

    $temp=4- count($words);
    $i=0;
    for(;$i<count($words);$i++)
    {
        echo '<li><b '.'id="word'.(string)$i.'">';
        echo htmlspecialchars($words[$i][0]);
        echo '</b><span '.'id="time'.(string)$i.'">';
        echo $words[$i][1];
        echo '</span>';
        echo '</li>';
    }

    for($ii=0;$ii<$temp;$ii++,$i++)
    {
        echo '<li><b '.'id="word'.(string)$i.'">';
        echo '</b><span '.'id="time'.(string)$i.'">';
        echo '</span>';
        echo '</li>';
    }

    echo '</ul>';
    echo '<p style="text-align: center">第<b id="position">1</b>页/共<b id="sum">'.(string)$sum.'</b>页&ensp;<a onclick="sub()">上一页</a>&ensp;<a onclick="add()">下一页</a></p>';


    echo <<<EOF
				</div>
				<div class="col-md-4 footer-grid-left">
					<h3>New</h3>
					<form>
						<input id="in" type="text" maxlength="40" name="words" style="width: 300px" value="欢迎留下您的建议" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '欢迎留下您的意见';}" required="">
						<br/>
						<div style="height: 10px"></div>
						<input type="button" value="提交" onclick="addWords()">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
EOF;

    echo <<<EOF
			<div class="footer-bottom">
				<div class="footer-bottom-left" style="text-align: center;float: none">
					<p >站长：Ex&emsp;备案号：赣ICP备18006591号-1</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
EOF;
    echo '<div class="fixed_tool"> ';
    echo '<a id="btn"> <img src="'.$path.'images/top.png" class="fixed_tool_scrolltop" alt="返回顶部"></a>';
    echo '</div>';
    echo '<script src="'.$path.'js/jquery-1.11.1.min.js"></script>';
    echo '<script src="'.$path.'js/bootstrap.js"></script>';
    echo '<script src="'.$path.'js/my_script.js"></script>';
    echo '</body>';
}

function nav_show($str,$path)
{
    if($str=='www')
    {
        $str='';
    }
    echo '<ul class="nav navbar-nav">';

    $nav=array('首页','编程入门','软件工具','CTF','推荐书籍','联系站长');
    $nav_path=array('','introduction/','test/','ctf/','book/','connect/');

    for($i=0;$i<count($nav);$i++)
    {
        echo '<li>';

        if($nav_path[$i]==$str.'/'||($str==''&&$nav_path[$i]==$str))
        {
            echo '<a class="active" href="'.$path.$nav_path[$i].'">';
        }
        else
        {
            echo '<a href="'.$path.$nav_path[$i].'">';
        }
        echo '<b>'.$nav[$i].'</b>';
        echo '</a>';
        echo '</li>';
    }

    echo '</ul>';
}

function get_message($conn,$site)
{
    if(isset($_GET['words']))
    {
        $words=$_GET['words'];
        if(strlen($words)>40*3 || $words=='')
        {
            exit(0);
        }

        $words = addslashes($words);
        $sql='insert into message (site,ip,words,time)values("'.$site.'","'.$_SERVER['REMOTE_ADDR'].'","'.$words.'","'.date('Y-m-d H:i:s').'")';
        $conn->query($sql);
        exit(0);
    }

    if(isset($_GET['num']))
    {
        $num=(int)$_GET['num'];
        $sql='select words,time from message where site="'.$site.'" order by id desc limit '.(string)(($num-1)*4).',4';
        $words=$conn->query($sql)->fetch_all();
        $s='';

        $ii=0;
        for($i=0;$i<8;)
        {
            for(;$ii<count($words);$ii++)
            {
                $s=$s.$words[$ii][0].'`@';$i++;
                if($i==7)
                {
                    $s=$s.$words[$ii][1];$i++;
                }
                else if($i<7)
                {
                    $s=$s.$words[$ii][1].'`@';$i++;
                }

            }
            if($i==7)
            {
                $s=$s;$i++;
            }
            else if($i<7)
            {
                $s=$s.'`@';$i++;
            }

        }
        echo htmlspecialchars($s);
        exit();
    }
}
