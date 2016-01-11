<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="images/icon/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="style/indexCSS.css" />
<script type="text/javascript" src="js/move.js"></script>
<title>OSCERS</title>
</head>

<body>
<div id="header">
	<img id="banner" src="images/banner.jpg" />
	<div id="nav">
    	<ul>
        	<li class="active"><a href="#" onClick="active(this);">首页</a></li>
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
	<div id="carousel">
        <ul class="pic">
            <div class="prev"><img src="images/prev.png" /></div>
            <div class="next"><img src="images/next.png" /></div>
            <a class="mark_left" href="javascript:;"></a>
            <a class="mark_right" href="javascript:;"></a>
            <li style="z-index:1"><img src="images/carousel/1.jpg" /></li>
            <li><img src="images/carousel/2.jpg" /></li>
            <li><img src="images/carousel/3.jpg" /></li>
            <li><img src="images/carousel/4.jpg" /></li>
    	</ul>
    </div>
    <div id="left">
        <div id="hot">
            <div class="heading">
                <img src="images/icon/hot.png" />
                <h1>正在热映</h1>
                <div><a href="javascript:;">&lt;</a><span>1/2</span><a href="javascript:;">&gt;</a></div>
            </div>
            <div id="hotMovie">
                <ul>
                    <li>
                        <a href="#">
                        <img src="images/hot/1.jpg" />
                        <p>万万没想到<span>7.1</span></p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <img src="images/hot/2.jpg" />
                        <p>老炮儿<span>7.9</span></p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <img src="images/hot/3.jpg" />
                        <p>寻龙诀<span>4.5</span></p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <img src="images/hot/4.jpg" />
                        <p>恶棍天使<span>3.7</span></p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <img src="images/hot/5.jpg" />
                        <p>师傅 <span>8.3</span></p>
                        </a>
                    </li> 
                    <li>
                        <a href="#">
                        <img src="images/hot/6.jpg" />
                        <p>极盗者<span>6.8</span></p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                        <img src="images/hot/7.jpg" />
                        <p>海绵宝宝<span>7.2</span></p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="recommend">
        	<div class="heading">
                <img src="images/icon/recommend.png" />
                <h1>热门推荐</h1>
                <div><a href="#"><img src="images/icon/more.png" /></a></div>
            </div>
            <ul class="movie">
                <li>
                    <a href="#">
                    <img src="images/recommend/1.jpg" />
                    <p>年轻气盛<span>8.2</span></p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <img src="images/recommend/2.jpg" />
                    <p>实习生<span>7.7</span></p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <img src="images/recommend/3.jpg" />
                    <p>夏洛特烦恼<span>7.7</span></p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <img src="images/recommend/4.jpg" />
                    <p>小王子<span>8.4</span></p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <img src="images/recommend/5.jpg" />
                    <p>头脑特工队<span>8.7</span></p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <img src="images/recommend/6.jpg" />
                    <p>卡罗尔<span>8.7</span></p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <img src="images/recommend/7.jpg" />
                    <p>八恶人<span>8.7</span></p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <img src="images/recommend/8.jpg" />
                    <p>荒野猎人<span>8.4</span></p>
                    </a>
                </li>
            </ul>
        </div>
        <div id="memory">
        	<div class="heading">
                <img src="images/icon/memory.png" />
                <h1>经典回眸</h1>
                <div><a href="#"><img src="images/icon/more.png" /></a></div>
            </div>
            <ul class="movie">
                <li>
                    <a href="#">
                    <img src="images/memory/1.jpg" />
                    <p>肖申克的救赎<span>9.6</span></p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <img src="images/memory/2.jpg" />
                    <p>这个杀手不太冷<span>9.4</span></p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <img src="images/memory/3.jpg" />
                    <p>阿甘正传<span>9.4</span></p>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <img src="images/memory/4.jpg" />
                    <p>盗梦空间<span>9.2</span></p>
                    </a>
                </li>
            </ul>
        </div>
        <div id="comment">
        	<div class="heading">
                <img src="images/icon/comment.png" />
                <h1>观影者说</h1>
                <div><a href="#"><img src="images/icon/more.png" /></a></div>
            </div>
            <ul id="commentMovie">
            	<li>
                	<a href="#"><img src="images/icon/avatar1.png" /></a>
                    <h1>走错场的二人转，进错组的甄嬛</h1>
                    <span><a href="#">鸿歌</a>评论<a href="#">《恶棍天使》</a></span>
                    <p>昨天终于看了《恶棍天使》。终于，破灭了我对邓超喜剧的期待，早前我预计票房会爆，可是现在纵然有圣诞和元旦两个大节，有邓超孙俪无敌的国民度路人缘，我都要对票房打大大的问号了。 如果不是因为邓超孙俪联袂演出，我真的会给这部片子打一分的。 我对我是很爱娘娘的，当然也爱屋及乌她老公...<a href="#">（全文）</a></p>
                </li>
                <li>
                	<a href="#"><img src="images/icon/avatar2.png" /></a>
                    <h1>寻龙诀：这才是正宗的摸金范</h1>
                    <span><a href="#">因吹丝汀</a>评论<a href="#">《寻龙诀》</a></span>
                    <p>“每逢夙夜之交，彼岸花盛开，生死之门就会被打开”。故事围绕着彼岸花而逐一展开。 ㈠ 最好的胡八一，最好的陈坤。 当那个满脸络腮胡子，一头凌乱的长发，蓬头垢面的陈坤出现在荧幕上，我就知道，最好的胡八一，他来了。他带着不修边幅的外形，沉的嗓音，颓废的气场，从书中走到我面前...<a href="#">（全文）</a></p>
                </li>
                <li>
                	<a href="#"><img src="images/icon/avatar3.png" /></a>
                    <h1>最好的伊莎贝拉</h1>
                    <span><a href="#">藤井树先生</a>评论<a href="#">《伊莎贝拉》</a></span>
                    <p>张碧欣对马振成有着一种明摆着的依恋。 在伊莎贝拉和伊莎贝拉离开她之后，她找到了新的归属。少女的情怀并未在各式偶像中投射，也并未在校园里释放，她说他们都不适合她。她选择了马振成，一个贪恋酒肉大腹便便的司警，初衷是亲情，落脚却是爱情。砸向马振成的酒瓶，对马振成情人的揶揄，一连咬了七口的苹果...<a href="#">（全文）</a></p>
                </li>
                <li>
                	<a href="#"><img src="images/icon/avatar1.png" /></a>
                    <h1>走错场的二人转，进错组的甄嬛</h1>
                    <span><a href="#">鸿歌</a>评论<a href="#">《恶棍天使》</a></span>
                    <p>昨天终于看了《恶棍天使》。终于，破灭了我对邓超喜剧的期待，早前我预计票房会爆，可是现在纵然有圣诞和元旦两个大节，有邓超孙俪无敌的国民度路人缘，我都要对票房打大大的问号了。 如果不是因为邓超孙俪联袂演出，我真的会给这部片子打一分的。 我对我是很爱娘娘的，当然也爱屋及乌她老公...  <a href="#">（全文）</a></p>
                </li>
            </ul>
        </div>
    </div>
    
    <div id="right">
    	<div id="charts">
    		<div class="heading2">
            	<img src="images/icon/charts.png" />
                <h1>本周排行榜</h1>
            </div>
            <table id="chartsMovie">
            	<tr>
                	<td><span>1</span></td><td><a href="#">攀登梅鲁峰</a></td>
                </tr>
                <tr>
                	<td><span>2</span></td><td><a href="#">火星救援</a></td>
                </tr>
                <tr>
                	<td><span>3</span></td><td><a href="#">艾米</a></td>
                </tr>
                <tr>
                	<td>4</td><td><a href="#">小萝莉的猴神大叔</a></td>
                </tr>
                <tr>
                	<td>5</td><td><a href="#">思悼</a></td>
                </tr>
                <tr>
                	<td>6</td><td><a href="#">我的少女时代</a></td>
                </tr>
                <tr>
                	<td>7</td><td><a href="#">师父</a></td>
                </tr>
                <tr>
                	<td>8</td><td><a href="#">云中行走</a></td>
                </tr>
                <tr>
                	<td>9</td><td><a href="#">旅行终点</a></td>
                </tr>
                <tr>
                	<td>10</td><td><a href="#">维多利亚</a></td>
                </tr>
            </table>
            <a href="#">更多榜单<span>》</span></a>
    	</div>
        <div id="classify">
        	<div class="heading2">
            	<img src="images/icon/classify.png" />
                <h1>电影分类</h1>
            </div>
            <div class="classifyMovie">
            	<h1>年代</h1>
                <div>
                	<a href="#"><span>2015</span></a>
                    <a href="#"><span>2014</span></a>
                    <a href="#"><span>2013</span></a>
                    <a href="#"><span>2012</span></a>
                    <a href="#"><span>2011</span></a>
                	<a href="#"><span>2010</span></a>
                    <a href="#"><span>2009</span></a>
                    <a href="#"><span>2008</span></a>
                    <a href="#"><span>2007</span></a>
                    <a href="#"><span>2006</span></a>
                    <a href="#"><span>2005</span></a>
                    <a href="#"><span>···</span></a>        
                </div>
            </div>
            <div class="classifyMovie">
            	<h1>类型</h1>
                <div>
                	<a href="#"><span>爱情</span></a>
                    <a href="#"><span>喜剧</span></a>
                    <a href="#"><span>悬疑</span></a>
                    <a href="#"><span>剧情</span></a>
                    <a href="#"><span>科幻</span></a>
                	<a href="#"><span>青春</span></a>
                    <a href="#"><span>励志</span></a>
                    <a href="#"><span>恐怖</span></a>
                    <a href="#"><span>动作</span></a>
                    <a href="#"><span>纪实</span></a>
                    <a href="#"><span>动画</span></a>
                    <a href="#"><span>···</span></a>        
                </div>
            </div>
            <div class="classifyMovie">
            	<h1>国家/地区</h1>
                <div>
                	<a href="#"><span>美国</span></a>
                    <a href="#"><span>日本</span></a>
                    <a href="#"><span>韩国</span></a>
                    <a href="#"><span>大陆</span></a>
                    <a href="#"><span>港台</span></a>
                	<a href="#"><span>英国</span></a>
                    <a href="#"><span>德国</span></a>
                    <a href="#"><span>印度</span></a>
                    <a href="#"><span>泰国</span></a>
                    <a href="#"><span>法国</span></a>
                    <a href="#"><span>荷兰</span></a>
                    <a href="#"><span>···</span></a>        
                </div>
            </div>
            <a href="#">更多分类<span>》</span></a>
        </div>
    </div>
    
</div>

<div id="footer">
	<ul>
        <li><a href="#">关于我们</a></li>
        <li><a href="#">加入我们</a></li>
        <li><a href="#">意见反馈</a></li>
    </ul>
</div>



<script src="js/indexJS.js" type="text/javascript"></script>
</body>
</html>
