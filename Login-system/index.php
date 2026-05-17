<?php
session_start();
$_SESSION["username"] = "muhammad";
$password = 1234;
$_SESSION["password"] = password_hash(1234, PASSWORD_DEFAULT);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style .css">
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
                <label for="password">Password</label><br>
                <input type="password" name="password">
                <br>

                <input type="submit" name="signup" id="Submit-btn">

            </form>
        </div>
    </div>
    
</body>
</html>

<?php
    if(isset($_POST["signup"])){
        
        $username = htmlspecialchars(trim($_POST["username"]) );
        $password = trim($_POST["password"]) ;

        if(empty($username)){
            echo"Username is empty";
        }
        elseif(empty($password)){
            echo"Password is empty";
        }
        else{

            if($username == $_SESSION["username"] &&
            $password == $_SESSION["password"]){
                echo"Login successful" ."<br>";
            }
            else{
                echo"invalid username or password";
            }
        }
    }

?>