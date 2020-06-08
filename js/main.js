//登录提示
function auth(){  
    document.getElementById("userSnoErr").innerHTML="";
    document.getElementById("pwdErr").innerHTML="";
    var userName= document.getElementById("userSno").value; 
    var pwd= document.getElementById("pwd").value;           
    if(userName==null||userName==""){
        document.getElementById("userSnoErr").innerHTML="学号不为空";  
        return false;           
    }else{
        if(pwd==null||pwd==""){
        document.getElementById("pwdErr").innerHTML="密码不为空";
        return false
    }
    }           
}
//退出登录
function logout(){
    var r=confirm("是否退出登录！");
    if(r==true){
        window.location.href='logout.php';
    }
}
//修改密码
function changePwd(){
    document.getElementById("oldPwdErr").innerHTML="";
    document.getElementById("newPwdErr").innerHTML="";
    document.getElementById("cPwdErr").innerHTML="";
    var oldPwd=document.getElementById("oldPwd").value;
    var newPwd=document.getElementById("newPwd").value;
    var cPwd=document.getElementById("cPwd").value;
    if(oldPwd==""){
        document.getElementById("oldPwdErr").innerHTML="旧密码不为空";
        return false; 
    }else{
        if(newPwd==""){
            document.getElementById("newPwdErr").innerHTML="新密码不为空";
            return false;
        }else{
            if(newPwd!=cPwd){
                document.getElementById("cPwdErr").innerHTML="两次密码输入不一致";
                return false;
            }
        }
    }
}