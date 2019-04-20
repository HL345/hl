<?php
include('conn.php');
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "select * from members where username = '$username' and password = MD5('$password')";
$user_query = mysql_query($sql,$conn) or die('mysql query error');
$rows=mysql_num_rows($user_query);
//print_r(mysql_fetch_row($user_query));
if($_GET['action'] == "logout"){
    session_start();
    unset($_SESSION['username']);
    //session_unset('username');
    //session_destroy('username');    echo '注销登录成功！';
    echo $_SESSION['username'],$username;
    exit;
}
if ($rows == 1){
    session_start();
    $_SESSION['username'] = $username;
    echo $username,' 欢迎你！进入 <a href="my.php">用户中心</a><br />';
    echo '点击此处 <a href="login.php?action=logout">注销</a> 登>录！<br />';
    exit;
} else {
    echo '用户名密码错误，点击此处 <a href="index.html">login</a> 登录！<br />';
}
?>