<html>
    <head>
        
<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
Welcome, <?php echo $_SESSION['user_name']; ?>
<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
<a href="login_page.php?logout" class="Topcorner">Logout</a>
</body>
</html>