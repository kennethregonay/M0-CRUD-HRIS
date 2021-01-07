<?php 
      $connection = new mysqli('localhost','root', '' , 'hris') 
    or die(mysqli_error($connection));
    if (isset($_POST['create'])){
        $fname = $_POST ['fname'];
        $mname = $_POST ['mname']; 
        $lname = $_POST ['lname']; 
        $address = $_POST ['address']; 
        if($_POST ['gender']== 'male'){
            $gender = 'M'; 
        }else{
            $gender = 'F'; 
        }
        
        $bdate = $_POST ['bdate']; 
        $poscode = $_POST ['poscode'];  
        $connection->query("INSERT INTO employee(Firstname,Middlename,Lastname,Address,Gender,Birthdate,Position_Code) 
        VALUES ('$fname','$mname','$lname','$address','$gender','$bdate','$poscode')")
        or die ($connection->error);
        prompt(".success","Record is Successfully Saved!");

    }

    function prompt($class,$msg){
        $element = "<h5 class='$class'>$msg</h5>";
        echo $element;
    }
?>