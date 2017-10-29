<!DOCTYPE html PUBLIC "-//W3C//DTD Xphp 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>计算机网络课程学习</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="styleS.css" rel="stylesheet" type="text/css" />
</head>
<body>
<a name="top"></a>
<div class="main">
  <div class="header" margin:0 auto; padding:0; width:1000px;>
      <div class="logo"><h1><a href="log.php" style="font-family:verdana;font-size:120%;color:#9F3">
      	<center><img src="../Image/Img1.bmp"> </center>
       </a></h1></div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li><a href="../log.php">主页</a></li>
          <li><a href="../learn.php">课程学习</a></li>
          <li><a href="../test.php">课程测试</a></li>
          <li><a href="../download.php">课件下载</a></li>
          <li><a href="../upload.php">课件上传</a></li>
        </ul>
      </div>
      <div class="clr"></div>
  </div>
  
  
  <a name="top"></a>
  
  
	<div class="content">
      <center>
	  <?php 
	  	echo $_COOKIE["account"];
	  ?>，欢迎学习
      <br/><br/>
        <table  width=600px style="border-color"  border="1">
        <tr align=center height=38px><td align="center">
        	第八章：下一代互联网 （视频教程）
        </td>
        <tr height=400px><td align="center">
	        <video width="580" height="380" controls="controls">  
    	    <source src="../Source/第八章 下一代互联网.mp4" type="video/mp4" ></source>  
	    </video>
        </td></tr>
		<tr align=center height=38px><td >
        	<a href="U7S.php">上一章</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="U8S.php">下一章</a>
        </td>
        </table>
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
if (!isset($_COOKIE["account"]))
{
	echo "<script> alert('请先登录');parent.location.href='Index.php'; </script>";
}
?>
</body>
</html>
