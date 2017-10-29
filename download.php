<!DOCTYPE html PUBLIC "-//W3C//DTD Xphp 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<?php 	
error_reporting(E_ALL || ~E_NOTICE);
if (!isset($_COOKIE["account"]))
	echo "<script> alert('请先登录');parent.location.href='Index.php'; </script>";
?>
<head>
<title>计算机网络课程学习</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="styleD.css" rel="stylesheet" type="text/css" />
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
  
  	<?php 
		include"Connections/connect.php";
		$sql="SELECT * FROM file order by time desc";
		$query=mysql_query($sql);
		$cou=0;
	?>
	<div class="content">
      <center>
        <table  width=900px style="border-color"  border="1">
        <tr align=center height=38px>
        	<td align="center" width=450px>资源列表</td>
            <td align="center" width=70px>上传者</td>
            <td align="center" width=70px>上传时间</td>
            <td align="center" width=310px>备注</td>
        </tr>
		<?php 
			while($row=mysql_fetch_array($query))
			{
				$cou++;
				echo "<tr height=38px>";
				echo "<td align='center'><a href='Source/".$row['name']."'>".$row['name']."</a></td>";
				echo "<td align='center'>".$row['account']."</td>";
				echo "<td align='center'>".$row['time']."</td>";
				echo "<td align='center'>".$row['more']."</td>";
				echo "</tr>";
			} 
			echo "共 ".$cou." 个文件，当前第 1 页，共 1 页";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href='download.php'>上一页</a>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href='download.php'>下一页</a>";
		?>       

        
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
