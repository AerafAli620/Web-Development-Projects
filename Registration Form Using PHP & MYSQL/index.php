<?php

?>

<!--//////////////////////////////////////////////////////////////-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap" rel="stylesheet">
    <!--  -->
    <title>My Site.</title>
</head>
<body>
    <div class="container">
        <div class="sub_container">
            <h2>Registration Form</h2>
            <div class="sub_sub_container">
                <form action="connect.php" method="POST">
                    <label for="name" id="labels">Name: </label>
                    <input type="text" name="username" id="userdata" required><br><br>

                    <label for="email" id="labels">Email: </label>
                    <input type="text" name="useremail" id="userdata" required><br><br>

                    <label for="phone" id="labels">Phone: </label>
                    <input type="text" name="userphone" id="userdata" required><br><br>

                    <input type="submit" name="submit" id="button">
                </form>
                </div>
        </div>
    </div>
</body>
</html>