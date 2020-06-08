<?php
if ($_COOKIE['userSno'] == null) {
    echo "<script>alert('请先登录！');window.location.href='login.php';</script>";
}
?>