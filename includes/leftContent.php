<?php if(isset($_SESSION['user_id']))
{
  echo"<div class='lcontent'>
        <ul class='bmenu'>
            <li><a href='employee.php'>Home</a></li>
            <li><a href='addEmployee.php'>Add Employee</a></li>
            <li><a href='deleteEmployee.php'>Delete Employee</a></li>
            <li><a href='updateEmployee.php'>Update Employee</a></li>

        </ul>
    </div>";
}
?>
