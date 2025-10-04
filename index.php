<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR System</title>
    <link href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <section class="hero is-primary">
            <div class="hero-body">
                <h1 class="title">
                    HR Management System
                </h1>
                <h2 class="subtitle">
                    Manage your employees, salaries, departments, and leaves easily.
                </h2>
            </div>
        </section>

        <div class="columns is-centered">
            <div class="column is-half">
                <div class="box">
                    <h3 class="title is-4">Employee Management</h3>
                    <div class="buttons">
                        <a href="views/add_employee.php" class="button is-link">Add New Employee</a>
                        <a href="views/employee_list.php" class="button is-info">View Employees</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="columns is-centered">
            <div class="column is-half">
                <div class="box">
                    <h3 class="title is-4">Department Management</h3>
                    <div class="buttons">
                        <a href="views/add_department.php" class="button is-link">Add New Department</a>
                        <a href="views/department_list.php" class="button is-info">View Departments</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="columns is-centered">
            <div class="column is-half">
                <div class="box">
                    <h3 class="title is-4">Salary Management</h3>
                    <div class="buttons">
                        <a href="views/add_salary.php" class="button is-link">Add Salary</a>
                        <a href="views/salary_list.php" class="button is-info">View Salaries</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="columns is-centered">
            <div class="column is-half">
                <div class="box">
                    <h3 class="title is-4">Leave Management</h3>
                    <div class="buttons">
                        <a href="views/add_leave.php" class="button is-link">Add Leave</a>
                        <a href="views/leave_list.php" class="button is-info">View Leaves</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
</html>
