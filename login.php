
<?php

session_start();
if(isset($_SESSION["user"]))
{
  header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="wrapper">
        <?php
        if(isset($_POST["Login"])){
            $email=$_POST["email"];
            $password=$_POST["password"];
            require_once "database.php";
            $sql="SELECT * from register WHERE email = '$email'";
            $result=mysqli_query($conn,$sql);
            $user=mysqli_fetch_array($result,MYSQLI_ASSOC);
            if($user){
                if(password_verify($password,$user['password'])){
                    session_start();
                    $_SESSION["user"]=$email;
                    header("Location: dashboard.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";    
                }
            }
            else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }

    ?>
        <form action="login.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="email" placeholder="Username:" name="email" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password:" name="password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <input type="submit" class="btn" name="Login">

            <div class="register-link">
                <p>Don't have an account? <a href="Register.php">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>