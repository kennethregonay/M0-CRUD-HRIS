<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLOYEE TABLE</title>
</head>
<body>
<?php require_once 'header.php'?>
<div class="table-c">
 <table class= table> 
<thead>
  <tr>
    <th>First Name</th>
    <th>Middle Name</th>
    <th>Last Name</th>
    <th>Address</th>
    <th>Gender</th>
    <th>BirthDate</th>
    <th>Position_Code</th>
    <th colspan = "2"></th>
  </tr>
</thead>
<tbody>  
 <tr>
 <?php
			if ($result_set->num_rows > 0) {
				//output data of each row
				while ($row = $result_set->fetch_assoc()) {
		?>
      <td><?php echo $row ['Firstname']; ?></td>
      <td><?php echo $row ['Middlename']; ?></td>
      <td><?php echo $row ['Lastname']; ?></td>
      <td><?php echo $row ['Address']; ?></td>
      <td><?php echo $row ['Gender']; ?></td>
      <td><?php echo $row ['Birthdate']; ?></td>
      <td><?php echo $row ['Position_Code']; ?></td>
      <td>
          <a href="index.php?edit=<?php echo$row['EmployeeID']; ?>" class="btn-u">Edit </a>
          <a href="employee.php?delete=<?php echo$row['EmployeeID']; ?>" class="btn-d">Delete</a>
      </td>
    </tr>
    <?php }
      }
    ?>
    </tbody>
</table>
</div>
<?php require_once 'footer.php' ?>
</body>
</html>