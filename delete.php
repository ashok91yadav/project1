<?php
include('conn.php');
$delete_id=$_GET['id'];
$q="delete from test where id='$delete_id'";
if(mysqli_query($con, $q)){
    header("location:fetch.php");

}
else
{
echo "try again";
}
?>