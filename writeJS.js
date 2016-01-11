function getQueryString(name) {
	var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
	var r = window.location.search.substr(1).match(reg);
	if (r != null) return decodeURI(r[2]); return null;
}
var hidden=document.getElementById("hidden");
hidden.value=getQueryString("username");

function toDouble(n){
	if(n<10)	return '0'+n;
	else	return ''+n;
}
var date=document.getElementById("date");
var myDate = new Date();
date.value=myDate.getFullYear()+'-'+(myDate.getMonth()+1)+'-'+myDate.getDate()+' '+toDouble(myDate.getHours())+':'+toDouble(myDate.getMinutes());

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

var index=document.getElementById("index");
index.href="index.php?username="+getQueryString("username");


function clearForm()
{
	if(confirm("确定放弃吗？"))
   {
		document.getElementById("title").value="";
		document.getElementById("movie").value="";
		document.getElementById("text").value="";
   }
}
