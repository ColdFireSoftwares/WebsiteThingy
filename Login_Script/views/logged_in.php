<html>
<head>
        
<!-- if you need user information, just put them into the $_SESSION variable and output them here -->

</head>

<body>
<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
<div class="topcorner">
    <a href="../private_html/pictures_page.php">Pictures</a>
    <a href="login_page.php?logout">Logout</a>
</div>

<br>
<div class="center">
    Welcome, <?php echo $_SESSION['user_name']; ?>
</div>


</body>
</html>