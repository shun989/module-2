<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style type="text/css">
    .login {
        height:180px; width:300px;
        margin:0;
        padding:10px;
        border:3px blue solid;
    }
    .login input {
        padding:5px; margin:5px
    }
</style>
<body>
<form action="" method="post">
    <div class="login">
    <h2>Login</h2>
    <input type="text" name="user_name" size="30px" placeholder="user_name">
    <input type="password" name="password" size="30px" placeholder="password">
    <input type="submit" value="Sing in">
    </div>
</form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $user_name = $_POST["user_name"];
        $password = $_POST["password"];

    if ($user_name === "admin" && $password === "admin"){
        echo "<h2>Welcome <span style='color: red'>" .$user_name. "</span> to website!</h2>";
    }else{
        echo "<h2><span style='color: red'>Login Error</span><h2>";
    }
}
?>
</body>
</html>
