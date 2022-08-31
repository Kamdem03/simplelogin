
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..//form/bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body class="d-flex justify-content-center align-items-center bg-gray">
    <div class="log d-flex justify-content-center align-items-center">
        <div>
            <h2 class="mb-4 text-center text-primary">Login</h2>
            <?php 
            if(isset($_GET['message'])){
                if($_GET['message'] =='password_error'){
                    echo "<div class='alert alert-warning'><span>password error</span></div>";
                }
                elseif($_GET['message'] =='no_user'){
                    echo "<div class='alert alert-warning'><span>no such user found</span></div>";
                }
                else{
                    echo "<div class='alert alert-danger'><span>Something went wrong</span></div>";
                }
            }
            ?>
        <form action="../php/login.php" method="POST" class="text-center">
            <label for="Username" class="me-3 ">User Name: </label><input type="text" name="Username" placeholder="User Name" class="mb-3 " ><br>
            <label for="Password" class="me-3 ">Password: </label> <input type="password" name="Password" placeholder="Password"><br>
           <button type="submit" class="btn btn-primary  my-5" name="Login"> Login</button>
           
           
        </form>
        </div>
    </div>
</body>
</html>