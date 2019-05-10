<?php

    require('../../dbase/dbfunctions.php');

    if(session_id() == '') { // Start session if none found
        session_start();
    }
    
    if(!isset($_SESSION['UserToken'])) {
        // TODO: Send user to somehwere
        header("Location: /jig/");
        exit();
    }

?>
<?php

    runSafeQuery(
    "UPDATE employees SET first_name = ? WHERE employee_id=?",
    [
        "ss",
        $_POST['first_name'],
        $_SESSION['UserToken']['employee_id']
    ]);


    $user = runSafeQuery(
        "SELECT * from employees WHERE employee_id=?;",
        [
            "s",
            $_SESSION['UserToken']['employee_id']
        ]
    );

    $user = reset($user);

    $_SESSION['UserToken'] = $user;

    header('Location: /jig/admin');


?>

