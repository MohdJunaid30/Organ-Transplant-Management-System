<?php
$hostname='localhost';
$username='root';
$password='';
$database='organ_transplant1';

$con=mysqli_connect($hostname,$username,$password,$database);

if(!$con){
    die(mysqli_error($con));
}

$sql ="SELECT d.donor_name,d.donor_id,p.patient_name,p.patient_id
       FROM donors d,patients p
       WHERE d.organ=p.organ AND d.blood_type=p.blood_type AND p.status='Waiting'";
$result=mysqli_query($con,$sql);

echo "
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, th, td {
  border: 1px solid black;
  padding: 5px;
}
th {text-align: left;}
</style>";

if (mysqli_num_rows($result) > 0) {
  echo "<h1> The matches are :</h1>
  <table>
  <tr>
  <th>Donor ID</th>
  <th>Donor Name</th>
  <th>Patient ID</th>
  <th>Patient Name</th>
  </tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['donor_id'] . "</td>";
    echo "<td>" . $row['donor_name'] . "</td>";
    echo "<td>" . $row['patient_id'] . "</td>";
    echo "<td>" . $row['patient_name'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
  
  echo '<style>
  .button {
    display: inline-block;
    padding: 10px 20px;
    font-size: 20px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    outline: none;
    color: #fff;
    background-color: #4CAF50;
    border: none;
    border-radius: 15px;
  
  }
  
  .button:hover {background-color: #3e8e41}
  
  .button:active {
    background-color: #3e8e41;
    box-shadow: 0 5px #666;
    transform: translateY(4px);
  }
  </style>';
  
  
  

} else {
  echo "No matches Found ";
}

mysqli_close($con);
?>


