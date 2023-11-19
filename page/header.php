<?php
session_start();
if(!isset($_SESSION["username"])){
    header("location:../signUp.php");
}
?>
<!-- <link rel="stylesheet" href="../css/icons.css"> -->
            <!-- <div id="dropdown-menu">
                <span><image src="../icons/menu2.png" class="ico" id="ico2">MENU</span>
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
            </div> -->

            <div class="welcome-div" style="position:absolute;
    right:0; 
    font-size: 22px;     
    font-family: 'Calibri', sans-serif;"></div>Welcome <strong><?php echo $_SESSION["username"]; ?></strong> | <a href="../BE/logout.php">Logout</a>
            </div>
