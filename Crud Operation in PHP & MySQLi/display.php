
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>view data</title>
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
    <div class="container">
        <div class="col-lg-12">
           <br><br> <h2 class="text-center text-warning">Displaying Table Data</h2>
            <table class="table table-striped table-hover table-bordered">
                <tr class="bg-dark text-white">
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>

<?php
     include 'connect.php';

     $sql="SELECT * FROM crud_operation";
     $query=mysqli_query($con,$sql); 

     while($res=mysqli_fetch_array($query)){

?>

                <tr>
                    <td class="text-white "><?php echo $res['id']?></td>
                    <td class="text-white "><?php echo $res['username']?></td>
                    <td class="text-white "><?php echo $res['password']?></td>
                    <td class="text-white "><button class="btn btn-danger"><a href="delete.php?id= <?php echo $res['id'];?>" class="text-white">Delete</a></button></td>
                    <td class="text-white "><button class="btn btn-primary"><a href="update.php?id= <?php echo $res['id'];?>" class="text-white">Update</a></button></td>
                </tr>
<?php
     }
?>
            </table>
        </div>
    </div>
</div>
</body>
</html>