<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My education</title>
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
.education .box-container{
    display:flex;
    align-items:center;
    justify-content:space-between;
    flex-wrap:wrap;
    padding:1rem 0;
    padding-left:3rem;


}
.education .box-container .box{
width:27rem;
margin:4rem 1rem;
padding-left:4rem;
border-left: .2rem solid crimson;
position:relative;
}
.education .box-container .box span{
font-size:1.3rem;
background-color:#222;
color:yellow;
border-radius:3rem;
padding:2rem 1.5rem;
}
.education .box-container .box h3{
font-size:2rem;
color:darkblue;
padding-top:1.5rem;
}
.education .box-container .box p{
font-size:1.4rem;
color:black;
padding:1rem 0;
}
.education .box-container .box i{
position:absolute;
top:-1.5rem; left:-2.5rem;
height:5rem;
width:5rem;
border-radius:50%;
line-height:5rem;
text-align:center;
font-size:2rem;
color:crimson;
background-color:yellow;
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
<section class="education" id="education">
<h1 class="heading">My <span>Education</span></h1>
<div class="box-container">
<div class="box">
    <i class="fa-solid fa-graduation-cap"></i>
    <span>2019</span>
    <h3>Matric in computer science</h3>
    <p>I have passed the matriculation exam with good marks and also i got A+ grade in exam.</p>
</div>
<div class="box">
    <i class="fa-solid fa-graduation-cap"></i>
    <span>2021</span>
    <h3>Inter in computer science</h3>
    <p>I have passed the ICS exam with good marks and also i got A+ grade in exam.</p>
</div>




<div class="box">
    <i class="fa-solid fa-graduation-cap"></i>
    <span>2023</span>
    <h3>Full stack web developer</h3>
    <p>I have passed bs in computer science exam with good remarks and also gain full stack web developer (frontend) & (backend) degree from UET with good remarks.</p>
</div>
<div class="box">
    <i class="fa-solid fa-graduation-cap"></i>
    <span>2023</span>
    <h3>Award won</h3>
    <p>I achieve certificate as a full stack web developer (frontend) & (backend)  from UET with good remarks.</p>
</div>






</div>











</section>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
</body>
</html>