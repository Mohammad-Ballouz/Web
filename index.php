<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="CSS/signUp.css">
    </head>
    <body>
        <div class="container">

            <form action="BE/signup.php" method="POST" id="signup-form" >
            <div class="cont" id="container">
                <div style="margin-top: 20px;">Sign Up</div> 
                <div class="next-cont">
                    <div class="inp1">
                        <label for="fn">Full Name</label>
                        <br><input type="text" name="fullname" id="fn" class="custom-input" required>
                    </div>
                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="email" class="custom-input" required>
                </div>

                    <div class="vl"></div>

                    <div class="next-cont2">
                        <div class="headers">Gender</div>
                        <input type="radio" name="sex" checked id="male" value="m">
                        <label for="male">Male</label>
                        <input type="radio" name="sex" id="female" value="f">
                        <label for="female">Female</label>
                        <input type="radio" name="sex" id="other" value="o">
                        <label for="other">Other</label><br>
                        <label for="d">Date of birth</label><br>
                        <input type="date" id="DOB" name="d" style="background-color: beige;" ><br>
                        <input type="checkbox" id="check" name="priv" required>
                        <label>I agree to the <a href="">Privacy Policy</a></label>
                    </div>

                    <div class="signUp-div">
                        <input type="button" class="signUp" name="Signup" value="Sign Up" onclick="validateForm()">
                        <input type="button" class="clear" name="clear" value="Clear" onclick="ClearForm()">                      
                    </div> 
                    

            <span id="visible" class="back-button">Back</span>
            </div>

            <div id="Div" class="info">
                <div class="input-container">
                    <span class="header-text">Create Account</span><br>
                    <div class="inp1">
                        <label for="un">Username</label><br>
                        <input type="text" name="username" id="un" class="custom-input" required>
                    </div>
                    <div class="inp1">
                        
                        <label for="pass">Password</label><br>
                        <input type="password" name="passw" id="pass" class="custom-input" required>
                    </div>
                    <div class="inp1">
                        <label for="pas" style="margin-left: 170px;">Confirm Password</label><br>
                        <input type="password" name="confirm_passw" id="pas" class="custom-input" style="margin-left: 165px;" required><br>
                    </div>
                        
                    <span id="button" class="continue-button">continue ></span>
                </div>
            </div>
        </div>
        <div id="login" class="login"><a href="pages/login.php">LOGIN</a></div>

        </form>

        <script src="JS/signup.js"></script>
    </body>
</html>
