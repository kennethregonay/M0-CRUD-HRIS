<?php 
    include 'pos_back.php';
    $sql = "SELECT * FROM position";
    $res = $connect->query($sql);
?>
<?php 
    if(isset($_GET['update'])){
      $id =$_GET['update'];
      $up_status = true;
      $rst = $connect->query("SELECT * FROM position WHERE Position_Code =$id")
      or die ($connect->error);

      if($rst->num_rows>0){
            while($row = $rst->fetch_assoc()){
                $pname= $row['Position_Name'];
                $code = $row ['Department_Code'];
            }
            }
    }

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
    Position Information
</div>
<div class="form">
<form method="POST">
    <div class="inputfield">
    <label>POSITION CODE</label>
    <input type="text" disabled class= "input"name="id" value="<?php echo $id ?>">
    </div> 
    <div class="inputfield">
    <label>POSITION NAME</label>
    <input type="text" required class= "input"name="pname" value="<?php echo $pname ?>">
    </div> 
    <div class="inputfield">
    <label>DEPARTMENT CODE</label>
    <input type="text" required class= "input"name="code" value=" <?php echo $code ?>">
    </div> 
    <?php 
    if ($up_status == true):
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
     <th>ID</th>
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
      <td><?php echo $row ['Position_Code']; ?></td>
      <td><?php echo $row ['Position_Name']; ?></td>
      <td><?php echo $row ['Department_Code']; ?></td>
      <td>
          <a href="position.php?update=<?php echo$row['Position_Code']; ?>" class="btn-u">Update </a>
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