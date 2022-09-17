<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
        #footer {
            position: fixed;
            padding: 10px 10px 0px 10px;
            bottom: 0;
            width: 100%;
            height: 40px;
            background: #40b7e3;
        }
    </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<meta charset="utf-8">
    <title>VTCBCSR</title>
    <link rel="icon" type="image/x-icon" href="image/logo.png">
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
    </div>
    <div class="container mt-4">
<h3>Contact Us</h3>
<hr>
<form action="" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">First Name</label>
      <input type="text" class="form-control" name="fname" id="inputEmail4" placeholder="first name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Last Name</label>
      <input type="password" class="form-control" name ="lname" id="inputPassword4" placeholder="last name">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>India</option>
      </select>
    </div>
    Subject<br>
  <textarea placeholder="Write Something..." style="height: 150px ;width:500px;"></textarea>   
  </div>
  <div class="form-group">
 <hr>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div id="footer">
      <center>All Rights Reseverd To VTCBCSR &copy;2022</center>
    </div>
</body>
</html>
