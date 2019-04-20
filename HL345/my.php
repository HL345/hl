<?php
session_start();
//检测是否登录，若没登录则转向登录界面  
if(!isset($_SESSION['username'])){
    echo '您还没有登录，请登录','<br>','<a href="index.html">login</a> 登录<br />';
    exit();
}
$username = $_SESSION['username'];
include('conn.php');
$regsql = "select * from members join sex on username='$username' and members.sex_id=sex.sex_id";
$user_query = mysql_query($regsql,$conn) or die('mysql query error');
while($row = mysql_fetch_array($user_query)){
  echo '用户名：',$row[username],'<br />';
  echo '名：',$row[firstname],'<br />';
  echo '姓：',$row[lastname],'<br />';
  echo '年龄：',$row[age],'<br />';
  echo 'Email：',$row[email],'<br />';
  echo '性别：',$row[sex],'<br />';
}
echo '<a href="login.php?action=logout">注销</a> 登录<br />';
?>