<!-- PhP连接 MySQL mysqli-面向对象  -->
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "your password";
$dbname="library_info";
// 创建连接
$conn = mysqli_connect($servername, $username, $password,$dbname);
mysqli_query($conn, "set names utf8"); // 设置编码，防止中文乱码
//检测连接
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
} 
?>