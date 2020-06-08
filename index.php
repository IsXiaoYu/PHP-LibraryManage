<?php
require 'checkLogin.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf=8">
    <title>主页</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <div id="homepage" class="header">
        <nav class="navbar navbar-expand-sm navbar-light">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="index.php">图书管理系统</a>

            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" style="background-color: rgba(219, 219, 226, 1)">主页</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bookSearch.php">图书查询</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">个人中心</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="logout()">退出</a>
                </li>
            </ul>
        </nav>
    </div>
    <?php
    $userSno = $_COOKIE['userSno'];
    $userName =$_COOKIE["userName"]; //用户姓名
    $count = ""; //馆藏书籍数量
    $borrow_count; //借阅数量
    $overdue_count; //逾期数量
    $Lastlogintime = ""; //最后一次登录时间
    require 'conn.php';

    $sql_count = "select count(*) from book_info"; //查询馆藏书籍数量
    $retval = mysqli_query($conn, $sql_count);
    if (!$retval) {
        die('无法读取数据: ' . mysqli_error($conn));
    }
    $row = mysqli_fetch_array($retval);
    $count = $row[0]; //获取馆藏书籍数量  
    $sql_name = "select count(*) from book_info where borrower_sno='$userSno'";
    $retval = mysqli_query($conn, $sql_name);
    if (!$retval) {
        die('无法读取数据: ' . mysqli_error($conn));
    }
    $row = mysqli_fetch_array($retval);
    $borrow_count = $row[0]; //获取借阅数量

    $sql_name = "select count(*) from book_info where restore_date<=CURDATE()";
    $retval = mysqli_query($conn, $sql_name);
    if (!$retval) {
        die('无法读取数据: ' . mysqli_error($conn));
    }
    $row = mysqli_fetch_array($retval);
    $overdue_count = $row[0]; //获取逾期数量
    $sql_Lastlogintime = "select login_time from login_info where user_sno='$userSno'"; //获取上次登录时间
    $retval = mysqli_query($conn, $sql_Lastlogintime);
    if (!$retval) {
        die('无法读取数据: ' . mysqli_error($conn));
    }
    $row = mysqli_fetch_array($retval);
    $Lastlogintime = $row[0]; //上次登录时间
    mysqli_close($conn);
    ?>
    <div id="home-bg" class="main-content"><br>
        <div>
            <p><b><?php echo $userName ?></b> 同学 您好！</p><br><br><br>
            <p>本图书馆共有藏书<b> <?php echo $count; ?></b> 册</p>
            <p>您已借阅 <b><?php echo $borrow_count ?></b> 本书</p>
            <p>您已超期 <b><?php echo $overdue_count ?></b> 本书</p><br><br>
            <p>上次登录时间：<p><b><?php echo $Lastlogintime; ?></b></p>
                <p></p>
        </div>
    </div>
    <?php require 'footer.php'; ?>
</body>

</html>