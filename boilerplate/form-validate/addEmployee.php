
<?php
    require('../../admin/sidebar.php');
    require('../../dbase/dbfunctions.php');

    if(session_id() == '') { // Start session if none found
        session_start();
    }
    
    if(isset($_SESSION['UserToken'])) {
        // TODO: Send user to somehwere
        header("Location: /jig/");
        exit();
    }

    
    runSafeQuery(
    "INSERT INTO employees (first_name, last_name, is_manager, password, email) VALUES (?????)",
    [
        "ssiss",
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['is_manager'],
        $_POST['password'],
        $_POST['email']
    ]);


?>

