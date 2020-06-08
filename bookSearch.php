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
                    <a class="nav-link" href="bookSearch.php" style="background-color: rgba(219, 219, 226, 1)">图书查询</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">个人中心</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="logout()">退出</a>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container main-content" style="width: 100%;margin-top:50px">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>书号</th>
                    <th>书名</th>
                    <th>作者</th>
                    <th>状态</th>
                </tr>
            </thead>
            <?php

            $userSno = $_COOKIE["userSno"];
            $url = $_SERVER["REQUEST_URI"]; //获取当前页面的url
            $url = parse_url($url); //解析url,返回url的各个组成部分
            $url = $url["path"];
            $pageSize = 5; //每页显示数
            require 'conn.php';
            $sql = "select book_id,book_name,author,book_state from book_info";
            $result = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($result);
            $pageNum = ceil($num / $pageSize); //总页面数
            //判断页面是否是提交状态
            if (isset($_GET["page"]) || $_GET["page"] > 1) {
                $pageVal = $_GET["page"];
            } else {
                $pageVal = 1;
            }
            //计算起始位置
            $page = ($pageVal - 1) * $pageSize;
            $sql1 = "select book_id,book_name,author,book_state from book_info limit $page,$pageSize";
            $result = mysqli_query($conn, $sql1);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) { ?>

                    <tbody>
                        <tr>
                            <td><?php echo $row["book_id"]; ?></td>
                            <td style="color: #049ff9"><a href="detail.php?id=<?php echo $row["book_id"]; ?>"><?php echo $row["book_name"]; ?></a></td>
                            <td><?php echo $row["author"]; ?></td>
                            <td><?php echo $row["book_state"]; ?></td>
                        </tr>
                    </tbody>
            <?php
                }
            }
            ?>
        </table>
        <div>
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="?page=<?PHP if($pageVal>1) echo $pageVal-1;else echo $pageVal; ?>">上一页</a></li>
                <li class="page-item"><a class="page-link" href="?page=<?PHP echo $pageVal; ?>"><?PHP echo $pageVal; ?></a></li>
                <li class="page-item"><a class="page-link" href="?page=<?PHP if($pageVal<$pageNum) echo $pageVal+1; ?>">下一页</a></li>
            </ul>
        </div>
    </div>
    <?php
    mysqli_close($conn);
    ?>

    <?php require 'footer.php'; ?>
</body>
</html>