<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-system</title>
</head>
<body>
    <div class="container">
        <div class="mid-container">
            <form action="index.php" method="post">
                <label for="username">Username</label><br>
                <input type="text" name="username">
                <br>
                <label for="Email">Email</label><br>
                <input type="email" name="Email">
                <br>
                <label for="password">Password</label><br>
                <input type="password" name="password">
                <br>
                <label for="cornfirm-password">Cornfirm password</label><br>
                <input type="password" name="cornfirm-password"><br>

                <input type="submit" name="Sign up" id="Submit-btn">

            </form>
        </div>
    </div>
    
</body>
</html>

<?php
    echo "HII";
?>