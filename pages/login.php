<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="../CSS/signUp.css">
    </head>
    <body>
        <div class="container">
            LOGIN<br>
            
            <form action="../BE/login.php" method="POST" name="login-form">
            <div class="inp2">
                <label for="un-email">Username </label><br>
                <input type="text" id="un-email" name="user-email" class="custom-input2" required>
                <br>
                <label for="pass">Password</label><br>
                <input type="password" id="pass-login" name="password" class="custom-input2" required>
                <div class="forgot-pass"><a href=""><br>Forgot Password</a></div>
                <input type="submit" class="login-button" name="Login" value="Log In">
            </div>
            </form>
        </div>
        <div id="login" class="login"><a href="../index.php">Sign Up</a></div>

