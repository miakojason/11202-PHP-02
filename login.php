<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
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
</head>

<body>
    <h1>輸入帳號密碼</h1>
    <?php
    if(isset($_GET['m'])){
        echo "<span style='color:red'>".$_GET['m']."</span>";
    }
    if(isset($_GET['login']) && $_GET['login']==1){
        echo "<h3>歡迎你</h3> ";
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