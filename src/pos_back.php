<?php 
  $pname = "";
  $code = "";
  $up_status = false;
  $id = "";
    $connect = new mysqli('localhost','root', '' , 'hris') 
    or die(mysqli_error($connection));

    if (isset($_GET['delete'])){
         $id = $_GET['delete'];
          $connect->query("DELETE FROM position WHERE Position_Code = '$id'")
        or die ($connect->error);
        header('location: position.php ');
        echo"Record is Successfully Deleted!";
    }
    if(isset($_POST['add'])){
        $pname = $_POST ['pname'];
        $code = $_POST ['code'];
        $sql = "INSERT INTO position (Position_Name,Department_Code) 
        VALUES ('$pname', '$code')";
          $connect->query($sql);
       header('location: position.php ');
       echo"Record is Successfully Saved!";
    }
    
    if(isset($_POST['update-p'])){
        $pname = $_POST ['pname'];
        $code = $_POST ['code'];
        $id = $_GET ['update'];
        $sql = "UPDATE position SET Position_Name = '$pname', Department_Code = '$code' WHERE Position_Code = $id";
          $connect->query($sql);
       header('location: position.php ');
       echo"Record is Successfully Updated!";
    } 
?>
 