<!DOCTYPE html>
<html>

<head>
<title>ah-kunst</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <?php
    if (version_compare(PHP_VERSION, '5.3.7', '<')) 
    {
        exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
    } 
    else if (version_compare(PHP_VERSION, '5.5.0', '<')) 
    {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
        require_once("Login_Script/libraries/password_compatibility_library.php");
    }
    ?>

</head>

<body>
    <div class="Content">
        <div class="Center">
          <h1>Website under contrution</h1><br>
          <p>Kontakt Allan Hansen:</p><br>
          <p>Allan Hansen
          <p>Frederiksbergvej 27, Pejrup</p>
          <p>5600 Faaborg</p>

          <p>Telefon: 58 26 50 53</p>

          <p>E-mail: ahkunst@pejrup.dk, allan.hansen.kunst@gmail.com eller pah3105@post12.tele.dk</p>
        </div>
        <div class="Login_topcorner">
            <a href="Login_Script/index.php">Admin Login</a>
        </div>
    </div>

<script src="javascript.js"></script>
</body>
</html>
