//获取外部样式表
function getStyle(obj,name)
{
	if(obj.currentStyle)
	{
		return obj.currentStyle[name];
	}
	else
	{
		return getComputedStyle(obj,false)[name];
	}
}
//运动框架
//调用：startMove(对象,{属性1:值,属性2:值},速度（0-1）,运动完成后调用的函数)
//例子：startMove(oDiv,{width:200.opacity:100},0.3,function(){alert('a');})
function startMove(obj,json,rate, fnEnd)
{
	clearInterval(obj.timer);
	obj.timer=setInterval(function(){
		var bStop=true;
		for(var attr in json)              //json{attr:iTarget}
		{
			var initial=0;
			//获取初始值
			if(attr=='opacity')
			{
				initial=Math.round(parseFloat(getStyle(obj,attr))*100);
			}
			else
			{
				initial=parseInt(getStyle(obj, attr));
			}
			var speed=(json[attr]-initial)*rate;
			speed=speed>0?Math.ceil(speed):Math.floor(speed);
			
			if(initial!=json[attr])
			{
				bStop=false;
			}
			
			//透明度单独判断，单位不同时可以加判断条件（else if）
			if(attr=='opacity')
			{
				obj.style.filter='alpha(opacity:'+(initial+speed)+')';
				obj.style.opacity=(initial+speed)/100;
			}
			else
			{
				obj.style[attr]=initial+speed+'px';
			}
		}
		
		if(bStop)
		{
			clearInterval(obj.timer);
			if(fnEnd)
				fnEnd();
		}
	},30);
	
}
