
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
   
   
    <br>
    <br>

  
   
    <a href="register.php"><button class="text-center" style="margin-left: 1050px;">register here</button></a>
    <h1 style="margin-left: 500px;margin-top:-50px;">Employee List</h1>
    <br>
    <br>
    <div  >
   
    <table style="background-color:cyan;" class="table" border="1" >
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Dob</td>
                     <td>Salary</td> 
                     <td>Joining Date</td> 
               
                     <td>recieving date</td>
                     <td>contact</td>
                     <td>Action</td>
                     <td>status</td>
                </tr>
                <tbody>
                    <?php
                    include('conn.php');
                    $q="select * from test";
                    $table=mysqli_query($con,$q);
                    while($row=mysqli_fetch_assoc($table)){
                        ?>
                         <tr>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['dob'];?></td>
                        <td><?php echo $row['salary'];?></td>
                        <td><?php echo $row['joining_date'];?></td>
                        <td><?php echo $row['reciving_date'];?></td>
                        <td><?php echo $row['contact'];?></td>
                     
               
                        <td>
                            <a href="delete.php?id=<?php echo $row['id'];?>">delete</a>
                            <a href="update.php?id=<?php echo $row['id'];?>">update</a>
                        </td>
                        <td>
                        <?php 
                            $status=$row['status'];
                            //print_r($row['status']);
                            //die();
                           if($status==1){
                            ?>
                            <a href="status.php?id=<?php echo $row['id'];?>&status=0">active</a>
                            <?php

                           }
                           else{
                            ?>
                            <a href="status.php?id=<?php echo $row['id'];?>&status=1">deactive</a>
                            <?php

                           }
                           ?>
                    </td>
                    </tr>

                        <?php
                    }
                    ?>
                   
                </tbody>

            </thead>
        
    </table>
    </div>

</div>

    
</body>
</html>
