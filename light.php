<?php

session_start();
if(!isset($_SESSION["user"]))
{
  header("Location: login.php");
}
?>
<?php
require_once "database.php";
$Email=$_SESSION['user'];
$sql="SELECT * from user_data where email='$Email'";
$r = mysqli_query($conn, $sql);
$result=mysqli_fetch_assoc($r); 
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="light.css" />
    <script src="index.js"></script>
  </head>
  <body>
    <!--Navigation bar-->
    <div id="navbar">
      <a href="#">
        <div id="logo">
          Port
          <div class="blue">folio</div>
        </div>
      </a>
      <div id="menubar">
        <a href="#"><i class="fa-solid fa-bars"></i></a>
      </div>
      <div id="links">
        <a href="#" class="hover"><?php echo "Home";?></a>
        <a href="#skills_scroll" class="hover">Skills</a>
        <a href="#education_scroll" class="hover">Education</a>
      </div>
      <a href="dashboard.php">
        <button id="resume">Dashboard</button>
      </a>
    </div>
    <!--Introduction-->
    <div class="right">
      <div class="animate__animated animate__pulse">
        <!----<div class="outercircle"></div>---->
      </div>
      <div class="photo"></div>
    </div>
    <div id="align">
      <div id="intro">Hi, I'm <?php echo $result['name'];?></div>
      <br />
      <div id="subtext"><div class="blue"><?php echo $result['occupation'];?></div></div>
      <br />
      <div id="intro_para">
      <?php echo $result['intro_para'];?>
      </div>
      <br /><br />
      <a href="#contact_scroll"> <button id="lets_talk">Let's talk</button></a>
      <div class="blue">
        <div id="social_media">
          <a href="#"> <i class="fa-brands fa-facebook"></i></a>
          <a href="#"> <i class="fa-brands fa-instagram"></i></a>
          <a href="#"> <i class="fa-brands fa-github"></i></a>
          <a href="#"> <i class="fa-brands fa-linkedin"></i></a>
        </div>
      </div>
      <div id="arrow">
        <a href="#about_scroll"><i class="fa-solid fa-chevron-down"></i></a
        ><a name="about_scroll"></a>
      </div>
      <br /><br /><br />
    </div>
    <br /><br /><br />
    <!--About me-->
    <div class="content_box">
      <div class="heading">
        About
        <div class="blue">&nbsp; me</div>
      </div>
      <br />
      <div class="center"><div class="photo"></div></div>
      <div id="blu">Student</div>
      <div id="aboutme">
      <?php echo $result['about_me'];?>
      </div>
      <div class="center">
        <a href="#"><button class="read">Read more</button></a
        ><a name="skills_scroll"></a>
      </div>
    </div>
    <br /><br />
    <!--My skills-->
    <div class="heading">
      My
      <div class="blue">&nbsp;skills</div>
    </div>
    <div class="parallel">
      <div id="linear">
      <?php echo $result['skill1'];?>
        <div class="graph"><div id="go"></div></div>
        <br /><br />
        <?php echo $result['skill2'];?>
        <div class="graph"><div id="go1"></div></div>
        <br /><br />
        <?php echo $result['skill3'];?>
        <div class="graph"><div id="go2"></div></div>
        <br /><br />
        
      </div>
      <div id="linear2">
      <?php echo $result['skill4'];?>
        <div class="graph"><div id="go4"></div></div>
        <br /><br />
        <?php echo $result['skill5'];?>
        <div class="graph"><div id="go5"></div></div>
        <br /><br />
        <?php echo $result['skill6'];?>
        <div class="graph"><div id="go6"></div></div>
        <br /><br />
        
        <a name="education_scroll"></a>
      </div>
    </div>
    <!--My education-->
    <div class="content_box">
      <div class="heading">
        My
        <div class="blue">&nbsp;journey</div>
      </div>
      <div class="parallel">
        <div id="box1">
          <div id="Width">
            <div class="edu">
              <div class="blue">
                <i class="fa-solid fa-angles-right"></i> 2008-2023
              </div>
              <br />
              <b><?php echo $result['c1'];?></b>
              <br /><br />
              <?php echo $result['cd1'];?>
            </div>
          </div>
          <div class="edu">
            <div class="blue">
              <i class="fa-solid fa-angles-right"></i> 2023-2026
            </div>
            <br />
            <b><?php echo $result['c2'];?></b>
            <br /><br />
            <?php echo $result['cd2'];?>
          </div>
          <div class="edu">
            <div class="blue">
              <i class="fa-solid fa-angles-right"></i> 2026-2028
            </div>
            <br />
            <b><?php echo $result['c3'];?></b>
            <br /><br />
            <?php echo $result['cd3'];?>
          </div>
        </div>
        <div id="box2">
          <div class="edu">
            <div class="blue">
              <i class="fa-solid fa-angles-right"></i> 2008-2023
            </div>
            <br />
            <b><?php echo $result['c4'];?></b>
            <br /><br />
            <?php echo $result['cd4'];?>
          </div>
          <div class="edu">
            <div class="blue">
              <i class="fa-solid fa-angles-right"></i> 2008-2023
            </div>
            <br />
            <b><?php echo $result['c5'];?></b>
            <br /><br />
            <?php echo $result['cd5'];?>
          </div>
          <div class="edu">
            <div class="blue">
              <i class="fa-solid fa-angles-right"></i> 2008-2023
            </div>
            <br />
            <b><?php echo $result['c6'];?></b>
            <br /><br />
            <?php echo $result['cd6'];?>
            </p>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div id="copyright">
        Copyright <i class="fa-solid fa-copyright"></i> | <a href="logout.php">Logot</a>
      </div>
      <div id="up">
        <a href="#">
          <i class="fa-solid fa-circle-chevron-up" class="transparent"></i>
        </a>
      </div>
    </footer>
    <div id="fixed">
      <a href="index.php">
        <div id="light"><i class="fa-solid fa-moon"></i></div>
      </a>
      
    </div>
  </body>
</html>
