
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>Admin Panel</title>

    <script src="signup-validator.js"></script>

</head>
<body>
    <!-- Checking if the user is logged in -->
    <?php
        if(session_id() == '') { // Start session if none found
            session_start();
        }

        if(!isset($_SESSION['UserToken'])) {
            // TODO: Send user to somehwere
            header("Location: /jig/pages/login.php");
        }
    ?>
    <div id="sidebar">
        <ul>
            <a href="/jig"><li>Hey  <?php echo $_SESSION["UserToken"]['first_name'] ?></li></a>
            <li>Employees
                <a href="/jig/admin/addEmployee.php"><li>Add Employee</li></a>
                <a href="/jig/admin/editEmployee.php"><li>Edit Employees</li></a>
            </li>
            <a href="./Management.php"><li>401K Calculator</li></a>
            <a href="./401k.php"><li>401K Management</li></a>
            <a href="./settings.php"><li>Settings</li></a>
        </ul>
    </div>


