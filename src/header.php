<?php
    require_once ('backend.php');
  $query = "SELECT * FROM employee";

$result_set = $connection->query($query);

?>
<!DOCTYPE html>
<!-- navigation bar-->
     <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/4752a58f75.js" crossorigin="anonymous"></script>
<nav>
    <div class="logo">
        <a href="index.php"><h4><i class="fas fa-fingerprint"></i>HRIS</h4></a>
    </div>
    <ul class="nav-links">
          <li>
            <a href="employee.php" class="href"><i class="fas fa-address-card"></i>EMPLOYEE</a>
        </li>
         <li>
            <a href="Position.php" class="href"><i class="far fa-id-badge"></i>POSITION</a>
       </li>
          <li>
            <a href="#" class="href"><i class="far fa-building"></i>DEPARTMENT</a>
        </li>
    </ul>
    <div class="mobile-view">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
</nav>
</html>