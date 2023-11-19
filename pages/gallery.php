<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION["username"])){
    header("location:../index.php");
} 
?>
<html>
    <head>
        <title>Gallery</title>
        <link rel="stylesheet" href="../CSS/gallery-style.css">
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
            $galleryFolderPath = '../gallery';
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
                            <img src="../gallery/<?php echo $imageName; ?>" class="my-img">
                        </label>
                        <input type="checkbox" id="img<?php echo $key; ?>" class="img-checkbox">
                        <div class="img-popup">
                            <label for="img<?php echo $key; ?>" class="close-popup">&times;</label>
                            <img src="../gallery/<?php echo $imageName; ?>" class="popup-img">
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