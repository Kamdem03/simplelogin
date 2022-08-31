<?php
     include_once '../databaseconnect\dababase.php';
     session_start();

     if(!isset($_POST['Register'])){
          $Username = $_POST["Username"];
          $Password = password_hash($_POST["Password"], PASSWORD_DEFAULT);


          //query that checks if uswe already exist so he doesn't register again
          $check_user = "select * from users WHERE username = '$Username' AND passwword= '$Password'";

          $run = mysqli_query($conn,$check_user);

          if(mysqli_num_rows($run)>0){
               echo "Username already exist. Try another username";
               exist();
          }
          
          //insert a user into the database
          $insert_user = "INSERT INTO users (`username`, `passwword`) VALUES ('$Username', '$Password')";
          if (mysqli_query($conn,$insert_user)){
               header("Location: ../form/dashboard.php");
          }
          else{
               echo "query did not run well";
          }
               
     }



?>