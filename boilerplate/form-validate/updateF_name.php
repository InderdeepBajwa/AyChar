<?php

    require('../../dbase/dbfunctions.php');

    if(session_id() == '') { // Start session if none found
        session_start();
    }
    
    if(isset($_SESSION['UserToken'])) {
        // TODO: Send user to somehwere
        header("Location: /jig/admin/");
        exit();
    }

?>
<?php




    runSafeQuery(
    "UPDATE employees SET first_name = ?",
    [
        "s",
        $_POST['first_name']
    ]);


?>


