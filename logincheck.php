<?php  
	if(isset($_POST["submit"]) && $_POST["submit"] == "登录")  
	{  
		$user = $_POST["username"];  
		$psw = $_POST["password"];  
		if($user == "" || $psw == "")  
		{  
			echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";  
		}  
		else  
		{
			$conn=mysql_connect('localhost','root','');
			if(!$conn)
			{
				die("连接失败".mysql_errno());
			}
			mysql_query("set names utf8",$conn) or die(mysql_errno());
			mysql_select_db("filmreview",$conn) or die(mysql_errno());
			$sql="select password,username from user where username='$_POST[username]'";
			$res=mysql_query($sql,$conn);
			if($row=mysql_fetch_assoc($res))
			{
				if($row['password']==md5($psw))
				{
					$name=$row['username'];
					header("Location: index.php?username=$user");
					exit();
				}
				else
				{
					header("Location: login.php?errno=1");
					exit();
				}
			}
			else
			{
				header("Location: login.php?errno=2");
				exit();
			}
			
			mysql_free_result($res);
			mysql_close($conn); 
		}  
	}  
	else  
	{  
		echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
	}  
  
?>  
