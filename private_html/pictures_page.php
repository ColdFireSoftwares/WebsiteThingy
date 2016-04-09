<!DOCTYPE html>
<html>
<head>
<title>pictures</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <div class="Content">
      <h1 class="Center">Website under contrution</h1>
    </div>
        <?php
            include("thumbnailscript.php");
            echo '<div class="pictures">';
            // <img src="../medie/images/background.JPG" width="200" height="200">
            // look at this link :DD :http://salman-w.blogspot.dk/2008/10/resize-images-using-phpgd-library.html
            $dir          = '../medie/images/raw';
            $targetdir    =  '../medie/images/thumbnails';
            $file_display = array(
                'JPG',
                'jpg',
                'jpeg',
                'png',
                'gif'
            );

            if (file_exists($dir) == false) 
            {
                echo 'Directory \'', $dir, '\' not found!';
            } 
            else
            {
                $pictureID = 0;
                foreach (scandir($dir) as $file) 
                {
                    $pictureID ++;
                    $filepath = $targetdir + $pictureID;
                    generate_image_thumbnail($file, $filepath);
                }
                foreach (scandir($targetdir) as $file)
                {
                    echo '<div class="picture_' .$pictureID. '">';
                    echo '<img src="', $dir, '/', $file, '"/>';
                    echo '</div>';
                }
             }
            echo '</div>';
        ?>

<script src="javascript.js"></script>
</body>
</html>
