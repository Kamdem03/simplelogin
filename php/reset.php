<?php
     include_once  '../databaseconnect/dababase.php';
     session_start();

     if(isset($_POST['Reset'])){

          $Username = $_POST["Username"];
          $Password = $_POST["password"];

        //check information
        $check_user = "SELECT * FROM users WHERE username = '$Username'";

        $run = mysqli_query($conn,$check_user);
        if(mysqli_num_rows($run) > 0){
          $update_query = "UPDATE `users` SET `passwword`='$Password' WHERE username='$Username'";
          $execute = mysqli_query($conn, $update_query);
          if($execute){
               header("Location: ../form/dashboard.php?message=updated");
          }
          else{
               echo "Could not update User";
          }
        }else{
          header("Location: ../form/reset.php?message=sorry");
        }
     }
        
?>