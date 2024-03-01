<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
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
.about .row{
    display:flex;
    align-items:center;
    justify-content:center;
    flex-wrap:wrap;
    padding:1rem 0;
}
.about .row .info{
    flex:1 1  48rem;
    padding:2rem 1rem;
    padding-left:6rem;
}
.about .row .info h3{
font-size:2rem;
color:crimson;
padding:1rem 0;
font-weight:normal;

}
.about .row .info h3 span{
    color:black;
}
.about .row .counter{
    flex:1 1  48rem;
    
    display:flex;

    justify-content:center;
    flex-wrap:wrap;
 
}
.about .row .counter .box{
 width:20rem;
padding:2rem;
background-color:#222;
text-align:center;
margin:2rem;
}
.about .row .counter .box .span{
color:white;
font-size:4rem;
}
.about .row .counter .box .h3{
color:pink;
font-size:2rem;
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
<section class="about" id="about">
<h1 class="heading"><span>About</span> me</h1>
<div class="row">
<div class="info">
<h3><span> name : </span> Aine </h3>
<h3><span> Age : </span> 19 </h3>
<h3><span> Post : </span> Full stack web developer & Graphic designer </h3>
<h3><span> Qualification : </span> BCS </h3>
<h3><span> Languages : </span> Urdu & English </h3>
<h3><span> computer Languages </span> I Know! </h3>

<dl>
    <dt style="color:green;">Frontend Languages</dt>
    <dd><i style="color:red;" class="fa-brands fa-html5"></i> HTML</dd>
     <dd><i style="color:blue;" class="fa-brands fa-css3-alt"></i> CSS</dd>
     <dd><i STYLE="color:skyblue;" class="fa-brands fa-bootstrap"></i> Bootstrap</dd>
    <dd><i STYLE="color:yellow;" class="fa-brands fa-square-js"></i> Javascript</dd>
    <dd><img src="icon.png" width="24px;height:10px;" alt="">  Jquery</dd>
<dt style="color:green;">Backend Languages</dt>
<dd><i style="color:purple;" class="fa-brands fa-php"></i> PhP</dd>
<dd><img src="icons.png" width="24px" height="40px">  MySql</dd>
</dl>
<div>
<div class="counter">
<div class="box">
<span style="color:white; font-size:4rem;">1+</span>
<h3 style="color:yellow;font-size:2rem;">Years of experience</h3>
</div>
<div class="box">
<spans style="color:white; font-size:4rem;">50+</span>
<h3 style="color:yellow; font-size:2rem">Project completed</h3>
</div>
<div class="box">
<span style="color:white;font-size:4rem;">20+</span>
<h3 style="color:yellow; font-size:2rem;">Order in Queue</h3>
</div>
<div class="box">
<span style="color:white;font-size:4rem;">200+</span>
<h3 style="color:yellow;font-size:2rem;">Happy clients</h3>
</div>
<div class="box">
<span style="color:white;font-size:4rem;">5+</span>
<h3 style="color:yellow;font-size:2rem;">Awards won</h3>
</div>


</div>


</div>








</div>


</div>


</section>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
</body>
</html>