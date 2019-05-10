<?php require __DIR__.'./sidebar.php' ?>
<?php require __DIR__.'../../dbase/dbfunctions.php' ?>

<?php

    if (!isset($_SESSION['UserToken'])) {
        header('Location: ../index.php');
    }


    $employees = runSafeQuery("SELECT * FROM employees", []);

    reset($employees);

?>

<div id="main">

    <h2>All employees:</h2>

    <table class="employee-table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
        <?php foreach($employees as $employee) { ?>
                <tr>
                    <th><?php echo $employee['first_name'] ?></th>
                    <th><?php echo $employee['last_name'] ?></th>
                </tr>

        <?php } ?>
    </table>
</div>