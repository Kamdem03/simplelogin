<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..//form/bootstrap-5.2.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="reset.css">
    <title>Reset</title>
</head>
<body class="d-flex justify-content-center align-items-center bg-gray">
    <div class="reset d-flex justify-content-center align-items-center">
        <div>
            <?php 
            if(isset($_GET['message'])){
            echo "<h2 class='alert alert-danger'><span>No Such User Found </span> </h2>";}
            ?>
            <h2 class="text-center mb-5 text-primary">Reset </h2>
            <form action="../php/reset.php" method="POST" class="text-center">
                <label for="Username" class="me-3">User Name: </label><input type="text" name="Username" placeholder="User Name" class="mb-3"><br>
                <label for="Password:" class="me-3">Password: </label><input type="password" name="password" placeholder="Password"  class="mb-3"><br>
                <button type="submit" name="Reset" class="btn btn-primary my-4">Reset</button>
            </form>
        </div>
    </div>
    
</body>
</html>