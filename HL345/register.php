<?php
include('conn.php');
$reguser = $_POST['reguser'];
$regpwd = $_POST['regpwd'];
$regfn = $_POST['regfn'];
$regln = $_POST['regln'];
$regemail = $_POST['regemail'];
$regage = $_POST['regage'];
$regsex = $_POST['regsex'];
$regsql = "insert into members (username,password,firstname,lastname,email,age,sex_id) values ('$reguser',MD5('$regpwd'),'$regfn','$regln','$regemail','$regage',(select sex_id from sex where sex='$regsex'))";
$user_query = mysql_query($regsql,$conn) or die('mysql query error');
echo $reguser,"注册成功","<br>";
echo '返回登录页面<a href="index.html">login</a>';
mysql_close($conn);
?>