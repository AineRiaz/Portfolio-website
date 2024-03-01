<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My services</title>
    <link rel="icon" type="image" href="picture.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
.nav-link{
    color:white;
}
.nav-link:hover{
    color:yellow;
}
body{
    background-color:peachpuff;
}
.heading{
    text-align:center;
    margin:0 6rem;
    font-size:4rem;
    padding:1rem;
    border-bottom:1rem solid #fff4;
    color:black;
    margin-top:35px;
}
.heading span{
    color:crimson;
}
.portfolio .box-container{
    display:flex;
    align-items:center;
    justify-content:space-between;
    flex-wrap:wrap;
    padding:2rem 0;
}
.portfolio .box-container .box{
 width:31rem;
height:31rem;
border:1rem solid orange;
margin:2rem;
overflow:hidden;
cursor:pointer;
}
.portfolio .box-container .box img{
width:100%;
height:100%;
object-fit:cover;
}
.portfolio .box-container .box h3{
font-size:2rem;
color:darkblue;
padding-top:1.5rem;
}
.portfolio .box-container .box span{
font-size:1.3rem;

color:crimson;


}

</style>
</head>
<body>
<nav class="navbar navbar-dark bg-success fixed-top">
  <div class="container-fluid">
  <img src="picture.jpg" width="5%" height="50px"  style="border-radius:8px;" alt="">
    <a style="color:yellow;" class="navbar-brand" href="#">Full stack web developer & Graphic Designer</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-success" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
    <button style="margin-left:5px;" type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    
    <img style="margin-left:120px;margin-top:10px;" src="logo.png" width="30%" height="90px">
   
    <div class="offcanvas-header">
         <h5 style="color:yellow;padding-left:30px;" class="offcanvas-title" id="offcanvasDarkNavbarLabel">Frontend & Backend web developer </h5><br>
    
     
             </div>
      
       
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="education.php">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="portfolio.php">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact us</a>
          </li>
          
        </ul>
        
      </div>
    </div>
  </div>
</nav>
<section class="portfolio" id="portfolio">
<h1 class="heading">My <span>portfolio</span></h1><br>
<h1 class="heading">Web<span>Application development</span></h1>

<div class="box-container">
<div class="box">
    <h3>Calculator using <span>HTML CSS JS</span></h3>
    <img src="calculator.jpg" alt="">
</div>
<div class="box">
    <h3>calendar using <span>HTML CSS JS</span></h3>
    <img src="calendar.jpg" alt="">
</div>
<div class="box">
    <h3>Crud system using <span>html css and php ,MySql</span></h3>
    <img src="crud.jpg" alt="">
</div>
<div class="box">
    <h3>bigger project google classroom using <span>frontend & backend</span></h3>
    <img src="google.jpg" alt="">
</div>
<div class="box">
    <h3>Login & logout system using <span>frontend & backend</span></h3>
    <img src="login.jpg" alt="">
</div>
<div class="box">
    <h3>simple login form using <span>HTML & CSS</span></h3>
    <img src="log.jpg" alt="">
</div>
<div class="box">
    <H3>Ecommerce shopping cart website using <span>frontend & backend</span></H3>
    <img src="e.jpg" alt="">
</div>
<div class="box">
<H3>Ecommerce  website using <span>frontend & backend</span></H3>

    <img src="ec.jpg" alt="">
</div>

</div>
</section>
<section class="portfolio" id="portfolio">

<h1 class="heading">Graphic <span>designing</span></h1>

<div class="box-container">
<div  class="box">
    <h3>Youtube <span>Thumbnails</span></h3>
    <img  src="thu.png" width="40%" height="30%" alt="">
</div>
<div class="box">
    <h3> youtube <span>Thumbnails</span></h3>
    <img src="boy.jpg" alt="">
</div>
<div class="box">
    <h3>Best <span>Logo</span></h3>
    <img src="h.png" alt="">
</div>
<div class="box">
    <h3>Best & unique <span>design cards</span></h3>
    <video style="width:100%;height:100%;object-fit:cover;" controls src="video.mp4"></video>
</div>
<div class="box">
    <h3>Card style <span>Certificate</span></h3>
    <video style="width:100%;height:100%;object-fit:cover;" controls src="certi.mp4"></video>

</div>
<div class="box">
    <h3>Email Signatures using <span>HTML & CSS</span></h3>
    <img src="signature.png" width="30%" height="300px" alt="">
</div>
<div class="box">
    <H3>Backgroung Removal <span>Transparent or white</span></H3>
    <img src="pic.png" alt="" width="40%" height="260px">
</div>
<div class="box">
<H3>Change Background to<span>Any style</span></H3>

    <img src="pict.png" alt="">
</div>




















</div>
</section>



















<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
</body>
</html>