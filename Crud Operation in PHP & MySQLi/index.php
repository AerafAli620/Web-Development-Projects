
<?php
    include 'connect.php';
    if(isset($_POST['submit'])){
        $user_name=$_POST['username'];
        $user_password=$_POST['password'];
        $sql="INSERT INTO `crud_operation`(`username`,`password`)
        VALUES
                ('$user_name','$user_password')";
        $query=mysqli_query($con,$sql);
        if(!$query){
            echo "<script>alert('Error Occured.')</script>";
        }else{
            echo "<script>alert('Entry Successfull.')</script>";
        }
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
    <style>
        .main_container{
            width: 100%;
            height: 100vh;
            background-color: #1a52f9;
            background-image: linear-gradient(19deg, #1a52f9 0%, #B721FF 84%);
        }
    </style>
</head>
<body>
    <!-- nav bar -->
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="text-white navbar-brand" href="#">Crud Operation</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="text-white nav-link" href="index.php">Insert</a>
        <a class="text-white nav-link" href="display.php">Display</a>
      </div>
    </div>
  </div>
</nav>
<!------------------------------------------------------------------------>
<div class="main_container">
    <div class="col-lg-6 m-auto">
        <form  method="POST">
            <br><br><br><div class="card">
                <div class="card-header bg-info">
                    <h1 class="text-white text-center">Add Data</h1>
                </div><br>

                <label>Username:</label>
                <input type="text" name="username" class="form-control"><br>
                <label>Password:</label>
                <input type="password" name="password" class="form-control"><br>

                <button class="btn btn-success" type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>