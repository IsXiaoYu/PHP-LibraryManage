<!-- 图书详情 借阅操作 -->
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
    <div id="homepage">
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
    </div>
    <?php
    require 'conn.php';
    $bookid=$_GET["id"];
    $sql="select *from book_info where book_id='$bookid'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
    }
    ?>
    <div id="detail">
        <h2>图书详情</h2>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">图书名：</span>
            </div>
            <input type="text" class="form-control" readonly="readonly" value="<?php echo $row["book_name"]; ?>">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">作者：</span>
            </div>
            <input type="text" class="form-control" readonly="readonly" value="<?php echo $row["author"]; ?>">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">出版社：</span>
            </div>
            <input type="text" class="form-control" readonly="readonly" value="<?php echo $row["publisher"]; ?>">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">出版时间：</span>
            </div>
            <input type="text" class="form-control" readonly="readonly" value="<?php echo $row["publication_date"]; ?>">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">价格：</span>
            </div>
            <input type="text" class="form-control" readonly="readonly" value="<?php echo $row["price"]; ?>">
            <div class="input-group-prepend">
                <span class="input-group-text">元</span>
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">ISBN：</span>
            </div>
            <input type="text" class="form-control" readonly="readonly" value="<?php echo $row["isbn"]; ?>">
        </div>
        <b>作品简介：</b><br>
        <textarea><?php echo $row["synopsis"]; ?></textarea>
        <div class="input-group mb-3" style="width: 220px;margin:7px auto;">
            <div class="input-group-prepend">
                <span class="input-group-text">借阅人：</span>
            </div>
            <input type="text" class="form-control" readonly="readonly" value="<?php echo $row["borrower"]; ?>">
        </div>
        <div class="input-group mb-3" style="width: 220px;margin:0 auto;">
            <div class="input-group-prepend">
                <span class="input-group-text">归还时间：</span>
            </div>
            <input type="text" class="form-control" readonly="readonly" value="<?php echo $row["restore_date"]; ?>">
        </div>
        <a href="borrow.php?id=<?php echo $row["book_id"] ?>" style="text-decoration: none"><button>借出</button></a>
    </div>
</body>

</html>