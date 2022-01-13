<?php
include_once "Employee.php";
include_once "EmployeeManager.php";
$employee1 = new Employee("le", "tuan", 26, "hy", "nv");
$employee2 = new Employee("le", "tun", 29, "hy", "nv");
$employeeManager = new EmployeeManager();
$employeeManager->addEmployee($employee1);
$employeeManager->addEmployee($employee2);
$employees = $employeeManager->getEmployees();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <table border="1px" style="border-collapse: collapse; width: 800px">
        <thead>
        <tr>
            <th>STT</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Address</th>
            <th>Job Position</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($employees as $key => $employee): ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $employee->getFirstName; ?></td>
                <td><?php echo $employee->getLastName; ?></td>
                <td><?php echo $employee->getDateOfBirth; ?></td>
                <td><?php echo $employee->getAddress; ?></td>
                <td><?php echo $employee->getJobPosition; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</form>
</body>
</html>
