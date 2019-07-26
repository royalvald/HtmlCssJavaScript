<?php 
/*接受get或post请求，并返回数据*/
header("Content-type:text/plain;charset:utf-8");
date_default_timezone_set('PRC');	//设置当前时区为北京

if(isset($_GET['name'])){
	echo "您的姓名是".$_GET['name']."<br/>本次数据提交采用的是GET方法<br/>当前系统时间为：".date("Y-m-d H:i:s");	
}
if(isset($_POST['name'])){
	echo "您的姓名是".$_POST['name'].",年龄".$_POST['age']."岁<br/>本次数据提交采用的是POST方法<br/>当前系统时间为：".date("Y-m-d H:i:s");	
	}



?>