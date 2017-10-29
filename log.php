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
  
  
	<div class="content">
      <div class="clr"></div>
        <div class="logon">
      <br/>      <br/>      <br/>      <br/>		<br/>      <br/>      <br/>
      <center>
      <?php 
	  error_reporting(E_ALL || ~E_NOTICE);
	  	echo $_COOKIE["account"];
	  ?>
      <br/>欢迎学习
      <form action = "" method = "post" name = "myform">
      	<input type = "submit" name = "btnOut" value = "退出" />
      </form>
	  </center>
      </div>
      
      <div class="ins" >
      </div>
      
      <div class="major">

      </div>
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

if (isset($_POST["btnOut"]))
{
	setcookie("account");
	header("Location:index.php");
}
?>
</body>
</html>
