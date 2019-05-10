
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
        "UPDATE employee_info SET 401k = ? WHERE employee_id=?",
    [
        "ss",
        $_POST['401k'],
        $_POST['employee_id']
    ]);


?>

<div style="text-align:center; padding: 3em;">
    <h1>Successfully updated 401K for <?php echo $_POST['401k'] ?>!</h1>
    <h2>Redirecting you in 1 second...<?php header('Location: /jig/admin/401k.php') ?></h2>    
</div>



