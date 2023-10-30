<?php 
include_once "session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
    <style>
      body{
         background-color: lightblue;
      }
      *{
         text-align: center;
      }
      header{
text-align: center;
       }
  
    </style>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
include_once "header.php";
?>
    <?php
    include_once "header.php";
   //  date_default_timezone_set("Asia/Taipei");
   //  session_start();
    if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
   // if(isset($_COOKIE['login']) && !empty($_COOKIE['login'])){
       echo"<h3>主人登入成功</h3>";
       echo "<a href='login.php'>回登入頁</a>";
       echo "<br>";
       echo "<a href='logout.php'>登出</a>";
    }else{
      $_SESSION['error']="<h3>「非法登入」，「小子你哪庄的」，「年輕人不講武德」，「耗子尾汁」，「你朝巴白吊打」</h3>";
      // setcookie("error","<h3>「非法登入」，「小子你哪庄的」，「年輕人不講武德」，「耗子尾汁」，「你朝巴白吊打」</h3>",time()+5);
       header("location:login.php");
   //  echo"<h3>非法登入，盜賊請退避，天靈靈地靈靈</h3>";
}

   ?>
</body>

</html>