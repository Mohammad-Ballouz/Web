<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["username"])){
    header("location:../signUp.php");
} 
?>
<html>
    <head>
        <title>Contact Information</title>
        <link rel="stylesheet" href="../pages/cp-style.css">
    </head>
    <body>

        <div class="row" id="header">
            <div style="position:absolute; right:0; font-size: 22px; font-family: 'Calibri', sans-serif; color: white; margin-right: 12px">Welcome <strong><?php echo $_SESSION["username"]; ?></strong> | 
            <a style="color: white" href="../BE/logout.php">Logout</a></div>
            <div id="dropdown-menu">
                <span><image src="../icons/burgermenu.png" class="ico" id="ico2">MENU</span>
                <div class="dropdown-content">
                    <ul>
                        <a href="main-page.php">
                            <li><image src="../icons/house2.png" class="ico" id="ico2">Main Page</li>
                        </a>
                        <a href="CV.php">
                            <li><image src="../icons/CV2.png" class="ico" id="ico2">Resume</li>
                        </a>
                        <a href="gallery.php">
                            <li><image src="../icons/Gallery2.png" class="ico" id="ico2">Gallery</li>
                        </a>
                        <a href="contact-info-page.php">
                            <li><image src="../icons/contact information2.png" class="ico" id="ico2">Contact Me</li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="upper-div"><h1>Contact Me</h1></div>

            <div class="side-div">
                <form>
                <input type="text" id="fname" name="firstname" placeholder="First Name *">
                <input type="text" id="lname" name="lastname" placeholder="Last Name *">
                <input type="text" id="email" name="email" placeholder="Email Address *">
                <input type="text" id="phone" name="phone" placeholder="Phone Number *">
                <input type="text" id="inquiryType" name="inquiryType" placeholder="Inquiry Type">
                <input type="text" id="message" name="message" placeholder="Message">
                </form>
                <div class = "submit-button">
                    <p>Submit Message</p>
                </div>
                <p class="confidentiality-statement">The information you provide will be used to contact you for the relevant purpose you choose. 
                We understand the importance of maintaining the privacy of your personal information. 
                </p>
            </div>

            <div class="lower-div">
               <p class="head" id="header1">General inquiries</p><br>
                <p class="text"><span><image src="../icons/email.png" class="ico"><a href="mohammad.ballouz@lau.edu"> mohammad.ballouz@lau.edu</a></span></p> <br>
                <p class="text"><span><image src="../icons/phone.png" class="ico"> +961 76 748 236</span></p> <br><br>

                <p class="head">Connect With Me</p> <br>
                <p class="text"><span><image src="../icons/instagram.png" class="ico"> moballouz</span> </p><br>
                <p class="text"><span><image src="../icons/facebook.png" class="ico"> Mohammad Ballouz </span></p><br>
                <p class="text"><span><image src="../icons/linkedin.png" class="ico"> <a href="https://www.linkedin.com/in/mohammadballouz">https://www.linkedin.com/in/mohammadballouz</a></span></p> <br>
                <p class="text"><span><image src="../icons/x.png" class="ico"> Mohammad Ballouz </span></p>
            </div>
        </div>
    </body>
</html>