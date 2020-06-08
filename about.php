<?php
require 'checkLogin.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf=8">
    <title>我的信息</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/main.js"></script>
</head>

<body>
    <header id="homepage">
        <nav class="navbar navbar-expand-sm navbar-light">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="index.php">图书管理系统</a>

            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">主页</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bookSearch.php">图书查询</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php" style="background-color: rgba(219, 219, 226, 1)">个人中心</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="logout()">退出</a>
                </li>
            </ul>
        </nav>
    </header>
    <?php
    $userSno = $_COOKIE["userSno"];
    require 'conn.php';
    $sql = "select *from user_info where sno='$userSno'";
    $retval = mysqli_query($conn, $sql);
    if (!$retval) {
        die('无法读取数据: ' . mysqli_error($conn));
    }
    $row = mysqli_fetch_array($retval);
    ?>
    <div id="about" class="container main-content">
        <div class="userInfo">
            <h2>用户信息</h2>
            <h6>用户学号：<?php echo $row["sno"]; ?></h6>
            <h6>用户姓名：<?php echo $row["user_name"]; ?></h6>
            <h6>所属班级：<?php echo $row["user_class"]; ?></h6><br>
            <a href="changePwdForm.php" style="text-decoration: none"><button class="btn btn-primary">修改密码</button></a>
        </div>
        <div class="borrow_info main-content">
            <h2>我的借阅信息</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>图书号</th>
                        <th>图书名</th>
                        <th>还书截止时间</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <?php
                $sql1 = "select book_id,book_name,restore_date,book_id from book_info where borrower_sno='$userSno'";
                $result = mysqli_query($conn, $sql1);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row["book_id"]; ?></td>
                                <td><?php echo $row["book_name"]; ?></a></td>
                                <td><?php echo $row["restore_date"]; ?></td>
                                <td><a href="returnBook.php?id=<?php echo $row["book_id"]; ?>">归还</a></td>
                            </tr>
                        </tbody>
                    <?php
                    }
                } else { ?>
                    <tbody>
                        <td colspan="4"><?php echo "你还没有借阅过书籍哦"; ?></td>
                    </tbody>
                <?php
                }
                mysqli_close($conn);
                ?>
            </table>
        </div>
    </div>
    <?php require 'footer.php';?>
</body>

</html>