
<?php
    require('../../admin/sidebar.php');
    require('../../dbase/dbfunctions.php');

    if(session_id() == '') { // Start session if none found
        session_start();
    }
    
    if(!isset($_SESSION['UserToken'])) {
        // TODO: Send user to somehwere
        header("Location: /jig/");
        exit();
    }

    
    runSafeQuery(
    "INSERT INTO employees (first_name, last_name, email, is_manager, password) VALUES (?,?,?,?,?)",
    [
        "sssss",
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        "0",
        md5($_POST['password']),
    ]);


?>

<div style="text-align:center; padding: 3em;">
    <h1>Successfully signed <?php echo $_POST['first_name'] ?> up!</h1>
    <h2>Redirecting you in 2 seconds...<?php header('refresh:2; url=../../admin/') ?></h2>    
</div>



