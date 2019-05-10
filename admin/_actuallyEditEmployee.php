<?php require __DIR__.'./sidebar.php' ?>
<?php require __DIR__.'../../dbase/dbfunctions.php' ?>

<?php

    if (!isset($_SESSION['UserToken'])) {
        header('Location: ../index.php');
    }

    if (!isset($_GET['id'])) {
        header("Location: ../../");
    }

    $employees = runSafeQuery("SELECT * FROM employees WHERE employee_id = ?",
    [
        "i",
        $_GET["id"]
    ]);

    $employee_info = runSafeQuery("SELECT * FROM employee_info WHERE employee_id = ?",
    [
        "i",
        $_GET["id"]
    ]);

    $employees = reset($employees);
    $employee_info = reset($employee_info);

?>

<div id="main">
    <h2>Editing session:</h2>
    <form action="/jig/boilerplate/form-validate/updateEmployee.php" method="post">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" value="<?php echo $employees['first_name'] ?>" placeholder="First Name">
        
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" value="<?php echo $employees['last_name'] ?>" placeholder="Last Name">
        
        <label for="email">Email:</label>
        <input type="text" name="email" value="<?php echo $employees['email'] ?>" placeholder="Email">
        
        <label for="salary">Salary:</label>
        <input type="text" name="salary" value="<?php echo $employee_info['salary'] ?>" placeholder="Salary">
        
        <label for="ssn">SSN:</label>
        <input type="password" name="ssn" value="<?php echo $employee_info['ssn'] ?>" placeholder="SSN #">
        <input type="hidden" name="employee_id" value="<?php echo $_GET['id']; ?>">
        
        <input type="submit" value="Update Employee">
        
        <p id="message"></p>
    </form>
</div>