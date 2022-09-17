<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
        footer{
        width:100%;
        background: #40b7e3;
        height: 40px;
        padding: 10px 10px 0px 10px;
    }
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.fade {
  animation-name: fade;
  animation-duration: 2s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
h2{
  font-family: 'Times New Roman', Times, serif;
  top:9px;
  position: relative;
}
    </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<meta charset="utf-8">
    <title>VTCBCSR</title>
    <link rel="icon" type="image/x-icon" href="image/logo.png">
</head>
<body>
 <table align="center">
    <tr>
      <td><img src="image/logo.png" height="70"></td>
      <td><h2>VIDHYABHARTI TRUST COLLEGE OF BUSINESS,COMPUTER SCIENCE & RESEARCH</h2></td>
    </tr>
    </table>
    <div class="form">
    <nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contactus.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="faculty/add.html">Faculty</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="faculty/index.php">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Department
			  </a>
			  <ul class="dropdown-menu">
				<li><a class="dropdown-item" href="#">BCA</a></li>
				<li><a class="dropdown-item" href="#">BBA</a></li>
				<li><hr class="dropdown-divider"></li>
				<li><a class="dropdown-item" href="#">MCA</a></li>
				<li><a class="dropdown-item" href="#">MBA</a></li>
			  </ul>
			</li>
      </ul>
      <img src="image/logout.png" class="nav-link"  href="logout.php" width="15" height="15">&nbsp;
         <a class="nav-link fs-6 mb-1"  href="logout.php" >Logout</a>
    </div>
  </div>
</nav><br>
<div class="slideshow-container">
<div class="mySlides fade">
  <img src="image/v1.jpg">
</div>
<div class="mySlides fade">
  <img src="image/v2.jpg">
</div>
<div class="mySlides fade">
  <img src="image/v5.jpg">
</div>

</div>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); 
}
</script>
<div style="margin:60px ;">
  <p style="line-height: 2.0; font-size:20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et magnis dis parturient montes 
  nascetur ridiculus mus. Purus semper eget duis at tellus at urna condimentum mattis. Turpis in eu mi 
  bibendum neque egestas. Rhoncus dolor purus non enim praesent elementum facilisis. Ipsum nunc aliquet 
  bibendum enim facilisis gravida. Cursus turpis sa tincidunt dui ut ornare lectus. Enim nec dui nunc 
  mattis enim ut. Sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur. Tussa 
  ultricies mi quis hendrerit dolor magna. Elit eget gravida cum sociis natoque penatibus et magnis 
  dis. Enim tortor at auctor urna nunc id cursus metus.</p>
  </div><br>
<div style="height:600px; margin:100px;">
<img src="image/unplash1.jpg" style="height:600px; margin:100px; float: left;" ><br><br><br>
  <h1>Liabrary</h1>
  <p style="line-height: 2.0; font-size:20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et magnis dis parturient montes 
  nascetur ridiculus mus. Purus semper eget duis at tellus at urna condimentum mattis. Turpis in eu mi 
  bibendum neque egestas. Rhoncus dolor purus non enim praesent elementum facilisis. Ipsum nunc aliquet 
  bibendum enim facilisis gravida. Cursus turpis sa tincidunt dui ut ornare lectus. Enim nec dui nunc 
  mattis enim ut. Sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur. Tussa 
  ultricies mi quis hendrerit dolor magna. Elit eget gravida cum sociis natoque penatibus et magnis 
  dis. Enim tortor at auctor urna nunc id cursus metus.</p>
</div><br><br><br><br><br><br><br><br><br><br>
<div>
<footer>
  <center>All Rights Reseverd To VTCBCSR &copy;2022</center>
  </footer>
</div>
</body>
</html>
