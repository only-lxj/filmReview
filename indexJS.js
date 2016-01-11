// JavaScript Document
var li=document.getElementById("nav").getElementsByTagName("li");
var a=document.getElementById("nav").getElementsByTagName("a");
function active(obj)
{
	for(var i=0;i<li.length;i++)
	{
		li[i].className="";
	}
	obj.parentNode.className="active";
}


var btnPrev=document.getElementsByClassName('prev')[0];
var btnNext=document.getElementsByClassName('next')[0];
var markLeft=document.getElementsByClassName('mark_left')[0];
var markRight=document.getElementsByClassName('mark_right')[0];
var ulPic=document.getElementsByClassName('pic')[0];
var liPic=ulPic.getElementsByTagName('li');

ulPic.style.height=liPic[0].offsetHeight+'px';

var nowZindex=2;
var now=0;
btnPrev.onmouseover=markLeft.onmouseover=function()
{
	startMove(btnPrev,{opacity:100},0.3);		
}
btnPrev.onmouseout=markLeft.onmouseout=function()
{
	startMove(btnPrev,{opacity:0},0.3);		
}
btnNext.onmouseover=markRight.onmouseover=function()
{
	startMove(btnNext,{opacity:100},0.3);		
}
btnNext.onmouseout=markRight.onmouseout=function()
{
	startMove(btnNext,{opacity:0},0.3);		
}

function tab()
{
	liPic[now].style.zIndex=nowZindex++;
	liPic[now].style.opacity=0;
	startMove(liPic[now],{opacity:100},0.2);	
}

btnPrev.onclick=function()
{
	now--;
	if(now==-1)
	{
		now=liPic.length-1;	
	}
	tab();
}
btnNext.onclick=function()
{
	now++;
	if(now==liPic.length)
	{
		now=0;	
	}
	tab();
}

var timer=setInterval(btnNext.onclick,4000);
carousel.onmouseover=function()
{
	clearInterval(timer);
}
carousel.onmouseout=function()
{
	timer=setInterval(btnNext.onclick,4000);
}


var heading=document.getElementsByClassName("heading")[0];
var a=heading.getElementsByTagName("a");
var span=heading.getElementsByTagName("span")[0];
var hotUl=document.getElementById("hotMovie").getElementsByTagName("ul")[0];
var hotLi=hotUl.getElementsByTagName("li");
var distance=(hotLi[0].offsetWidth+35)*4;

hotUl.style.width=(hotLi[0].offsetWidth+35)*hotLi.length+'px';
a[0].innerHTML="";
a[1].onclick=function()
{
	a[1].innerHTML="";
	a[0].innerHTML="&lt;";
	startMove(hotUl,{left:-distance},0.2);
	span.innerHTML="2/2";
}
a[0].onclick=function()
{
	a[0].innerHTML="";
	a[1].innerHTML="&gt;";
	startMove(hotUl,{left:0},0.2);
	span.innerHTML="1/2";
}

var username=document.getElementById("username");
var slide=document.getElementById("slide");
username.onmouseover=slide.onmouseover=function()
{
	slide.style.display="block";
}
username.onmouseout=slide.onmouseout=function()
{
	slide.style.display="none";
}


function getQueryString(name) {
	var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
	var r = window.location.search.substr(1).match(reg);
	if (r != null) return decodeURI(r[2]); return null;
}

var my=document.getElementById("my");
function a1()
{
	window.location.href="my.php?username=" + getQueryString("username");
}

var write=document.getElementById("write");
function a2()
{
	window.location.href="write.php?username=" + getQueryString("username");
}
