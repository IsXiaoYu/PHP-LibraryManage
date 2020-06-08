<?php
$userName = $_COOKIE["userName"]; //借书人
$usersno=$_COOKIE["userSno"];//借阅人学号
$bookid = $_GET["id"];
//设置时区
date_default_timezone_set('prc');
$date = date('Y-m-d', strtotime('+30day')); //还书截止日期
require 'conn.php';
$sql = "UPDATE  book_info set borrower='$userName',restore_date='$date',book_state='不在馆',borrower_sno='$usersno' where book_id='$bookid'";
$sql1 = "select borrower from book_info where book_id='$bookid'";
$retval = mysqli_query($conn, $sql1);
if (!$retval) {
    die('无法读取数据: ' . mysqli_error($conn));
}
$row = mysqli_fetch_array($retval);
if ($row["borrower"] == null) {
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('借阅成功！');window.location.href='detail.php?id=$bookid';</script>";  

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}else{
    echo "<script>alert('图书已被借阅！请等待图书归还');window.location.href='detail.php?id=$bookid';</script>";
}
