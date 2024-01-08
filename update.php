<?php



include('conn.php');
$delete_id=$_GET['id'];
$q="select * from test where id='$delete_id'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_assoc($result);




include('conn.php');

if(isset($_POST['update'])){
    $name=$_POST['name'];
   
    $dob=$_POST['dob']; 
    $salary=$_POST['salary'];
    $joining_date=$_POST['joining_date'];
   
    $reciving_date=$_POST['reciving_date']; 
    $contact=$_POST['contact'];
    


  
   
 
   
    //$q="UPDATE `test` SET `name`='$name',`dob`='$dob',`salary`='$salary',`joining_date`='$joining_date'',`reciving_date`='$reciving_date',`contact`='$contact' WHERE 1";

    $q="update test set name='$name',dob='$dob',salary='$salary',joining_date='$joining_date',reciving_date='$reciving_date',contact='$contact' where id='$delete_id'";
    $result= mysqli_query($con, $q);
    if($result){
        
        header("location:fetch.php");
    }
    else{
        $sucess= "try after";
    }



}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    
        <?php
       if(isset($sucess)){
        echo $sucess;
       }
       ?>
       <br><br><br>
       <h1 style="margin-left: 500px;">Update Here</h1>
       <div class="card p-3 " style="background-color:cyan;">

     
        <form action="" method="post" >

        <div >

                <input type="text" name="name" placeholder="enter name" class="form-control" value="<?php echo $row['name'];?>">
              
            </div>
            <br><br>
            <div>
                <input type="date" name="dob" placeholder="enter dob" class="form-control" value="<?php echo $row['dob'] ;?>"> 
            </div>
            <br><br>
            <div>
                <input type="number" name="salary" placeholder="enter salary" class="form-control" value="<?php echo $row['salary'] ;?>"> 
            </div> 
            <br><br>
            <div>
                <input type="date" name="joining_date" placeholder="enter joining date" class="form-control" value="<?php echo $row['joining_date'];?>"> 
            </div> 
            <br><br>
            <div>
                <input type="date" name="reciving_date" placeholder="enter reciving date" class="form-control" value="<?php echo $row['reciving_date'];?>"> 
            </div>
            <br><br> 
            <div>
                <input type="number" name="contact" placeholder="enter contact" class="form-control" value="<?php echo $row['contact'];?>"> 
            </div> 
            <br><br>
           
           
           
            <div>
                <button name="update" style="margin-left: 500px;">update</button>
            </div>

        </form>
        </div>

    </div>
    
</body>
</html>





