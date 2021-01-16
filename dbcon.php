<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "signup";

$con = mysqli_connect($server, $user, $password,$db);

if($con){
  ?>
    <script>
        alert("connecting to server");
    </script>
  <?php

}else{
  
  ?>
    <script>
        alert(" no connection  ");
    </script>
  <?php
}
        
        
     