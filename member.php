<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
</head>
<body>
   <?php
   if($_GET['login']==1){
       echo"<h3>主人登入成功</h3>";
       echo "<a href='login.php?login=1'>回登入頁</a>";
    }else{
       header("location:login.php");
   //  echo"<h3>非法登入，盜賊請退避，天靈靈地零零</h3>";
}
   
   
   ?>
</body>
</html>