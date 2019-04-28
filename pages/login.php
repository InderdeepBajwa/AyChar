<?php

    // navbar
    require('../partials/nav.php');

    // Session start
    if(isset($_SESSION['UserToken'])) {
        // TODO: Send user to somehwere
        header("Location: /jig");
    }

    
?>

<?php 
$stid = oci_parse($conn, 'SELECT * FROM employees');
oci_execute($stid);

echo "<table border='1'>\n";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

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


