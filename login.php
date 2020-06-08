<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>图书管理-登录界面</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/main.js"></script>
</head>

<body id="login">
    <div class="container">
        <h1 style="text-align:center;">图书管理系统</h1>
        <h2 style="margin-top: 50px">用户登录</h2>
        <form action="loginAuth.php" onsubmit="return auth()" method="post" style="margin-top: 30px">
            <div class="form-group">
                <label for="userSno">账号:&emsp;</label><span id="userSnoErr" style="color: tomato"></span>
                <input type="text" class="form-control" id="userSno" name="userSno" placeholder="Enter Sno">
            </div>
            <div class="radio">
                <label class="radio-inline">
                    <input type="radio" name="level" value="普通用户" checked="true"> 普通用户
                    <input type="radio" name="level" value="管理员"> 管理员 <span></span>
                </label>
            </div>
            <div class="form-group">
                <label for="pwd">密码:&emsp;</label></label><span id="pwdErr" style="color: tomato"></span>
                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
            </div><br><br>
            <button type="submit" class="btn btn-primary">登录</button>
            <button type="reset" class="btn btn-primary">重置</button>
        </form>
    </div>
</body>

</html>