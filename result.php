
<?php
$hostname='localhost';
$username='root';
$password='';
$database='organ_transplant1';

$con=mysqli_connect($hostname,$username,$password,$database);

if(!$con){
    die(mysqli_error($con));
}


$query = "SELECT tp.transplant_id, tp.surgeon_id, ts.surgeon_name, tp.duration, tp.outcome 
          FROM transplant_procedures tp
          JOIN transplant_surgeons ts ON tp.surgeon_id = ts.surgeon_id";
$result = mysqli_query($con, $query);

if (!$result) {
    die("Error: " . mysqli_error($con));
}

echo "<style>
table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}
table, th, td {
  border: 1px solid black;
  padding: 15px;
  text-align: left;
}
</style>";

echo "<table>
<tr>
<th>Transplant ID</th>
<th>Surgeon ID</th>
<th>Surgeon Name</th>
<th>Duration</th>
<th>Outcome</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['transplant_id'] . "</td>";
echo "<td>" . $row['surgeon_id'] . "</td>";
echo "<td>" . $row['surgeon_name'] . "</td>";
echo "<td>" . $row['duration'] . "</td>";
echo "<td>" . $row['outcome'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>




