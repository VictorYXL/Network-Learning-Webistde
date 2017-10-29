<!DOCTYPE html PUBLIC "-//W3C//DTD Xphp 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>计算机网络课程学习</title>
<!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />-->
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<a name="top"></a>
<div class="main">
  <div class="header" margin:0 auto; padding:0; width:1000px;>
      <div class="logo"><h1><a href="Index.php" style="font-family:verdana;font-size:120%;color:#9F3">
      	<center><img src="Image/Img1.bmp"> </center>
       </a></h1></div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li><a href="index.php">主页</a></li>
          <li><a href="learn.php">课程学习</a></li>
          <li><a href="test.php">课程测试</a></li>
          <li><a href="download.php">课件下载</a></li>
          <li><a href="upload.php">课件上传</a></li>
        </ul>
      </div>
      <div class="clr"></div>
  </div>
  
  
  <a name="top"></a>
  
  
	<div class="reg">
    <center>
	<!--登录表单-->
	<form action = "" method = "post" name = "myform">
		<table>
			<tr>
				<td>账号:</td>
				<td><input type = "text" name = "account" /></td>
			</tr>
			<tr>
				<td>密码:</td>
				<td><input type = "password" name = "password" /></td>
			</tr>
            <tr>
				<td>请再输入一次密码:</td>
				<td><input type = "password" name = "repassword" /></td>
			</tr>
			<tr>
				<td>性别:</td>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                	<input type = "radio" name = "sex" value="male"/>男
	                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                	<input type = "radio" name = "sex" value="female"/>女</td>
			</tr>
            <tr>
				<td>年龄:</td>
				<td><input type = "text" name = "age" /></td>
			</tr>
			<tr>
				<td></td><td><input type = "submit" name = "btnReg" value = "提交" /></td>
			</tr>
		</table>
	</form>
	<!--登录表单结束-->
	</center>
  	</div> 

	
  <div class="footer">
  
      <p class="lf" >
        <center>&copy;一切解释权归制作者所有&nbsp;|
       <a href="#top">回到顶部</a></center>
        <center>联系方式:13571945271</center>
        </p>
      <div class="clr"></div>
      
    </div>
</div>
<?php
error_reporting(E_ALL || ~E_NOTICE);
include("Connections/connect.php");
$account = $_POST["account"];
$password = $_POST["password"];
$repassword = $_POST["repassword"];
$account = $_POST["account"];
if ($_POST["sex"]=='male')
	$sex=1;
else $sex=0;
$age=$_POST["age"];

$sql = "SELECT account,password FROM student WHERE account = '$account'";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);



if ($account==$row['account'])
$str="此账号已存在，请直接登陆";
else if ($account=="")
$str="账号不能为空";
else if ($password=="")
$str="密码不能为空";
else if ($password!=$repassword)
$str="两次密码输入不一致，请核对";
else if (!is_numeric($age) || $age<=0)
$str="请正确输入年龄";
else $str="注册成功";
if(isset($_POST['btnReg']))
{
	echo "<script> alert('$str');</script>";
	if ($str=="注册成功")
	{
		$query = mysql_query("
		INSERT INTO student (account, password, sex, age) VALUES ('$account', '$password', '$sex', '$age')
		");
		setcookie("account",$account);
		header("Location:log.php");
	}
}

?>
</body>
</html>
