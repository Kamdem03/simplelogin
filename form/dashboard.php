

<?php
     include_once  '../databaseconnect/dababase.php';
     session_start();

  
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..//form/bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../form/dashboard.css">
    <title>Dashboard</title>

</head>
<body class="d-flex justify-content-center align-items-center bg-black">
    <header class="text-center">
        <?php
                if(isset($_GET['message'])){
                    if($_GET['message'] == "welcome"){
                        echo "<p class='alert alert-primary'><span> welcome home </span> </p>";
                    }
                    
                }
                ?>
    <div class="text-light d-flex justify-content-center mb-3">

    <h2 >Hello 
        <?php echo  $_SESSION['Username'] ?>
        
     </h2>

    </div>  

        <p class="welcome text-light">Welcome to SLACK</p>

        <a href="../form/landing.html" class="text-center ">
            Logout
        </a>

        <a href="../form/Reset.html" class="text-center ms-4">
            Reset
        </a>

        
        

    </header>
    
</body>
</html>