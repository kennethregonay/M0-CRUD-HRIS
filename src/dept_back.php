<?php 
    $name = "";
    $id = "";
  $stats = false;

    $connect = new mysqli('localhost','root', '' , 'hris') 
    or die(mysqli_error($connect));

    if (isset($_GET['delete'])){
         $id = $_GET['delete'];
          $connect->query("DELETE FROM department WHERE Department_Code = '$id'")
        or die ($connect->error);
        header('location: department.php ');
        echo"Record is Successfully Deleted!";
    }
    if(isset($_POST['add'])){
        $name = $_POST ['dname'];
        $connect->query("INSERT INTO `department`(`Department_Name`) VALUES ('$name')");
       header('location: department.php ');
       echo"Record is Successfully Saved!";
    }
    
    if(isset($_POST['update-p'])){
        $name = $_POST ['dname'];
        $id = $_GET ['update'];
        $sql = "UPDATE department SET Department_Name = '$name' WHERE Department_Code = $id";
          $connect->query($sql);
       header('location: department.php ');
       echo"Record is Successfully Updated!";
    } 
?>
 