<!-- 修改密码 -->
<?php
require 'checkLogin.php';
$sno = $_COOKIE["userSno"];
$oldPwd = $_POST["oldPwd"];
$newPwd = $_POST["newPwd"];
require 'conn.php';
$sql = "select * from login_info where user_sno='$sno' and user_pwd='$oldPwd'"; //验证旧密
$sql1 = "update login_info set user_pwd='$newPwd' where user_sno='$sno'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    mysqli_query($conn, $sql1); //更新密码
    echo "<script>alert('密码修改成功');</script>";
    //销毁session
    if (isset($_COOKIE['userSno'])) {
        setcookie("userSno", "", time() - 3600);
        echo "<script>window.location.href='login.php';</script>";
    }
}
?>