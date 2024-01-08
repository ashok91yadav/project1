<?php
error_reporting(E_ALL);

 


include('conn.php');

if(isset($_POST['regis'])){
    $name=$_POST['name'];
   
    $dob=$_POST['dob']; 
    $salary=$_POST['salary'];
    $joining_date=$_POST['joining_date'];
   
    $reciving_date=$_POST['reciving_date']; 
    $contact=$_POST['contact'];
    $status=$_POST['status'];


    if(empty($name)){
      
        $error= "please enter name";
    

    }
    elseif(empty($dob)){
      
        $error= "please enter dob";
    

    }
    elseif(empty($salary)){
      
        $error= "please enter salary";
    

    }
    elseif(empty($joining_date)){
      
        $error= "please enter joining_date";
    

    }
    elseif(empty($reciving_date)){
      
        $error= "please enter reciving_date";
    

    }  elseif(empty($contact)){
      
        $error= "please enter contact";
    

    }

    else{
   
    $q="insert into test ( name, dob, salary, joining_date,reciving_date,contact,status) VALUES ('$name','$dob','$salary','$joining_date','$reciving_date','$contact','$status')";
    $result= mysqli_query($con, $q);
    if($result){
        
        header("location:fetch.php");
    }
    else{
        $sucess= "try after";
    }

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
       if(isset($error)){
        echo $error;
       }
       ?>
        <?php
       if(isset($sucess)){
        echo $sucess;
       }
       ?>
       <br><br><br>
       <h1 style="margin-left: 500px;">Register Here</h1>
       <div class="card p-3" style="background-color:cyan;">

     
        <form action="" method="post" >

        <div >

                <input type="text" name="name" placeholder="enter name" class="form-control" value="<?php if(isset($name)){echo $name;}?>">
              
            </div>
            <br><br>
            <div>
                <input type="date" name="dob" placeholder="enter dob" class="form-control" value="<?php if(isset($dob)){echo $dob;}?>"> 
            </div>
            <br><br>
            <div>
                <input type="number" name="salary" placeholder="enter salary" class="form-control" value="<?php if(isset($salary)){echo $salary;}?>"> 
            </div> 
            <br><br>
            <div>
                <input type="date" name="joining_date" placeholder="enter joining date" class="form-control" value="<?php if(isset($joining_date)){echo $joining_date;}?>"> 
            </div> 
            <br><br>
            <div>
                <input type="date" name="reciving_date" placeholder="enter reciving date" class="form-control" value="<?php if(isset($reciving_date)){echo $reciving_date;}?>"> 
            </div>
            <br><br> 
            <div>
                <input type="number" name="contact" placeholder="enter contact" class="form-control" value="<?php if(isset($contact)){echo $contact;}?>"> 
            </div> 
            <br><br>
            <div>
            <input type="number" name="status" placeholder="enter status" class="form-control" > 
       
            </div> 
            <br><br>
           
           
            <div>
                <button name="regis" style="margin-left: 500px;">register</button>
            </div>

        </form>
        </div>

    </div>
    
</body>
</html>





