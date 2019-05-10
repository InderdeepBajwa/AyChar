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

<h2>Your personalized 401K Management system:</h2>

    <table class="employee-table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Salary</th>
            <th>401K</th>
            <th>Net Pay</th>
            <th>Edit</th>
        </tr>
        <?php foreach($employees as $employee) { ?>
            <tr>
                <th><?php echo $employee['first_name'] ?></th>
                <th><?php echo $employee['last_name'] ?></th>
                <th><?php echo $employee['email'] ?></th>


                <?php $employee_info = runSafeQuery("SELECT * FROM employee_info WHERE employee_id = ?", ["s", $employee['employee_id']]); $employee_info = reset($employee_info); ?>
                <form action="/jig/boilerplate/form-validate/edit401k.php" method="post">
                <th><?php echo $employee_info['salary'] ?></th>
                <th><input type="text" name="401k" value="<?php $_SESSION['401k'] = $employee_info['401k']; echo $_SESSION['401k']; ?>" placeholder="401K"></th>
                <th><?php $salary = $employee_info['salary'] - $employee_info['401k']; echo $salary > 0 ? '+' .$salary : '-'.$salary ?></th>
                <th><input type="submit" name="text" value="Edit 401K"></th>
                <input type="hidden" name="employee_id" value="<?php echo $employee['employee_id'] ?>">
                </form>
            </tr>
        <?php } ?>
    </table>
</div>