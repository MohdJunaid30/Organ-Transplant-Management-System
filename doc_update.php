<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
   
    $transplant_id=$_POST['transplant_id'];
    $surgeon_id=$_POST['surgeon_id'];
    $duration=$_POST['duration'];
    $outcome=$_POST['outcome'];
  
    $sql="INSERT INTO transplant_procedures (transplant_id,surgeon_id,duration,outcome)values('$transplant_id','$surgeon_id','$duration','$outcome')";
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
  
      <title>Procedure</title>
    </head>
    <body>
      <h1>Transplant Procedure Form</h1>
    <form action="trans1.php" method="post">
    
    <div class="container mt-5">
      <label for="name" class="form-label">Transplant ID :</label>
      <input type="text" class="form-control" name="transplant_id">
    </div>

    <div class="container mt-5">
      <label for="name" class="form-label">Surgeon ID :</label>
      <input type="number" class="form-control" name="surgeon_id">
    </div>

    <div class="container mt-5">
      <label for="name" class="form-label">Duration in Minutes :</label>
      <input type="number" class="form-control" name="duration">
    </div>


    <div class="container mt-5">
    <label for="blood_type" class="form-label">Outcome:</label>
    <select name="outcome" required>
                          <option value="success">Success</option>
                          <option value="failed">Failed</option>
                          
                      </select>
    </div>
    
    <div class="container mt-5">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </form>
    </body>
  </html>