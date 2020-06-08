<!-- 修改密码 表单-->
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
  </header>
  <div class="container main-content">
    <h2>密码修改</h2>
    <form action="changePwd.php" onsubmit="return changePwd()" method="post">
      <div class="form-group">
        <label for="oldPwd">旧密码：</label><span id="oldPwdErr" style="color: tomato"></span>
        <input type="text" class="form-control" id="oldPwd" name="oldPwd" placeholder="Enter Old Password">
      </div>
      <div class="form-group">
        <label for="newPwd">新密码：</label><span id="newPwdErr" style="color: tomato"></span>
        <input type="password" class="form-control" id="newPwd" name="newPwd" placeholder="Enter New Password">
      </div>
      <div class="form-group">
        <label for="cPwd">确认密码：</label><span id="cPwdErr" style="color: tomato"></span>
        <input type="password" class="form-control" id="cPwd" name="cPwd" placeholder="Enter Confirm password">
      </div>
      <button type="submit" class="btn btn-primary">确定</button>
    </form>
  </div>
  <?php require 'footer.php'; ?>
</body>

</html>