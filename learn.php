<!DOCTYPE html PUBLIC "-//W3C//DTD Xphp 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 	
error_reporting(E_ALL || ~E_NOTICE);
if (!isset($_COOKIE["account"]))
	echo "<script> alert('请先登录');parent.location.href='Index.php'; </script>";
?>
<title>计算机网络课程学习</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="styleL.css" rel="stylesheet" type="text/css" />
</head>
<body>
<a name="top"></a>
<div class="main">
  <div class="header" margin:0 auto; padding:0; width:1000px;>
      <div class="logo"><h1><a href="log.php" style="font-family:verdana;font-size:120%;color:#9F3">
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
      <center>
      <br/>
	  <?php 
		echo $_COOKIE["account"];
	  ?>，欢迎学习
      <br/><br/>
        <table  width=400px style="border-color"  border="1">
        <tr align=center height=38px><td align="center">
        	目录
        </td>
        <tr align=center height=38px><td align="center">
        	<a href="Learn/U1L1.php">第一章：概述</a>
        </td><td><a href="Learn/U1S.php">视频教学</a></td></tr>
        <tr align=center height=38px><td align="center">
        	<a href="Learn/U2L1.php">第二章：物理层述</a>
        </td><td><a href="Learn/U2S.php">视频教学</a></td></tr>
        <tr align=center height=38px><td align="center">
        	<a href="Learn/U3L1.php">第三章：数据链路层</a>
        </td><td><a href="Learn/U3S.php">视频教学</a></td></tr>
        <tr align=center height=38px><td align="center">
        	<a href="Learn/U4L1.php">第四章：网络层</a>
        </td><td><a href="Learn/U4S.php">视频教学</a></td></tr>
        <tr align=center height=38px><td align="center">
        	<a href="Learn/U5L1.php">第五章：传输层</a>
        </td><td><a href="Learn/U5S.php">视频教学</a></td></tr>
        <tr align=center height=38px><td align="center">
        	<a href="Learn/U6L1.php">第六章：应用层</a>
        </td><td><a href="Learn/U6S.php">视频教学</a></td></tr>
        <tr align=center height=38px><td align="center">
        	<a href="Learn/U7L1.php">第七章：网络安全</a>
        </td><td><a href="Learn/U7S.php">视频教学</a></td></tr>
        <tr align=center height=38px><td align="center">
        	<a href="Learn/U8L1.php">第八章：下一代互联网</a>
        </td><td><a href="Learn/U8S.php">视频教学</a></td></tr>

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
</body>
</html>
