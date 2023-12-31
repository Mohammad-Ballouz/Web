<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["username"])){
    header("location:../index.php");
} 
?>
<html>
    <head>
        <title>Main Page</title>
        <link rel="stylesheet" href="../CSS/mp-style.css">
    </head>
    <body>
        <div class="container">
            <div style="position:absolute; right:0; z-index:8; color: white; font-size: 22px; font-family: 'Calibri', sans-serif; margin-right: 12px">Welcome <strong><?php echo $_SESSION["username"]; ?></strong> | 
            <a href="../BE/logout.php">Logout</a></div>
        <div class="left-div">
            <p class="p-left"><image src="../icons/house2.png" class="ico" id="ico2"><span class="text-pointer"><a href="main-page.php">Main Page</a></span></p>
            <p class="p-left"> <image src="../icons/CV2.png" class="ico" id="ico2"><span class="text-pointer"> <a href="CV.php">Resume</a></span></p>
            <p class="p-left"><image src="../icons/Gallery2.png" class="ico" id="ico2"><span class="text-pointer"> <a href="gallery.php">Gallery</a></span></p>
            <p class="p-left"><image src="../icons/person2.png" class="ico" id="ico2"><span class="text-pointer">Portfolio</span></p>
            <p class="p-left"><image src="../icons/volunteer2.png" class="ico" id="ico2"><span class="text-pointer">Extracurricular Activities</span> </p>
            <p class="p-left"><image src="../icons/contact information2.png" class="ico" id="ico2"><span class="text-pointer"> <a href="contact-info-page.php">Contact Information</a></span></p>
        </div>

        <div class="circular-div">About Me</div>

        <div class="button-div">
            <div class="circular-button" id="first-button"><image src="../icons/instagram.png" class="ico"></div>
            <div class="circular-button"><image src="../icons/facebook.png" class="ico" id="ico4"></div>
            <div class="circular-button"><image src="../icons/x.png" class="ico"></div>
            <div class="circular-button"><image src="../icons/email.png" class="ico" id="ico3"></div>
            <div class="circular-button"><image src="../icons/linkedin.png" class="ico"></div>

        </div>

        <div class="right-div">
            <image src="../icons/Mohammad Ballouz.jpeg" class="image-div">

            <div class="overlay">
                <p class="overlay-header">Mohammad <br> Ballouz</p>
                <p class="overlay-text">Software Developer</p>
            </div>
            
        </div>
        </div>
    </body>
</html>