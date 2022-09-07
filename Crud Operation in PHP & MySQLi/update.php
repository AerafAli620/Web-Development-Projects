<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $ID=$_GET['id'];
        $user_name=$_POST['username'];
        $user_password=$_POST['password'];
        $sql="UPDATE `crud_operation` set `id`=$ID, `username`='$user_name', `password`='$user_password' WHERE id=$ID";
        $query=mysqli_query($con,$sql);
        header('location:display.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>CRUD Operation</title>
</head>
<body>
    
   <br><br><br> <div class="col-lg-6 m-auto">
        <form  method="POST">
            <br><div class="card">
                <div class="card-header bg-info">
                    <h1 class="text-white text-center">Update Data</h1>
                </div><br>

                <label>Username:</label>
                <input type="text" name="username" class="form-control"><br>
                <label>Password:</label>
                <input type="password" name="password" class="form-control"><br>

                <button class="btn btn-success" type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>