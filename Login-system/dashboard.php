<?php
    session_start();
    
    if(!isset($_SESSION["logged_in"])){
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard-page</title>
</head>
<body>
    <div class="container" style="display: flex; flex-direction:column;">
        <h1>WELCOME USER</h1>
        <input type="submit" name="signup" id="Submit-btn" style="width: 200px;">
    </div>
    
</body>
</html>

<?php
    echo"PHP IS ACTIVE";

?>