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
    $count=0;
        if(isset($_POST["submit"]))
        {
            
            $fullname=$_POST["fullname"];
            $email=$_POST["email"];
            $password=$_POST["password"];
            $repeat_password=$_POST["repeat_password"];
            $errors=array();

            $password_hash=password_hash($password,PASSWORD_DEFAULT);
            if(empty($fullname) or empty($email) or empty($password) or empty($repeat_password))
            {
                array_push($errors,"All feilds are required");
            }
            if(strlen($password)<8)
            {
                array_push($errors,"Password must be 8 characters long");
            }
            if($password!=$repeat_password)
            {
                array_push($errors,"Password does not match");
            }
            require_once "database.php";
            $sql1="SELECT * FROM register WHERE email = '$email'";
            $result=mysqli_query($conn,$sql1);
            $rows=mysqli_num_rows($result);
            if($rows>0)
            {
                array_push($errors,"Email id already exist");
            }
            if(count($errors)>0)
            {
                foreach($errors as $error)
                {
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            }
            else{
                
                $sql=sprintf("INSERT into register(Name, email, password) values ('%s','%s','%s')",$fullname,$email,$password_hash);
                $sql2="INSERT into user_data(email) values ('$email')";
                mysqli_query($conn,$sql2);
                mysqli_query($conn,$sql);
                echo "<div class='alert alert-success'>You are registered</div>";
                $count=1;
                
            }
        }
        ?>
        <form action="Register.php" method="post">
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" placeholder="Fullname:" name="fullname" required>
                <i class='bx bxs-user'></i>
            </div>
            
            <div class="input-box">
                <input type="email" placeholder="Email:" name="email" required>
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password:" name="password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Repeat Password:" name="repeat_password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <input type="submit" class="btn" name="submit">

            <div class="register-link">
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>
<?php

if($count==1)
{
    sleep(2);
    header("Location: login.php");
}
?>