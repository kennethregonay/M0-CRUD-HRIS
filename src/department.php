<?php 
    include 'dept_back.php';
    $sql = "SELECT * FROM department";
    $res = $connect->query($sql);
?>
<?php 
    if(isset($_GET['update'])){
      $id =$_GET['update'];
      $stats = true;
      $rst = $connect->query("SELECT * FROM department WHERE Department_Code =$id")
      or die ($connect->error);

      if($rst->num_rows>0){
            while($row = $rst->fetch_assoc()){
                $id= $row['Department_Code'];
                $name = $row ['Department_Name'];
            }
            }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEPARTMENT TABLE</title>
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

    <div class="inputfield">
    <label>DEPARTMENT CODE</label>
    <input type="text" required class= "input"name="id" disabled value="<?php echo $id ?>">
    </div> 
    <div class="inputfield">
    <label>DEPARTMENT NAME</label>
    <input type="text" required class= "input"name="dname" value=" <?php echo $name ?>">
    </div> 
    <?php 
    if ($stats == true):
    ?>
        <div class="inputfield">
        <input type="submit" class= "btn-c" name="update-p" value="UPDATE">
    </div>
    <?php else: ?>
     <div class="inputfield">
    <input type="submit" class= "btn-c" name="add" value="CREATE">
    </div>
    <?php endif ?>
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
    <th colspan = "3">Action</th>
  </tr>
</thead>
<tbody>  
 <tr>
 <?php if ($res->num_rows > 0) {
				//output data of each row
				while ($row = $res->fetch_assoc()) {
		?>
      <td><?php echo $row ['Department_Code']; ?></td>
      <td><?php echo $row ['Department_Name']; ?></td>
      <td>
          <a href="department.php?update=<?php echo$row['Department_Code']; ?>" class="btn-u">Update </a>
          <a href="department.php?delete=<?php echo$row['Department_Code']; ?>" class="btn-d">Delete</a>
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