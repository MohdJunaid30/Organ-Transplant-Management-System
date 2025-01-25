<?php
$hostname='localhost';
$username='root';
$password='';
$database='organ_transplant1';

$con=mysqli_connect($hostname,$username,$password,$database);

if(!$con){
    
    die(mysqli_error($con));
}
?>