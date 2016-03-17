<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>
<div class="loginForm">
    <!-- login form box -->
    <form method="post" action="login_page.php" name="loginform">

        <label for="login_input_username">Username</label>
        <input id="login_input_username" class="login_input" type="text" name="user_name" required />
        <br>
        <label for="login_input_password">Password</label>
        <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />
        <br>
        <div class="align_button_left"
        <input type="submit"  name="login" value="Log in" />

    </form>
</div>
<div class="Topcorner">
    <a href="../index.php">homepage</a>
</div>
    
<!-- <a href="register.php">registrer</a> -->