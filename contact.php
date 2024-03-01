<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
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
width:40%;
}
.contact .row{
    display:flex;
    align-items:center;
    justify-content:center;
    flex-wrap:wrap;
}
.contact .row .content{
flex:1 1 30rem;
padding:4rem;
padding-bottom:0;
}
.contact .row form{
flex:1 1 45rem;
padding:2rem;
margin:2rem;
margin-bottom:4rem;

}
.contact .row form .box{
padding:1.5rem;
margin:1rem 0;
background-color:black;
color:yellow;
transform:none;
font-size:1.7rem;
width:100%;
}
.contact .row form .message{
height:13rem;
resize:none;
background-color:black;
color:yellow;
}
.contact .row .content .title{
text-transform:uppercase;
color:darkblue;
font-size:3rem;
padding-bottom:2rem;
}
.contact .row .content .info h3{
display:flex;
align-items:center;
font-size:1rem;
color:black;
padding:1rem 0;
font-weight:normal;

}
.contact .row .content .info h3 i{
padding-right:1rem;
color:crimson;

}
.contact .row form .box::placeholder{
text-transform:capitalize;
color:crimson;
}
.btn:hover{
    color:crimson;
    baclground:yellow;
}
textarea::placeholder{
  color:crimson;
  text-transform:capitalize;
}
@media (max-width:550px) {
  .contact .row form .box{
  align-items:center;
  padding:1.5rem;
margin:1rem 0;
background-color:black;
color:yellow;
transform:none;
font-size:1.5rem;
width:130%;
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
<section class="contact" id="contact">
<h1 class="heading"><span>Contact </span>me</h1>
<div class="row">
<div class="content">
<img src="logo.png" width="50%" height="200px;" alt="">    
   
<h3 class="title">Contact info</h3>   
<div class="info">
<h3><i class="fa-solid fa-envelope"></i> refdwq786@gmail.com</h3>
<h3><i class="fa-solid fa-phone"></i>0308-6486742</h3>
<h3><i class="fa-solid fa-location-dot"></i>Lahore , pakistan</h3>


</div>
</div>
<form id="registrationForm" class="form" action="contact.php" method="POST" enctype="multipart/form-data">

<input type="text" placeholder="name" name="name" required class="box">
<input type="email" placeholder="email" name="email" required class="box">
<input type="text" placeholder="project" name="project" required class="box">
<textarea style="background-color:black; color:yellow;" required name="message" id="" cols="90" rows="5" class="box-message" placeholder="Message"></textarea><br>
<button type="submit" name="submit" class="btn"> send <i class="fa-solid fa-paper-plane"></i></button>

</form>

</div>
</section>
<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="form3";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
 //echo "connected successfuly";
}
?>

<?php



      
if(isset($_POST['submit']))
{
    //echo "hello world";
  $name=$_POST['name'];
  
  $email=$_POST['email'];
  $project=$_POST['project'];
  $message=$_POST['message'];
  $create_query = "INSERT INTO portfolio (`id`,`name`, `email`, `project`,`message`) VALUES (Null,'$name','$email','$project','$message')";
  $query_run = mysqli_query($conn, $create_query);
  //echo"$query_run";
 if($query_run){
    echo "RUN";
 }
 else{
    echo "not display";
 }
}












?>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 
</body>
</html>