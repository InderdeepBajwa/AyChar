<?php

    require('../../dbase/dbfunctions.php');

    if(session_id() == '') { // Start session if none found
        session_start();
    }

    if (!$_SESSION) {
        $hashedPassword = md5($_POST['password']);

        $user = runSafeQuery(
            "SELECT * from employees WHERE email=?;",
            [
                "s",
                $_POST['email']
            ]
        );

        $user = reset($user);

        if ($user['password'] == $hashedPassword) {
            $_SESSION['UserToken'] = $user;
        } else {
            echo "Login failed!";
            header('Location: ../../pages/login.php');
        }
    }

?>

<h1 style="text-align:center; padding: 3em;">Welcome <?php echo $_SESSION['UserToken']['first_name'] ?>!</h1>
<h2>Redirecting you in 2 seconds...<?php header('refresh:2; url=../../admin/home.php') ?></h2>


