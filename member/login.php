<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <style>
       
       header{
text-align: center;
       }
        body{
            background-color: lightseagreen;
        }
        h1 {
            text-align: center;
        }
        .login-block {
            width: 400px;
            height: 200px;
            margin: auto;
            box-shadow: 2px 2px 5px 2px black;
            border: 1px solid black;
            text-align: center;
            border-radius: 20px;
            font-size: 30px;
        }
        h1{
            text-align: center;
        }
        h3{
            text-align: center;
        }
        .login-input {
            margin: 10px;
        }
        .login-input input[type='text']{
            border:1px solid blue;
        }
        .login-input input{
            font-size:20px;
            padding:5px;
        }
        .btn{
            text-align: center;
            margin-top:15px;
        }
        .btn input[type='reset'],
        .btn input[type='submit']{
            padding:5px 10px;
            border:1px solid green;
            border-radius: 5px;
            margin:5px;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
include_once "header.php";
?>
    <h1>輸入帳號密碼</h1>
    <?php
 session_start();
// if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
    include_once "header.php";
// }
?>
<div class='login-block'>
    <?php
   
    if(isset($_SESSION['error'])){
        echo "<span style='color:red'>".$_SESSION['error']."</span>";
        unset($_SESSION['error']);
    }
    
    if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
        echo $_SESSION['login']." 歡迎你";
        echo "<a href='logout.php'>登出</a>";
    }else{
?>
    <div class="login-block">
   
        <form action="check.php" method="post">
        <div class='login-input'>
            <label for="acc">帳號:</label>
            <input type="text" name="acc" id="acc">
        </div>
        <div class='login-input'>
            <label for="pw">密碼:</label>
            <input type="password" name="pw" id="pw">
        </div>
        <div class='btn'>
            <input type="submit" value="登入">
            <input type="reset" value="重置">
        </div>
        </form>
    </div>
    <?php
    }

    ?>
    
</body>

</html>