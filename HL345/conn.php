<?php $mysrv="www_hl345_xyz";//数据库服务器名称
$myuser="www_hl345_xyz"; // 连接数据库用户名
$mypwd="247261";// 连接数据库密码
$mydb='www_hl345_xyz'; 
$conn = mysql_connect($mysrv,$myuser,$mypwd) or die("数据库链接错 误".mysql_error()); 
mysql_select_db($mydb,$conn) or die("数据库访问错误".mysql_error()); ?>