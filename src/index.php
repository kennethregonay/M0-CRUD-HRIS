<?php
  require_once 'backend.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PROJECT</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/4752a58f75.js" crossorigin="anonymous"></script>
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
        <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" required name="fname">
       </div>  
        <div class="inputfield">
          <label>Middle Name</label>
          <input type="text" class="input" name="mname">
       </div>  
       <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" required name="lname">
       </div>  
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" required name="address"></textarea>
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
       <div class="create">
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