<?php
require 'checkLogin.php';
require 'conn.php';
// 设置编码，防止中文乱码
mysqli_query($conn, "set names utf8");
//设置时区
date_default_timezone_set('prc');
$date = date('y-m-d h:i:s', time());
$userSno=$_SESSION['userSno'];
$sql_time = "update login_info set login_time='$date' where user_sno='$userSno'"; //更新登录时间
//更新登录时间
$retval = mysqli_query($conn, $sql_time);
if (!$retval) {
    die('无法更新数据: ' . mysqli_error($conn));
}
//销毁session
if(isset($_COOKIE['userSno'])){
    setcookie("userSno", "", time()-3600);
    echo "<script>window.location.href='login.php';</script>";
}
