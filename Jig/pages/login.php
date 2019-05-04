<?php

    // navbar
    require('../partials/nav.php');

    // Session start
    if(isset($_SESSION['UserToken'])) {
        // TODO: Send user to somehwere
        header("Location: /jig");
    }
?>

<div id="SignIn">
    <h2>Login</h2>
    <hr>
    <form action="" method="post">
        <!--username/email input -->
        <label for="uname"><b>Email:</b></label>
        <input required type="email" placeholder="Email" name="uname">
        
        <!--Password input -->
        <label for="pw"><b>Password:</b></label>
        <input required type="password" placeholder="Password" name="pw">
        
        <!--Signin button -->
        <input type="submit" value="Sign In" placeholder="SignIn">

        <!--Reset password button -->
        <input type="reset" name="Sign Up" value="Sign Up">
        
        <!---->
        <input type="reset" name="Forgot" value="Forgot Your Password">
    </form>
</div>


