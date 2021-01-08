<?php
  require_once 'backend.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PROJECT</title>
</head>
<body>
    <?php include ('header.php');
    ?>
<!--Content Part-->
<div class="content">
<!--Form-->
<div class="wrapper">
  <fieldset>
    <div class="title">
      Employee Information
    </div>
    <div class="form">
      <form  method="POST">
        <input type="hidden" name= "id" value = "">
        <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" required name="fname" value = "">
       </div>  
        <div class="inputfield">
          <label>Middle Name</label>
          <input type="text" class="input" name="mname" value = "">
       </div>  
       <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" required name="lname" value = "">
       </div>  
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" required name="address" value = ""></textarea>
       </div> 
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select required name="gender">
              <option value="">SELECT</option>
              <option value="male">MALE</option>
              <option value="female">FEMALE</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>BirthDate</label>
          <input type="date" class="input" required name="bdate" id="mydate"
          value="2021-12-27">
       </div> 
      <div class="inputfield">
          <label>Position Code</label>
          <input type="number" class="input" required name="poscode">
       </div> 
       <div class="btn">
       <div class="inputfield">
        <input type="submit" value="CREATE" name = 'create' class="btn-c">
        </div>
      </div>
    </div>
    </div>
  </form>
    </fieldset>
</div>
</div>
<?php include ('footer.php')?>
</body>
</html>