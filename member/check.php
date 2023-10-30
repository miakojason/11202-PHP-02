<?php
date_default_timezone_set("Asia/Taipei");
if($_POST['acc']=='admin' && $_POST['pw']=='1234' ){
   
    setcookie("login","mackliu",time()+60);
    header("location:member.php");
}else{
    setcookie("error","<h3>大仙，您的帳號或密碼，輸入錯誤，請重新輸入</h3>",time()+5);
    header("location:login.php");
}
?>