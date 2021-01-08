<?php 
    $connect = new mysqli('localhost','root', '' , 'hris') 
    or die(mysqli_error($connection));

    if (isset($_GET['delete'])){
         $id = $_GET['delete'];
          $connect->query("DELETE FROM position WHERE Position_Code = '$id'")
        or die ($connect->error);
    }
    if(isset($_POST['add'])){
        $pname = $_POST ['pname'];
        $code = $_POST ['code'];
        $sql = "INSERT INTO position (Position_Name,Department_Code) 
        VALUES ('$pname', '$code')";
          $connect->query($sql);
       echo".Saved","Record is Successfully Saved!";
    } 

  