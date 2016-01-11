<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="images/icon/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="style/writeCSS.css" />
<title>写影评</title>
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
    <form id="form" action="writeProcess.php" method="POST">
    	<table>
        	<tr>
            	<td>题目：</td><td><input id="title" type="text" name="title" /></td>
            </tr>
            <tr>
            	<td>电影名：</td><td><input id="movie" type="text" name="movie" /></td>
            </tr>
            <tr>
            	<td>内容：</td><td><textarea id="text" name="text" cols="20" rows="5"></textarea></td>
            </tr>
        </table>
        <br/>
        <input id="hidden" type="hidden" name="username" value="" />
        <input id="date" type="hidden" name="date" value="" />
        <input type="submit" name="submit" value="发表" />
        <input id="cancel" type="button" value="取消" onClick="return clearForm();" />
    </form>
    
</div>



<script src="js/writeJS.js" type="text/javascript"></script>

</body>
</html>
