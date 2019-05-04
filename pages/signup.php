<?php
    require('../partials/nav.php');

    if(isset($_SESSION['UserToken'])) {
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
        
        <!-- Password confirmation -->
        <label for="pw-conf"><b>Password:</b></label>
        <input required type="password" placeholder="Password" name="pw-conf">
        

        <!--Signup button -->
        <input type="submit" name="Sign Up" value="Sign Up">
        
        <!--Signin button -->
        <input type="reset" value="Have an account? Sign In">
        
        <!--Reset password button -->
        <input type="reset" name="Forgot" value="Forgot Your Password">
    </form>
</div>

