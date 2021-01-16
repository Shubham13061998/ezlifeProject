
 <?php 
 
 include  'dbcon.php';
 
 if(isset($_POST['submit'])){
    $username = $_POST['Name'];
    $address =  $_POST['Address'];
    $email =  $_POST['email'];
    $zipcode =  $_POST['ZIPCode'];
    $password =  $_POST['Password'];
    
    
    $pass = password_hash($password, PASSWORD_BCRYPT);
    
    
    $emailquery = " select * from registration where email='$email' ";
    $query = mysqli_query($con, $emailquery);
    
    
    $emailcount = mysqli_num_rows($query);
    
    
    if($emailcount>0){
       ?>
          <script>
             alert ("email already exist");
          </script>
         <?php
    }else{
       
       $insertquery = "insert into registration(username, address, email,
                 zipcode, password ) values('$username', '$address', '$email', '$zipcode', '$pass')";
       
       $iquery = mysqli_query($con, $insertquery);
       
       
       if($iquery){
          
              ?>
              
                 
                  <script>
                      alert("your Account has been created");
                  </script> 
                 ?>
                 
                 <?php header("Location: http://localhost/project/Layout.html"); ?>
                
              <?php
              

         }else{
  
             ?>
                 <script>
                    alert(" please insert valid info ");
                    
                 </script>
                
             <?php
                 
         }
      }
   }

 
