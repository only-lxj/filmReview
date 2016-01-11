<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="images/icon/favicon.ico" type="image/x-icon" />
<title>注册</title>
<link rel="stylesheet" href="style/registerCSS.css" />

</head>

<body>

<div id="main">
	<img id="goldman" src="images/goldman2.png" />
    <img id="oscers" src="images/oscers2.png" />
	<form id="form" action="regcheck.php" method="post" onSubmit="return checkForm();">  
        <input type="text" name="username" id="username" placeholder="用户名" /><br/> 
        性别<input type="radio" value="男" name="gender" />男<input type="radio" value="女" name="gender" />女<br/> 
        <input type="password" name="password" id="password" placeholder="密码（6-14位字母、数字组合）" /><br/>  
        <input type="password" name="confirm" id="confirm" placeholder="确认密码" /><br/>
        <input type="text" name="phone" id="phone" placeholder="手机号" /><br/>
        <input type="Submit" name="Submit" value="注册"/>
    </form>
    <div id="error">
    	<div id="error1">用户名不能为空！</div>
        <div id="error2">请勾选性别！</div>
        <div id="error3">6-14位的字母、数字组合！</div>
        <div id="error4">密码不一致！</div>
        <div id="error5">请输入正确的手机号！</div>
    </div>
</div>
 

<script type="text/javascript">

var error1=document.getElementById("error1");
var error2=document.getElementById("error2");
var error3=document.getElementById("error3");
var error4=document.getElementById("error4");
var error5=document.getElementById("error5");
function checkForm()
{
	String.prototype.trim=function()
	{
		return this.replace(/(^\s*)|(\s*$)/g,"");
	}
	var username=document.getElementById("username").value;
	if(username.trim()=="")
	{
		error1.style.display="block";
		return false;
	}
	
	var phone=document.getElementById("phone").value;
	if(phone.length!=11)
	{
		error5.style.display="block";
		return false;
	}
	
	var password=document.getElementById("password").value;
	if(password.match("^[0-9a-zA-Z]{6,14}$")==null)
	{
		error3.style.display="block";
		return false;
	}
	
	var confirm=document.getElementById("confirm").value;
	if(confirm!=password)
	{
		error4.style.display="block";
		return false;
	}
	
	var arr=document.getElementsByName("gender");
	var result=false;
	for(var i=0;i<arr.length;i++)
	{
		if(arr[i].checked)
		{
			result=true;
		}		
	}
	if(!result)
	{
		error2.style.display="block";
		return false;
	}
		
}

</script>
</body>
</html>
