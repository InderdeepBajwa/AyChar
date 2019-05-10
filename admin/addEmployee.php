
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
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password" onkeyup="check()" id="password">
        <input type="password" name="confirm_password" onkeyup="check()" placeholder="Confirm Password" id="confirm_password">
        <input type="text" name="salary" placeholder="Salary">
        <input type="password" name="ssn" placeholder="SSN #">
        <label for="is_manager" id="fuckingManager">Are you a manager?</label>
        <input type="checkbox" name="is_manager" onclick="fuckingManager()" id="is_manager">
        <input type="submit" value="Add Employee">
        <p id="message"></p>
    </form>

    <h2>All employees:</h2>

    <table class="employee-table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Salary</th>
            <th>SSN</th>
        </tr>
        <?php foreach($employees as $employee) { ?>
                <tr>
                    <th><?php echo $employee['first_name'] ?></th>
                    <th><?php echo $employee['last_name'] ?></th>
                    <th><?php echo $employee['email'] ?></th>


                    <?php $employee_info = runSafeQuery("SELECT * FROM employee_info WHERE employee_id = ?", ["s", $employee['employee_id']]); $employee_info = reset($employee_info); ?>
                    
                    <th><?php echo $employee_info['salary'] ?></th>
                    <th>***-***-<?php echo substr($employee_info['ssn'], -4) ?></th>
                </tr>

        <?php } ?>
    </table>
</div>

