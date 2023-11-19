<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["username"])){
    header("location:../signUp.php");
} 
?>
<html>
    <head>
        <title>Gallery</title>
        <link rel="stylesheet" href="gallery-style.css">
        <!-- <style>
        body{
            background-color: beige;
            }

            h1{
                color:#555555 ;
            }

            .my-img{
                width: 300px;
                cursor: pointer;
                border: 3px solid #000; 
                transition: transform 0.3s ease; 
                height: 100%;
            }

            .img-label {
                cursor: pointer;
            }

            .img-checkbox {
                display: none;
            }

            .img-popup {
                position: fixed;
                top: 0;
                left: 0;
                background-color: rgba(0, 0, 0, 0.8);
                display: none;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 100%;
                z-index: 1;
            }

            .popup-img {
                max-width: 90%;
                max-height: 90%;
                object-fit: contain;
                cursor: pointer;
            }

            .close-popup {
                position: absolute;
                top: 20px;
                right: 20px;
                font-size: 30px;
                color: white;
                cursor: pointer;
            }

            .img-checkbox:checked + .img-popup {
                display: flex;
            }

            .div-of-img{
                display: inline-block;
                margin: 47px;
                height: 100%; 
            }

            .my-img:hover{ 
                transform: scale(1.2);
            }

            .img-frame{
                padding: 12px;
                display: inline-block;
                height: 270px;
            }

            .row{
                display: block;
                width: 100%;
            }

            #header{
                background: beige;
                height: 40px;
                position: fixed;
                top: 0;
            }

            #dropdown-menu{
                cursor: pointer;
                display: inline-block;
                height: 40px;
                line-height: 40px;
                width: 90px;
                vertical-align: middle;
                color: black;
                background: beige;
                font-family: 'Courier New', Courier, monospace;
                font-weight: bold;
                font-size: x-large;
                text-align: center;
            }

            .dropdown-content{
                cursor: pointer;
                display: none;
                background: beige;
                position: relative;
                min-width: 160px;
                z-index: 1;
                left: 0;
                font-weight: normal;
                font-size: medium;
            }

            #dropdown-menu li{
                font-family: 'Courier New', Courier, monospace;
                text-align: center;
                list-style-type: none;
            }

            #dropdown-menu ul{
                margin: 0;
                padding: 0;
            }

            #dropdown-menu:hover .dropdown-content{
                display: block;
            }

            #dropdown-menu li:hover{
                background: #26416a;
            }

            .ico{
                width: 16px;
                height: 16px;
                display: inline-block;
                background-size: cover;
                margin: 5px;
                vertical-align: middle;
            }

            .ico-l{
                width: 24px;
                height: 24px;
            }

        </style> -->
    </head>

    <body>
        <div class="row" id="header">
            <div style="position:absolute; right:0; font-size: 22px; font-family: 'Calibri', sans-serif; margin-right: 12px">Welcome <strong><?php echo $_SESSION["username"]; ?></strong> | 
            <a href="../BE/logout.php">Logout</a></div>
            <div id="dropdown-menu">
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
            </div>
        </div>
        <h1 style="text-align: center;
                        padding-top: 25px; font-family: 'Calibri', sans-serif;">Gallery</h1>

         <?php
            $galleryFolderPath = '../pages/gallery';
            $files = scandir($galleryFolderPath);

            $imageFiles = array_filter($files, function ($file) {
                $allowedExtensions = ['png', 'jpg', 'jpeg', 'gif', 'bmp'];
                $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
                return in_array(strtolower($fileExtension), $allowedExtensions);
            });

            $imageNames = ['images' => $imageFiles];
            $jsonData = json_encode($imageNames, JSON_PRETTY_PRINT);
            $jsonFilePath = '../BE/gallery-images.json';
            file_put_contents($jsonFilePath, $jsonData);
        ?>

        <?php
            $jsonFilePath ='../BE/gallery-images.json';
            $jsonData = file_get_contents($jsonFilePath);

            $images = json_decode($jsonData, true);

            if (isset($images['images']) && is_array($images['images'])) {
                foreach ($images['images'] as $key => $imageName) {
                    ?>
                    <div class="img-frame">

                    <div class="div-of-img">
                        
                        <label for="img<?php echo $key; ?>" class="img-label">
                            <img src="gallery/<?php echo $imageName; ?>" class="my-img">
                        </label>
                        <input type="checkbox" id="img<?php echo $key; ?>" class="img-checkbox">
                        <div class="img-popup">
                            <label for="img<?php echo $key; ?>" class="close-popup">&times;</label>
                            <img src="gallery/<?php echo $imageName; ?>" class="popup-img">
                        </div>
                    </div>
                    </div>
                    <?php
                }
            } else {
                echo "No images found in the gallery.";
            }
            ?>
            
    </body>
</html>