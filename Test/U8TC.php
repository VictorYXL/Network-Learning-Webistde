<!DOCTYPE html PUBLIC "-//W3C//DTD Xphp 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>计算机网络课程学习</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="styleT.css" rel="stylesheet" type="text/css" />
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
      <br/>
	  <?php 
	    include("../Connections/connect.php");
	  	echo $_COOKIE["account"];
	  ?>，欢迎测试
      <br/><br/>
      <form action = "" method = "post" name = "myform" >
        <table  width=1000px style="border-color"  border="1">
        <tr align=center height=38px><td align="center">
        	第一章：概述 （测试）
        </td>
        
        <tr height=80px><td align="center">
        <?php 
		$sql="SELECT question,A,B,C,D,answer FROM test WHERE chapter=8 && no=1";$query = mysql_query($sql);$row = mysql_fetch_array($query);
		$question=$row['question'];$A=$row['A'];$B=$row['B'];$C=$row['C'];$D=$row['D'];$answer1=$row['answer'];
		echo "1、 ".$question;?><br/>
        <input type = "radio" name = "T1" value="T1A"/><?php echo "A) ".$A ?>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp
        <input type = "radio" name = "T1" value="T1B"/><?php echo "B) ".$B ?><br/>
        <input type = "radio" name = "T1" value="T1C"/><?php echo "C) ".$C ?>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp
        <input type = "radio" name = "T1" value="T1D"/><?php echo "D) ".$D ?>
        </td></tr>
        
        <tr height=80px><td align="center">
        <?php 
		$sql="SELECT question,A,B,C,D,answer FROM test WHERE chapter=8 && no=2";$query = mysql_query($sql);$row = mysql_fetch_array($query);
		$question=$row['question'];$A=$row['A'];$B=$row['B'];$C=$row['C'];$D=$row['D'];$answer2=$row['answer'];
		echo "2、 ".$question;?><br/>
        <input type = "radio" name = "T2" value="T2A"/><?php echo "A) ".$A ?>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp
        <input type = "radio" name = "T2" value="T2B"/><?php echo "B) ".$B ?><br/>
        <input type = "radio" name = "T2" value="T2C"/><?php echo "C) ".$C ?>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp
        <input type = "radio" name = "T2" value="T2D"/><?php echo "D) ".$D ?>
        </td></tr>        
        
        <tr height=80px><td align="center">
        <?php 
		$sql="SELECT question,A,B,C,D,answer FROM test WHERE chapter=8 && no=3";$query = mysql_query($sql);$row = mysql_fetch_array($query);
		$question=$row['question'];$A=$row['A'];$B=$row['B'];$C=$row['C'];$D=$row['D'];$answer3=$row['answer'];
		echo "3、 ".$question;?><br/>
        <input type = "radio" name = "T3" value="T3A"/><?php echo "A) ".$A ?>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp
        <input type = "radio" name = "T3" value="T3B"/><?php echo "B) ".$B ?><br/>
        <input type = "radio" name = "T3" value="T3C"/><?php echo "C) ".$C ?>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp
        <input type = "radio" name = "T3" value="T3D"/><?php echo "D) ".$D ?>
        </td></tr>        
        
        
        <tr height=80px><td align="center">
        <?php 
		$sql="SELECT question,A,B,C,D,answer FROM test WHERE chapter=8 && no=4";$query = mysql_query($sql);$row = mysql_fetch_array($query);
		$question=$row['question'];$A=$row['A'];$B=$row['B'];$C=$row['C'];$D=$row['D'];$answer4=$row['answer'];
		echo "4、 ".$question;?><br/>
        <input type = "radio" name = "T4" value="T4A"/><?php echo "A) ".$A ?>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp
        <input type = "radio" name = "T4" value="T4B"/><?php echo "B) ".$B ?><br/>
        <input type = "radio" name = "T4" value="T4C"/><?php echo "C) ".$C ?>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp
        <input type = "radio" name = "T4" value="T4D"/><?php echo "D) ".$D ?>
        </td></tr>        
        
        <tr height=80px><td align="center">
        <?php 
		$sql="SELECT question,A,B,C,D,answer FROM test WHERE chapter=8 && no=5";$query = mysql_query($sql);$row = mysql_fetch_array($query);
		$question=$row['question'];$A=$row['A'];$B=$row['B'];$C=$row['C'];$D=$row['D'];$answer5=$row['answer'];
		echo "5、 ".$question;?><br/>
        <input type = "radio" name = "T5" value="T5A"/><?php echo "A) ".$A ?>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp
        <input type = "radio" name = "T5" value="T5B"/><?php echo "B) ".$B ?><br/>
        <input type = "radio" name = "T5" value="T5C"/><?php echo "C) ".$C ?>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp
        <input type = "radio" name = "T5" value="T5D"/><?php echo "D) ".$D ?>
        </td></tr>        

        <tr height=80px><td align="center">
        <?php 
		$sql="SELECT question,A,B,C,D,answer FROM test WHERE chapter=8 && no=6";$query = mysql_query($sql);$row = mysql_fetch_array($query);
		$question=$row['question'];$A=$row['A'];$B=$row['B'];$C=$row['C'];$D=$row['D'];$answer6=$row['answer'];
		echo "6、 ".$question;?><br/>
        <input type = "radio" name = "T6" value="T6A"/><?php echo "A) ".$A ?>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp
        <input type = "radio" name = "T6" value="T6B"/><?php echo "B) ".$B ?><br/>
        <input type = "radio" name = "T6" value="T6C"/><?php echo "C) ".$C ?>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp
        <input type = "radio" name = "T6" value="T6D"/><?php echo "D) ".$D ?>
        </td></tr>

        <tr height=80px><td align="center">
        <?php 
		$sql="SELECT question,A,B,C,D,answer FROM test WHERE chapter=8 && no=7";$query = mysql_query($sql);$row = mysql_fetch_array($query);
		$question=$row['question'];$A=$row['A'];$B=$row['B'];$C=$row['C'];$D=$row['D'];$answer7=$row['answer'];
		echo "7、 ".$question;?><br/>
        <input type = "radio" name = "T7" value="T7A"/><?php echo "A) ".$A ?>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp
        <input type = "radio" name = "T7" value="T7B"/><?php echo "B) ".$B ?><br/>
        <input type = "radio" name = "T7" value="T7C"/><?php echo "C) ".$C ?>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp
        <input type = "radio" name = "T7" value="T7D"/><?php echo "D) ".$D ?>
        </td></tr>

        <tr height=80px><td align="center">
        <?php 
		$sql="SELECT question,A,B,C,D,answer FROM test WHERE chapter=8 && no=8";$query = mysql_query($sql);$row = mysql_fetch_array($query);
		$question=$row['question'];$A=$row['A'];$B=$row['B'];$C=$row['C'];$D=$row['D'];$answer8=$row['answer'];
		echo "8、 ".$question;?><br/>
        <input type = "radio" name = "T8" value="T8A"/><?php echo "A) ".$A ?>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp
        <input type = "radio" name = "T8" value="T8B"/><?php echo "B) ".$B ?><br/>
        <input type = "radio" name = "T8" value="T8C"/><?php echo "C) ".$C ?>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp
        <input type = "radio" name = "T8" value="T8D"/><?php echo "D) ".$D ?>
        </td></tr>

        <tr height=90px><td align="center">
        <?php 
		$sql="SELECT question,A,B,C,D,answer FROM test WHERE chapter=8 && no=9";$query = mysql_query($sql);$row = mysql_fetch_array($query);
		$question=$row['question'];$A=$row['A'];$B=$row['B'];$C=$row['C'];$D=$row['D'];$answer9=$row['answer'];
		echo "9、 ".$question;?><br/>
        <input type = "radio" name = "T9" value="T9A"/><?php echo "A) ".$A ?>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp
        <input type = "radio" name = "T9" value="T9B"/><?php echo "B) ".$B ?><br/>
        <input type = "radio" name = "T9" value="T9C"/><?php echo "C) ".$C ?>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp
        <input type = "radio" name = "T9" value="T9D"/><?php echo "D) ".$D ?>
        </td></tr>

        <tr height=100px><td align="center">
        <?php 
		$sql="SELECT question,A,B,C,D,answer FROM test WHERE chapter=8 && no=10";$query = mysql_query($sql);$row = mysql_fetch_array($query);
		$question=$row['question'];$A=$row['A'];$B=$row['B'];$C=$row['C'];$D=$row['D'];$answer10=$row['answer'];
		echo "10、 ".$question;?><br/>
        <input type = "radio" name = "T10" value="T10A"/><?php echo "A) ".$A ?>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp
        <input type = "radio" name = "T10" value="T10B"/><?php echo "B) ".$B ?><br/>
        <input type = "radio" name = "T10" value="T10C"/><?php echo "C) ".$C ?>&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp
        <input type = "radio" name = "T10" value="T10D"/><?php echo "D) ".$D ?>
        </td></tr>
        
		<tr align=center height=38px><td >
        	<input type = "submit" name = "btnSubAns" value = "提交" />
        </td>
        </table>
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
error_reporting(E_ALL^E_NOTICE);
if (!isset($_COOKIE["account"]))
{
	echo "<script> alert('请先登录');parent.location.href='log.php'; </script>";
}
if (isset($_POST['btnSubAns']))
{
	$score=10;
	if ($_POST['T1']=='T1A') $my="A";else if ($_POST['T1']=='T1B')$my="B";else if ($_POST['T1']=='T1C')$my="C";else if ($_POST['T1']=='T1D') $my="D";else $my="E";
	if ($my!=$answer1) {echo "<script> alert('第一题回答错误，正确答案为 $answer1 '); </script>";$score--;}
	
	if ($_POST['T2']=='T2A') $my="A";else if ($_POST['T2']=='T2B')$my="B";else if ($_POST['T2']=='T2C')$my="C";else if ($_POST['T2']=='T2D') $my="D";else $my="E";
	if ($my!=$answer2) {echo "<script> alert('第二题回答错误，正确答案为 $answer2 '); </script>";$score--;}

	if ($_POST['T3']=='T3A') $my="A";else if ($_POST['T3']=='T3B')$my="B";else if ($_POST['T3']=='T3C')$my="C";else if ($_POST['T3']=='T3D') $my="D";else $my="E";
	if ($my!=$answer3) {echo "<script> alert('第三题回答错误，正确答案为 $answer3 '); </script>";$score--;}
	
	if ($_POST['T4']=='T4A') $my="A";else if ($_POST['T4']=='T4B')$my="B";else if ($_POST['T4']=='T4C')$my="C";else if ($_POST['T4']=='T4D') $my="D";else $my="E";
	if ($my!=$answer4) {echo "<script> alert('第四题回答错误，正确答案为 $answer4 '); </script>";$score--;}
	
	if ($_POST['T5']=='T5A') $my="A";else if ($_POST['T5']=='T5B')$my="B";else if ($_POST['T5']=='T5C')$my="C";else if ($_POST['T5']=='T5D') $my="D";else $my="E";
	if ($my!=$answer5) {echo "<script> alert('第五题回答错误，正确答案为 $answer5 '); </script>";$score--;}
	
	if ($_POST['T6']=='T6A') $my="A";else if ($_POST['T6']=='T6B')$my="B";else if ($_POST['T6']=='T6C')$my="C";else if ($_POST['T6']=='T6D') $my="D";else $my="E";
	if ($my!=$answer6) {echo "<script> alert('第六题回答错误，正确答案为 $answer6 '); </script>";$score--;}
	
	if ($_POST['T7']=='T7A') $my="A";else if ($_POST['T7']=='T7B')$my="B";else if ($_POST['T7']=='T7C')$my="C";else if ($_POST['T7']=='T7D') $my="D";else $my="E";
	if ($my!=$answer7) {echo "<script> alert('第七题回答错误，正确答案为 $answer7 '); </script>";$score--;}
	
	if ($_POST['T8']=='T8A') $my="A";else if ($_POST['T8']=='T8B')$my="B";else if ($_POST['T8']=='T8C')$my="C";else if ($_POST['T8']=='T8D') $my="D";else $my="E";
	if ($my!=$answer8) {echo "<script> alert('第八题回答错误，正确答案为 $answer8 '); </script>";$score--;}
		
	if ($_POST['T9']=='T9A') $my="A";else if ($_POST['T9']=='T9B')$my="B";else if ($_POST['T9']=='T9C')$my="C";else if ($_POST['T9']=='T9D') $my="D";else $my="E";
	if ($my!=$answer9) {echo "<script> alert('第九题回答错误，正确答案为 $answer9 '); </script>";	$score--;}
	
	if ($_POST['T10']=='T10A') $my="A";else if ($_POST['T10']=='T10B')$my="B";else if ($_POST['T10']=='T10C')$my="C";else if ($_POST['T10']=='T10D') $my="D";else $my="E";
	if ($my!=$answer10) {echo "<script> alert('第十题回答错误，正确答案为 $answer10 '); </script>";$score--;}	
	
	$account=$_COOKIE["account"];
	$query = mysql_query("
	SELECT score FROM grade WHERE account = '$account' && chapter=8
	");
	$row = mysql_fetch_array($query);
	$hscore=$row['score'];
	if ($score>$hscore)
	{
		$hscore=$score;
		mysql_query("
		UPDATE grade SET score='$hscore' WHERE account='$account' and chapter='8'
		");
	}
	echo "<script> alert('总共10题，共答对 $score 题，你本章最高答对 $hscore 题'); </script>";
}
?>
</body>
</html>
