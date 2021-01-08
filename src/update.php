<?php 
    include 'backend.php';
?>


<?php 
    if (isset($_GET['update'])){
        $id =$_GET['update'];
        $result = $connection->query("SELECT * FROM employee WHERE EmployeeID =$id")
        or die ($connection->error);

        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $fname = $row ['Firstname'];
                $mname = $row ['Middlename'];
                $lname = $row ['Lastname'];
                $address = $row ['Address'];
                $gender = $row ['Gender'];
                if ($gender == 'M'){
                    $gdr = "Male";
                }else{
                    $gdr = "Female";
                }
                $bdate = $row ['Birthdate'];
                $poscode = $row ['Position_Code'];
                $id = $row['EmployeeID'];
            }
        }
        
    }else{
            header('Location:view.php');
        }
   
        if (isset($_POST['update'])){
            $fname = $_POST ['fname'];
            $mname = $_POST ['mname']; 
            $lname = $_POST ['lname']; 
            $address = $_POST ['address']; 
            if($_POST ['gender']== 'male'){
                $gdr = 'M'; 
            }else{
                $gdr = 'F'; 
            }
            
            $bdate = $_POST ['bdate'];  
            $poscode = $_POST ['poscode'];  
             
             $sql ="UPDATE employee 
             SET Firstname = '$fname',Middlename= '$mname',Lastname= '$lname',Address='$address',
             Gender = '$gdr',Birthdate='$bdate',Position_Code='$poscode' WHERE EmployeeID = '$id'";
             $connection->query($sql)
            or die ($connection->error);
            prompt(".success","Record is Successfully Updated!");  
            header('location:employee.php'); 
        }
     ?>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <?php require_once 'header.php' ?>
 <div class="content">
<!--Form-->
<div class="wrapper">
  <fieldset>
    <div class="title">
      Employee Information
    </div>
    <div class="form">
      <form  method="POST">
        <input type="hidden" name= "id" value = "<?php echo $id; ?>">
        <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" required name="fname" value = "<?php echo $fname; ?>">
       </div>  
        <div class="inputfield">
          <label>Middle Name</label>
          <input type="text" class="input" name="mname" value = "<?php echo $mname; ?>">
       </div>  
       <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" required name="lname" value = "<?php echo $lname; ?>">
       </div>  
      <div class="inputfield">
          <label>Address</label>
          <input  type = "text" class="textarea" required name="address" value = "<?php echo $address; ?>"></input>
       </div> 
        <div class="inputfield">
          <label>Gender</label>
            <input type="text" class="input" required name="gender" value="<?php echo $gdr?>">
          </div>
        <div class="inputfield">
          <label>BirthDate</label>
          <input type="date" class="input" required name="bdate" id="mydate"
          value="<?php echo $bdate; ?>">
       </div> 
      <div class="inputfield">
          <label>Position Code</label>
          <input type="number" class="input" required name="poscode" value="<?php echo $poscode; ?>">
       </div> 
       <div class="btn">
       <div class="inputfield">
        <input type="submit" value="UPDATE" name = 'update' class="btn-c">
        </div>
      </div>
    </div>
    </div>
  </form>
    </fieldset>
</div>
<?php require_once 'footer.php' ?>
</body>
</html>
