<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="images/icon/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="style/myCSS.css" />
<title>我的账户</title>
</head>

<body>
<div id="header">
	<img id="banner" src="images/banner.jpg" />
	<div id="nav">
    	<ul>
        	<li class="active"><a id="index" href="" onClick="active(this);">首页</a></li>
            <li><a href="#" onClick="active(this);">排行榜</a></li>
            <li><a href="#" onClick="active(this);">分类</a></li>
            <li><a href="#" onClick="active(this);">影评</a></li>
        </ul>
        <div id="info">
			<?php
            error_reporting(0);
            if($_GET['username'])
            {
                echo "Hi,&nbsp; <a id='username' href='javascript:;'>".$_GET['username']."</a>";
            }
            else
            {
                echo "<div id='login'><a href='login.php'>登录</a><span>|</span><a href='register.php'>注册</a></div>";
            }
            ?>
            
        </div>
        <div id="slide">
        	<ul>
            	<li></li>
                <li><a id="my" onClick="a1();">我的账户</a></li>
                <li><a id="write" onClick="a2();">写影评</a></li>
                <li><a href='index.php'>退出登录</a></li>
            </ul>
        </div> 
    </div>
</div>
<div id="main">
	<div id="left">
    	<div id="account"><p>我的账户</p></div>
        <div id="detail">
        	<?php
				$username = $_GET['username'];
				$connect=mysql_connect('localhost','root','');
				if(!$connect)
				{
					die("连接失败".mysql_errno());
				}
				mysql_query("set names utf8",$connect) or die(mysql_errno());
				mysql_select_db("filmreview",$connect) or die(mysql_errno());
				
				$SQL="select * from user where username='$username'";
				$result=mysql_query($SQL,$connect);
				while($ROW=mysql_fetch_assoc($result))
				{
					echo '用户名:'.$ROW['username'].'<br/>';
					echo '性别:'.$ROW['gender'].'<br/>';
					echo '手机:'.$ROW['phone'].'<br/>';
				}
				
				mysql_free_result($result);
				mysql_close($connect);
			
			?>
        </div>
    </div>
    <div id="right">
    	
        <?php
        
			$username = $_GET['username'];
			if($username!=null||$username!='')
			{
				$conn=mysql_connect('localhost','root','');
				if(!$conn)
				{
					die("连接失败".mysql_errno());
				}
				mysql_query("set names utf8",$conn) or die(mysql_errno());
				mysql_select_db("filmreview",$conn) or die(mysql_errno());
				
				$sql="select * from article where username='$username' order by No desc";
				$res=mysql_query($sql,$conn);
				$arr = array();
				
				$count = 0;
				while($row=mysql_fetch_assoc($res))
				{
					$arr[$count] = $row;
					$count++;
					echo "<div class='content'><h1>".$row['title']."</h1>";
					echo "<p class='comment'>".$row['username']."<span>评论</span>《".$row['movie']."》</p>";
					echo "<p class='text'>".$row['text']."</p>";
					echo "<p class='date'>".$row['date']."</p></div>";
				}	
				if($arr==null)
				{
					echo "<div id='none'>你还没有任何影评，<br/>快去<a id='publish'>发表</a>吧！</div>";
				}
				
				
				mysql_free_result($res);
				mysql_close($conn);
				
			}
		
		
		/*
			if(isset($arr)&&$arr != null)
			{
				for($i = $count-1; $i > -1; $i--){
					foreach($arr[$i] as $key => $value)
					{
						echo $key.":".$value;
						echo "<br/>";
					}
					echo "<br>";
				}
			}
		*/
		?>
    
    </div>

</div>

<div id="footer">
	<ul>
        <li><a href="#">关于我们</a></li>
        <li><a href="#">加入我们</a></li>
        <li><a href="#">意见反馈</a></li>
    </ul>
</div>

<script src="js/myJS.js" type="text/javascript"></script>

</body>
</html>
