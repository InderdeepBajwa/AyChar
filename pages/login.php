<?php

    // navbar
    require('../partials/nav.php');

    // Session start
    if(isset($_SESSION['UserToken'])) {
        // TODO: Send user to somehwere
        header("Location: /jig/admin/");
    }

    
?>

<?php 
$employees = runSafeQuery('SELECT * FROM EMPLOYEES', []);
?>


<div id="SignIn">
    <h2>Login</h2>
    <hr>
    <form action="../boilerplate/form-validate/login.php" method="post">
        <!--username/email input -->
        <label for="uname"><b>Email:</b></label>
        <input required type="email" placeholder="Email" name="email">
        
        <!--Password input -->
        <label for="pw"><b>Password:</b></label>
        <input required type="password" placeholder="Password" name="password">
        
        <!--Signin button -->
        <input type="submit" value="Sign In" placeholder="SignIn">
        
        <!---->
        <input type="reset" name="Forgot" value="Forgot Your Password">
    </form>
</div>


