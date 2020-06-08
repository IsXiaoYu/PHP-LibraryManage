<!-- 登录验证 -->
<?php
$userSno = $_POST["userSno"];
$pwd = $_POST["pwd"];
$level = $_POST["level"];

require 'conn.php';
// 设置编码，防止中文乱码
mysqli_query($conn, "set names utf8");
$sql = "select * from login_info where user_sno='$userSno' and user_level='$level' and user_pwd='$pwd'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $expire = time() + 60 * 60 * 24 * 7; //cookie 在一周之后过期
    setcookie("userSno", $userSno, $expire);
    $sql_name = "select user_name from user_info where sno='$userSno'";
    $retval = mysqli_query($conn, $sql_name);
    if (!$retval) {
        die('无法读取数据: ' . mysqli_error($conn));
    }
    $row = mysqli_fetch_array($retval);
    $userName = $row[0]; //获取用姓名
    setcookie("userName", $userName, $expire);
    echo "<script>alert('登录成功！');window.location.href='index.php';</script>";
} else {
    echo "<script>alert('账号或密码错误！');window.location.href='login.php'</script>";
}
mysqli_close($conn);
?>