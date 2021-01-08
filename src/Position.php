<?php 
    include 'pos_back.php';
    $sql = "SELECT * FROM position";
    $res = $connect->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSITION TABLE</title>
</head>
<body>
    <?php require_once 'header.php'?>

<div class="wrapper-1">
<fieldset>
<div class="title">
    Department Information
</div>
<div class="form">
<form method="POST">
    <input type="hidden" name="id">
    <div class="inputfield">
    <label>POSITION NAME</label>
    <input type="text" required class= "input"name="pname">
    </div> 
    <div class="inputfield">
    <label>DEPARTMENT CODE</label>
    <input type="text" required class= "input"name="code">
    </div> 
   <div class="inputfield">
    <input type="submit" class= "btn-c" name="add">
    </div> 
</div>
</form>
</div>
</body>
</fieldset>


<div class="table-p">
 <table class= table-p2> 
<thead>
  <tr>
    <th>POSITION NAME</th>
    <th>DEPARTMENT CODE</th>
    <th colspan = "2">Action</th>
  </tr>
</thead>
<tbody>  
 <tr>
 <?php if ($res->num_rows > 0) {
				//output data of each row
				while ($row = $res->fetch_assoc()) {
		?>
      <td><?php echo $row ['Position_Name']; ?></td>
      <td><?php echo $row ['Department_Code']; ?></td>
      <td>
          <a href="update.php?update=<?php echo$row['Position_Code']; ?>" class="btn-u">Update </a>
          <a href="position.php?delete=<?php echo$row['Position_Code']; ?>" class="btn-d">Delete</a>
      </td>
    </tr>
    <?php }
      }
    ?>
    </tbody>
</table>
</div>
</div>
 <?php require_once 'footer.php'?>
</body>
</html>