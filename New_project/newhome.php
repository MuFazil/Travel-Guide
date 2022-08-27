<?php 
session_start();
include "db_conn.php";
$_SESSION['user-name']=$_SESSION['username'] ;
if (isset($_SESSION['id']) && isset($_SESSION['name'])&&isset($_SESSION['rate'])&& isset($_SESSION['username'])
&& isset($_SESSION['phone'])&& isset($_SESSION['place'])&& isset($_SESSION['bio']) ){

 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="personid.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shizuru&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>person </title>
</head>
<body style="background-image: url(perseonid.jpg);background-size:cover;height:inherit;background-repeat: 
  no-repeat;text-align: center;">

<section class="header" >
     <div >
      
        <nav class="nav" id="navi">
           
       <img src="AS.png" id="logop" alt="no">

        <div class="hamburger">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>

        <div class="nav__link hide">
          <a href="pageone.php">home</a>
          
        </div>
        
      </nav>
    
      
    </section>
    <div class="text-box">
        <h1> <?php echo $_SESSION['name']?></h1>
        <p>Adventure Pass , is your one stop destination for all your 
            adventure sports needs. Get ,best quality equipment<br> at the most 
            reasonable prices</p> 
        </p>
        
    </div>
    <section class="contain">
        <img class="dp" src="wallpaperbetter (4).jpg" alt="">
        <div style="align-content: center;">
        <div class="small">
         <h1>Hello Explorer,this is  <br> <?php echo $_SESSION['name']?></h1>
        <p> <br> <?php echo $_SESSION['bio']?>
         </p>
        </div>
   <section class="Task">
        <div class ="Columns">
            <div class ="Column">
                <h3>Location </h3>
                <p><?php echo $_SESSION['place']?>
                </p>
            </div>
            <div class ="Column">
                <h3>Rate/Day</h3>
                <p><?php echo $_SESSION['rate']?>
                </p>
            </div>
            <div class ="Column">
                <h3> Contact me</h3>
                <p><?php echo $_SESSION['phone']?>.  
                </p>
            </div>
        </div>
    </section>
             
     </div>
        </div>
    </section>

        <footer class="footer" style="  background-color: rgba(224, 231, 231, 0.708); color: black;">
            <b style="float:inline-start;font-family: cursive;"> MOBILE NO:8919189465<br>MAIL:saikiranreddyk09@gmail.com
            <ul>
                
                <li><a href="https://www.instagram.com/sai_kiran_19.1.9/?hl=en" target="new"><img  src="insta.jpg" alt="" class="icon"></a></li>
                <li><a href="https://www.linkedin.com/in/sai-kiran-reddy-k-834336225/" target="new"><img  src="link1.png" alt="" class="icon"></a></li>
               

            </ul>
        </footer>

        <script>
            const hamburger = document.querySelector(".hamburger");
      const navLink = document.querySelector(".nav__link");
      document.getElementById("navi").style.transition = "all 2s";
      hamburger.addEventListener("click", () => {
        navLink.classList.toggle("hide");
      });
        </script>
  <!--  <div class="profile">
    <h1>Hello, <?php echo $_SESSION['name']?></h1>
     <h2> Id, <?php echo $_SESSION['id']?></h2>
     <h2> Rate, <?php echo $_SESSION['rate']?></h2>
     <h3> bio, <?php echo $_SESSION['bio']?></h3>

     <h2> place, <?php echo $_SESSION['place']?></h2>
     <h2> phone, <?php echo $_SESSION['phone']?></h2>
    </div>-->
     
     <a  class="butttonlogout" href="logout.php">Logout</a>
     <a  class="edit" href="editprofile.php">Edit</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php?fromhome");
     exit();
}
 ?>