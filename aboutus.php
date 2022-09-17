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
        body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}
.title {
  color: grey;
}


@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
    </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<meta charset="utf-8">
    <title>VTCBCSR</title>
    <link rel="icon" type="image/x-icon" href="image/logo.png">
    <link rel="stylesheet" href="" />
</head>
<body>
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
</nav>
<div class="about-section">
  <p>We are all had teachers who have inspired us, who have made a difference to our lives. 
    Teachers have the power to make or break lives. 
    A great lesson can inspire a passion for a subject that lasts a lifetime,
     while lacklustre teaching can kill any desire for learning. 
     Teachers who make a significant difference in their student's lives - sometimes against all odds - deserve to be celebrated. The Global Teacher Prize does just that, awarding $1 million to an exceptional teacher who has made an outstanding contribution to their profession.</p>
</div>
<hr>
<h2 style="text-align:center">Our Team</h2>
<br>
<div class="row">
  <div class="col-6">
    <div class="card">
      <img src="image/david.jpg" alt="" style="width:250px ; height:250px;">
      <div class="container">
        <h2>David Calle</h2>
        <p class="title">Maths & Science Teacher</p>
        <p>David is a maths and science teacher based in Madrid. He founded Unicoos to support children’s education beyond the classroom. His website videos have been viewed by more than 30 million students. Unicoos is free to use, so if David were to win the prize he would invest it in expanding the platform, producing more videos in multiple languages, while maintaining free access.</div>
    </div>
  </div>

  <div class="col-6">
    <div class="card">
      <img src="image/raymond.jpg" alt="" style="width:300px ; height:250px;">
      <div class="container">
        <h2>Raymond Chambers - UK</h2>
        <p class="title">Art Director</p>
        <p>When Computer Science graduate Ray began teaching, he found the lessons prepared for students dull and uninspiring. He started developing new software for learning using Microsoft Kinect. He was encouraged by a leap in both engagement and academic achievement from his computing students, so he decided to share this work and best practice with other teachers. </p>
      </div>
    </div>
  </div>
  
  <div class="col-6">
    <div class="card">
      <img src="image/Marie.jpg" alt="" style="width:250px ; height:250px;">
      <div class="container">
        <h2>Marie-Christine Ghanbari Jahromi - Germany</h2>
        <p class="title">Sports Science</p>
        <p>Marie-Christine Ghanbari Jahromi aims to increase the self-esteem, motivation, and empathy of her students, using action-oriented learning methods, such as her Sportpatenproject, which strengthens and encourages children with the help of a sports mentor and physical activities. The participatory and collaborative nature of her sports project has also helped refugee children in Germany (from countries like Iran) integrate more readily into German society.</p>
      </div>
    </div>
  </div>
  <div class="col-6">
    <div class="card">
      <img src="image/ken.jpg" alt="" style="width:250px ; height:250px;">
      <div class="container">
        <h2>Ken Silburn - Australia</h2>
        <p class="title">Science Teacher</p>
        <p>Science teacher Ken was awarded the Prime Minister’s Prize for Secondary Science Teaching in 2015. It’s the highest teaching honour of its type in Australia. Many of Ken’s students have received scholarships to study science at university, and one class was placed first in Australia in their category of the International Science Championships. In his lessons Ken uses a variety of multimedia projects together with integration of wider issues such as environmental science and sustainability.</p>
    </div>
    </div>
  </div>
  &nbsp;&nbsp;
  <footer>
  <center>All Rights Reseverd To VTCBCSR &copy;2022</center>
  </footer>
</div>
</body>
</html>
