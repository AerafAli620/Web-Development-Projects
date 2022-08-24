<?php
    if(isset($_POST['submit'])){
        // making connection with database.
        $con=mysqli_connect('localhost','root','','registration_form_html_css_php_mysql');
        if(!$con){  // if connection doesn't make.
            echo "<script>alert('Error Occured.')</script>".mysqli_connect_error();
        }else{
            if(isset($_POST['username']) && $_POST['useremail'] && $_POST['userphone'] != "")
            {
                // storing data of input fields into variables.
                $user_name=$_POST['username'];
                $user_email=$_POST['useremail'];
                $user_phone=$_POST['userphone'];
                // database query
                $sql="INSERT INTO `user_info` (`username`,`useremail`,`userphone`)
                VALUES
                        ('$user_name','$user_email','$user_phone')";

                $query=mysqli_query($con,$sql);
                // checking if data is inserted successfully or not.
                if(!$query){
                    echo "<script>alert('Error Occured.')</script>";
                }else{
                    echo "<script>alert('Entry Successfull.')</script>";
                }
            }
        }
    }
?>