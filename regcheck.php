<?php  
	error_reporting(0);
	if(isset($_POST["Submit"]) && $_POST["Submit"] == "注册")  
	{  
		$user = $_POST["username"];  
		$psw = $_POST["password"];  
		$psw_confirm = $_POST["confirm"];  
		if($user == "" || $psw == "" || $psw_confirm == "")  
		{  
			echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
		}  
		else  
		{  
			if($psw == $psw_confirm)  
			{  
				$conn=mysql_connect("localhost","root","");  
				mysql_query("set names utf8",$conn) or die(mysql_errno());
				mysql_select_db("filmreview",$conn) or die(mysql_errno());  
				$sql = "select username from user where username = '$_POST[username]'"; 
				$result = mysql_query($sql,$conn);  
				$num = mysql_num_rows($result);  
				if($num)  
				{  
					echo "<script>alert('用户名已存在'); history.go(-1);</script>";  
				}  
				else  
				{  
					$sql_insert = "insert into user (username,password,gender,phone) values ('$_POST[username]',md5('$_POST[password]'),'$_POST[gender]','$_POST[phone]')";  
					$res_insert = mysql_query($sql_insert,$conn);  
					if($res_insert)  
					{
						header("Location: index.php?username=$user"); 
					}  
					else  
					{  
						echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
					}  
				}  
			}  
			else  
			{  
				echo "<script>alert('密码不一致！'); history.go(-1);</script>";  
			}  
		}  
	}  
	else  
	{  
		echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
	}  
?>  
