<?php
    include_once '../databaseconnect/dababase.php';
    session_start();

    if(isset($_POST['Login'])){

        // EXTRACT THE USERNAME AND PASSWORD FROM THE LOGIN FORM
            $Username = $_POST["Username"];
            $Password = $_POST["Password"];
            // CHECK IF USER EXIST
            $check_user = "select * from users WHERE username='$Username'";
            $query = mysqli_query($conn, $check_user);

            if($query){
                if(mysqli_num_rows($query)>0){
                   $data = mysqli_fetch_row($query);
                   if(password_verify($Password, $data[2])){
                    header("Location: ../form/dashboard.php?message=welcome");
                   }
                   else{
                    header("location: ../form/login.php?message=password_error");
                   }
                }
                else{
                    header("location: ../form/login.php?message=no_user");
                }
                
            }

    }
            else{
                header("location: ../form/login.php");
            }
   
?>