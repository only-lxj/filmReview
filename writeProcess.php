<?php  
	if(isset($_POST["submit"]) && $_POST["submit"] == "发表")  
	{  
		$title = $_POST["title"];
		$movie = $_POST["movie"];
		$user = $_POST["username"];  
		$text = $_POST["text"];  
		$date = $_POST["date"];
		if($text == "")  
		{  
			echo "<script>alert('请输入发表内容！'); history.go(-1);</script>";  
		}  
		else  
		{
			$conn=mysql_connect('localhost','root','');
			if(!$conn)
			{
				die("连接失败".mysql_errno());
			}
			mysql_query("set names utf8",$conn) or die(mysql_errno());
			$select=mysql_select_db("filmreview",$conn); 
			if($select)  
			{  
				 
				$res="insert into article(title,movie,username,text,date) values('$_POST[title]','$_POST[movie]','$_POST[username]','$_POST[text]','$_POST[date]')";  
				if(mysql_query($res,$conn))  
					echo "发表成功"."<br />";  
				else  
					echo "服务器繁忙"."<br />";  
			}
			
			header("Location: my.php?username=$user");
			mysql_close($conn); 
		}  
	}  
	else  
	{  
		echo "<script>alert('发表未成功！'); history.go(-1);</script>";  
	}  
  
?>  
