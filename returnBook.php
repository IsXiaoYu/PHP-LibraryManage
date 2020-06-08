<!-- 还书操作 -->
<?php 
require 'conn.php';
$bookid=$_GET["id"];//获取要归还书籍的编号
$sql="update book_info set book_state='在馆',borrower_sno=NULL,borrower=NULL,restore_date=NULL where book_id='$bookid'";
$retval=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($retval);
if($row["borrower"]==null){
    echo "<script>alert('归还成功！');window.location.href='about.php';</script>";  
}
?>