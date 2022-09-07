<?php
    include 'connect.php';
    $ID=$_GET['id'];
    $sql="DELETE FROM `crud_operation` WHERE  id=$ID";
    mysqli_query($con,$sql);
    header('location:display.php');

?>