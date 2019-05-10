
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

    <h2>Add a new employee:</h2>
    <form action="/jig/boilerplate/form-validate/addEmployee.php" method="post">
        <input type="text" name="first_name" placeholder="First Name">
        <input type="text" name="last_name" placeholder="Last Name">
        <input type="text" name="password" placeholder="Password" onkeyup="check()" id="password">
        <input type="text" name="confirm_password" onkeyup="check()" placeholder="Confirm Password" id="confirm_password">
        <input type="text" name="salary" placeholder="Salary">
        <input type="checkbox" name="is_manager" id="is_manager">
        <input type="submit" value="Add Employee">
    </form>

    <h2>All employees:</h2>

    <table class="employee-table">
        <?php foreach($employees as $employee) { ?>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
                <tr>
                    <th><?php echo $employee['first_name'] ?></th>
                    <th><?php echo $employee['last_name'] ?></th>
                </tr>

        <?php } ?>
    </table>
</div>

