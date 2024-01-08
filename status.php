<?php
include ('conn.php');

$id=$_GET['id'];
$status=$_GET['status'];
$q="update test set status='$status' where id='$id'";

//mysqli_query($con,$q);
//header("location:fetch.php");

$dam=mysqli_query($con,$q);
if($dam){
    header("location:fetch.php");

}



?>