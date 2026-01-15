<?php

session_start();
if(!isset($_SESSION["user"]))
{
  header("Location: login.php");
}
?>
<?php
require_once "database.php";
$Name="";
$Email=$_SESSION["user"];
$Occupation="";
$Intro_para;
$Skill1="";
$Skill2="";
$Skill3="";
$Skill4="";
$Skill5="";
$Skill6="";
$About_me="";
$C1="";
$C2="";
$C3="";
$C4="";
$C5="";
$C6="";
$Cd1="";
$Cd2="";
$Cd3="";
$Cd4="";
$Cd5="";
$Cd6="";
$sql="SELECT * from user_data where email='$Email'";
$r = mysqli_query($conn, $sql);
$result=mysqli_fetch_assoc($r); 
if(isset($_POST['submit1']))
{
    $Name=$_POST['name'];
    $Occupation=$_POST['occupation'];
    $Intro_para=$_POST['intro_para'];
    $sql="UPDATE user_data SET name='$Name' , occupation='$Occupation' , intro_para='$Intro_para'  WHERE email='$Email'";
    mysqli_query($conn,$sql);
    header("Refresh:0");
}
if(isset($_POST['submit2']))
{
    $Skill1=$_POST['skill1'];
    $Skill2=$_POST['skill2'];
    $Skill3=$_POST['skill3'];
    $Skill4=$_POST['skill4'];
    $Skill5=$_POST['skill5'];
    $Skill6=$_POST['skill6'];
    $About_me=$_POST['about_me'];
    $sql="UPDATE user_data SET skill1='$Skill1' ,skill2='$Skill2' , skill3='$Skill3' , skill4='$Skill4' , skill5='$Skill5' ,skill6='$Skill6' , about_me='$About_me'  WHERE email='$Email'";
    mysqli_query($conn,$sql);
    header("Refresh:0");
}
if(isset($_POST['submit3']))
{
    $C1=$_POST['c1'];
    $C2=$_POST['c2'];
    $C3=$_POST['c3'];
    $C4=$_POST['c4'];
    $C5=$_POST['c5'];
    $C6=$_POST['c6'];
    $Cd1=$_POST['cd1'];
    $Cd2=$_POST['cd2'];
    $Cd3=$_POST['cd3'];
    $Cd4=$_POST['cd4'];
    $Cd5=$_POST['cd5'];
    $Cd6=$_POST['cd6'];
    $sql="UPDATE user_data SET cd1='$Cd1', cd2='$Cd2', cd3='$Cd3', cd4='$Cd4', cd5='$Cd5', cd6='$Cd6', c1='$C1' , c2='$C2' , c3='$C3' , c4='$C4' , c5='$C5' , c6='$C6'  WHERE email='$Email'";
    mysqli_query($conn,$sql);
    header("Refresh:0");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="ggg.css"/>
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <script>
        function men(e){
            let a = document.getElementsByClassName("menu")[0].children;
            for(let i of a){
                if (i.classList.contains("active")) i.classList.remove("active");
            }
            e.classList.add("active");
        }
    </script>
</head> 
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li onclick="men(this)">
                <a href="#" >
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="active" onclick="men(this)">
                <a href="#Profile">
                    <i class="fas fa-user"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li onclick="men(this)">
                <a href="#About">
                    <i class="fas fa-chart-bar"></i>
                    <span>About</span>
                </a>
            </li>
            <li onclick="men(this)">
                <a href="#Career">
                    <i class="fas fa-briefcase"></i>
                    <span>Careers</span>
                </a>
            </li>
            <li onclick="men(this)">
                <a href="index.php">
                    <i class="fas fa-briefcase"></i>
                    <span>Portfolio</span>
                </a>
            </li>
            <li onclick="men(this)">
                <a href="#Settings">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
            </li onclick="men(this)">
            <li class="logout" onclick="men(this)">
                <a href="logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
<div class="c">
    <a name="Profile"></a>
    <div class="bodyy 1">
        <div class="container">

            <header>Profile</header>
                <form action="" method="post">
                    <div class="form first">
                        <div class="details personal">
                            <span class="title">Personal Details</span>

                            <div class="fields">

                                <div class="input-field t1">
                                    <label >Full Name</label>
                                    <input type="text" placeholder="Enter your Name:" name="name" value="<?php echo $result['name']?>">
                                </div>

                                <div class="input-field t1">
                                    <label >Email</label>
                                    <input type="email" placeholder="Enter your Email:" name="email" value="<?php echo $result['email']?>">
                                </div>

                                <div class="input-field t1">
                                    <label >Occupation</label>
                                    <input type="text" placeholder="Enter your Occupation:" name="occupation" value="<?php echo $result['occupation']?>">
                                </div>

                            </div>
                            <div class="fields">

                                <div class="input-field t2">
                                    <label >Short info</label>
                                    <textarea class="input1"  placeholder="Enter a short description" name="intro_para"><?php echo $result['intro_para']?></textarea>
                                </div>

                                

                            </div>
                            <div class ="nextBtn">
                                    <span class="btnText"><input type="submit" name ="submit1"class="nextBtn">
                            </div>
                        </div>
                    </div>
                </form>

        </div>
    </div>
    <a name="About"></a>
    <div class="bodyy 2">
        <div class="container">

            <header>About</header>
                <form action="dashboard.php" method="post">
                    <div class="form first">
                        <div class="details personal">
                            <span class="title">About You</span>

                            <div class="fields">

                                <div class="input-field t1">
                                    <label >Skill 1</label>
                                    <input type="text" placeholder="Enter your Fisrt Skill:" name="skill1"value="<?php echo $result['skill1']?>">
                                    
                                </div>

                                <div class="input-field t1">
                                    <label >Skill 2</label>
                                    <input type="text" placeholder="Enter your Second Skill:" name="skill2" value="<?php echo $result['skill2']?>">
                                </div>

                                <div class="input-field t1">
                                    <label >Skill 3</label>
                                    <input type="text" placeholder="Enter your Third Skill:" name="skill3" value="<?php echo $result['skill3']?>">
                                </div>

                                <div class="input-field t1">
                                    <label >Skill 4</label>
                                    <input type="text" placeholder="Enter your Fourth Skill:"name="skill4" value="<?php echo $result['skill4']?>">
                                </div>

                                <div class="input-field t1">
                                    <label >Skill 5</label>
                                    <input type="text" placeholder="Enter your Fifth Skill:"name="skill5" value="<?php echo $result['skill5']?>">
                                </div>

                                <div class="input-field t1">
                                    <label >Skill 6</label>
                                    <input type="text" placeholder="Enter your Sixth Skill:" name="skill6"value="<?php echo $result['skill6']?>">
                                </div>

                            </div>
                            <div class="fields">

                                <div class="input-field t2">
                                    <label >Life story</label>
                                    <textarea class="input2"  placeholder="Enter a short description" name="about_me"><?php echo $result['about_me']?></textarea>
                                </div>

                                

                            </div>
                            <div class ="nextBtn">
                                    <span class="btnText"><input type="submit" name="submit2" class="nextBtn">
                            </div>
                        </div>
                    </div>
                </form>

        </div>
    </div>
    <a name="Career"></a>
    <div class="bodyy 3">
        <div class="container">

            <header>Career</header>
                <form action="" method="post">
                    <div class="form first">
                        <div class="details personal">
                            <span class="title">Your Career</span>

                            <div class="fields">

                                <div class="input-field t1">
                                    <label >About class 10th</label>
                                    <input type="text" placeholder="Enter your School Name:" name="c1" value="<?php echo $result['c1']?>">
                                    <textarea class="input2"  placeholder="Enter a short description" name="cd1"><?php echo $result['cd1']?></textarea>
                                </div>

                                <div class="input-field t1">
                                    <label >About class 12th</label>
                                    <input type="text" placeholder="Enter your School Name:" name="c2" value="<?php echo $result['c2']?>">
                                    <textarea class="input2"  placeholder="Enter a short description" name="cd2"><?php echo $result['cd2']?></textarea>
                                </div>

                                <div class="input-field t1">
                                    <label >About Bachelors Degree</label>
                                    <input type="text" placeholder="Enter your College Name:" name="c3" value="<?php echo $result['c3']?>">
                                    <textarea class="input2"  placeholder="Enter a short description" name="cd3"><?php echo $result['cd3']?></textarea>
                                </div>

                                <div class="input-field t1">
                                    <label >About Masters Degree</label>
                                    <input type="text" placeholder="Enter your College Name:" name="c4" value="<?php echo $result['c4']?>">
                                    <textarea class="input2"  placeholder="Enter a short description" name="cd4"><?php echo $result['cd4']?></textarea>
                                </div>

                                <div class="input-field t1">
                                    <label >Work experience</label>
                                    <input type="text" placeholder="Enter your work experience:" name="c5" value="<?php echo $result['c5']?>">
                                    <textarea class="input2"  placeholder="Enter a short description" name="cd5"><?php echo $result['cd5']?></textarea>
                                </div>

                                <div class="input-field t1">
                                    <label >Work experience2</label>
                                    <input type="text" placeholder="Enter your Any other work experience:" name="c6" value="<?php echo $result['c6']?>">
                                    <textarea class="input2"  placeholder="Enter a short description" name="cd6"><?php echo $result['cd6']?></textarea>
                                </div>

                            </div>
                            <div class ="nextBtn">
                                    <span class="btnText"><input type="submit" name="submit3" class="nextBtn">
                            </div>
                        </div>
                    </div>
                </form>

        </div>
    </div>
    <a name="Settings"></a>
    <div class="bodyy 4">
        <div class="container">

            <header>Settings</header>
                <form action="">
                    <div class="form first">
                        <div class="details personal">
                            <span class="title">Change password</span>

                            <div class="fields">

                                <div class="input-field t1">
                                    <label >Old password</label>
                                    <input type="text" placeholder="Enter your OLd Password:" value="">
                                </div>

                                <div class="input-field t1">
                                    <label >New Password</label>
                                    <input type="text" placeholder="Enter your Email:" value="">
                                </div>

                                <div class="input-field t1">
                                    <label >Enter again</label>
                                    <input type="text" placeholder="Enter your Occupation:" value="">
                                </div>

                            </div>

                            <span class="title">Change Email Id</span>

                            <div class="fields">

                                <div class="input-field t1">
                                    <label >Old Email</label>
                                    <input type="email" placeholder="Enter your OLd Password:" value="">
                                </div>

                                <div class="input-field t1">
                                    <label >New Email</label>
                                    <input type="email" placeholder="Enter your Email:" value="">
                                </div>

                                <div class="input-field t1">
                                    <label >Password</label>
                                    <input type="text" placeholder="Enter your Occupation:" value="">
                                </div>

                            </div>
                            <div class ="nextBtn">
                                    <span class="btnText"><input type="submit" class="nextBtn">
                            </div>
                        </div>
                    </div>
                </form>

        </div>
    </div>

</div>
</body>
</html>