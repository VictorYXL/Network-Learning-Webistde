<!DOCTYPE html PUBLIC "-//W3C//DTD Xphp 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<?php 	
error_reporting(E_ALL || ~E_NOTICE);
if (!isset($_COOKIE["account"]))
	echo "<script> alert('请先登录');parent.location.href='Index.php'; </script>";
?>
<head>
<title>计算机网络课程学习</title>
<!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />-->
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<a name="top"></a>
<div class="main">
  <div class="header" margin:0 auto; padding:0; width:1000px;>
      <div class="logo"><h1><a href="php.php" style="font-family:verdana;font-size:120%;color:#9F3">
      	<center><img src="Image/Img1.bmp"> </center>
       </a></h1></div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li><a href="log.php">主页</a></li>
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
    <form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
            	<td></td>
				<td ><input type="file" name="file" id="file" /> </td>
			</tr>
			<tr>
				<td align="center">添加备注</td>
				<td><textarea  type = "text" name = "more" cols="50"  rows="10" /> </textarea ></td>
			</tr>
            <tr>
            	<td></td>
				<td ><input type = "submit" name = "btnOK" value = "上传" /></td>
			</tr>
		</table>		</table>
	</form>
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
if (!isset($_COOKIE["account"]))
{
	echo "<script> alert('请先登录');parent.location.href='Index.php'; </script>";
}

if (isset($_POST['btnOK']))
{
	if ($_FILES["file"]["error"] > 0)
  	{
  		echo "<script> alert('请选择要上传的文件'); </script>";
  	}
	else if ($_FILES["file"]["size"] > 8*1024*1024)
	{
		echo "<script> alert('请选择8m以内的文件'); </script>";
	}
	else
  	{
		if(move_uploaded_file($_FILES["file"]["tmp_name"],iconv("UTF-8","gb2312","Source/".$_FILES["file"]["name"])))
			echo "<script> alert('文件上传成功'); </script>";
		else echo "<script> alert('文件上传失败'); </script>";
		echo $_FILES["file"]["tmp_name"];
		echo "Source/".$_FILES["file"]["name"];
		$name=$_FILES["file"]["name"];
		$account=$_COOKIE["account"];
		$date=date("Y-m-d");
		$more=$_POST["more"];
		$sql = "INSERT INTO file(name,account,time,more) VALUES ('$name','$account','$date','$more')";
		$query = mysql_query($sql);
  	}
}

?>
</body>
</html>
