<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
#home{
    margin-left:30px;
    margin-top:80px;
}
.btn{
background-color:green;
color:white;
border-radius:9px;

}
@media(max-width:328px) {
    #poster{
        margin-top:700px;
    }
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
<img id="poster" style="margin-top:70px;width:100%;height:500px;" src="poster.png" class="img-fluid" alt="...">
<section class="home" id="home">
<h3 style="color:black">HI There !</h3>
<h1 style="color:black;">I'M <SPAN style="color:crimson;">Aine</SPAN></h1>
<p style="color:black">As a Full-Stack Web Developer, I am proficient in a wide range of technologies and frameworks, enabling me to design, implement, and maintain robust and dynamic web applications. My expertise spans both the client-side (front-end) and server-side (back-end) development, allowing me to create seamless and interactive user experiences.I am also graphic designer i create attractive youtube thumbnails,logo,banners,cards etc. </p>
<a style="color:green;" href="about.php"><button class="btn">About me <i style="color:yellow;" class="fa-solid fa-user"></i> </button></a>
</section>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
</body>
</html>