<?php 
 $date='null';
 $time='null';
 $description='null';
 $username =  'null';
    $email =   'null';
    $address = 'null';
    $contact =  'null';

 include  'dbcon.php';
 
 if(isset($_POST['Next'])){
    
    $date =  $_POST['date'];
    $time =  $_POST['time'];
    $description =  $_POST['description'];
    }
    
 if(isset($_POST['submit']))
 {
    $username =  $_POST['username'];
    $email =   $_POST['email'];
    $address = $_POST['address'];
    $contact =  $_POST['mobile'];
}

    
    
    $insertquery = "insert into electrician (date, time, description, name, email, mobile, address
                 ) values('$date', '$time', '$description', '$username' , '$email','$contact','$address')";
       
       $iquery = mysqli_query($con, $insertquery);
       
       
       if($iquery){
              ?>
                 <script>
                    alert("your service has been booked ");
                 </script>
              <?php

         }else{
  
             ?>
                 <script>
                    alert(" service not booked");
                 </script>
             <?php
                 
         }
     
    
    
     
 ?>
 