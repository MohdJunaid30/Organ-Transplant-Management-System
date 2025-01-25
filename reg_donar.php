<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  include 'connect.php';
 
  $donor_name=$_POST['name'];
  $blood_type=$_POST['blood_type'];
  $organ=$_POST['organ']; 

  $sql="INSERT INTO donors (donor_name,blood_type,organ)values('$donor_name','$blood_type', '$organ')";
  $result=mysqli_query($con,$sql);
  if($result){
    echo "Data inserted suscessfully";
  }else{
    die(mysqli_error($con));
  }
}




?>




<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Donar Registration</title>
    
  </head>
  <body>
    <h1>Donar Registration Form</h1>
  <form action="reg_donar.php" method="post">
  
  <div class="container mt-5">
    <label for="name" class="form-label">Name :</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="container mt-5">
  <label for="blood_type" class="form-label">Blood Group:</label>
  <select name="blood_type" required>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
  </div>
  <div class="container mt-5">
    <label for="organ" class="form-label">Organ</label>
    <select name="organ" required>
                        <option value="Kidney">Kidney</option>
                        <option value="Liver">Liver</option>
                        <option value="Heart">Heart</option>
                        <option value="Lung">Lung</option>
                    </select>
  </div>
  <div class="container mt-5">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
  </body>
</html>

