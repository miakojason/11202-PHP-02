<?php
if($_POST['acc']=='admin' && $_POST['pw']=='1234' ){
    header("location:member.php?login=1");
}else{
    header("location:login.php?m=<h3>非法登入，盜賊請退避，天靈靈地零零</h3>");
}
?>