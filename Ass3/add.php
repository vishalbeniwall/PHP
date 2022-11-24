<?php
include 'database.php';
$customerObj = new database();
if(isset($_POST['submit']))
{
$customerObj->insertData($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Instgram</title>
<meta name="description" content="Assignment3">
<meta name="robots" content="noindex, nofollow">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">
<img src="./img/insta.png" width="60" height="50" alt="">
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item active">
<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">About</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Contact us</a>
</li>
</ul>
</div>
</nav>
<header>
<h1> Sign Up or Login in Instgram</h1>
</header>
<section class="container">
<div class="row">
<div class="col-md-5 mx-auto">
<div class="card">
<div class="card-header bg-dark text-white">
<h2>Insert Information</h2>
</div>
<div class="card-body bg-light">
<form action="add.php" method="POST">
<div class="form-group">
<label for="name">Name:</label>
<input type="text" class="form-control" name="name" placeholder="Enter name" required="">
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="email" class="form-control" name="email" placeholder="Enter email" required="">
</div>
<div class="form-group">
<label for="bio">Bio</label>
<input type="text" class="form-control" name="bio" placeholder="Enter bio" required="">
</div>
<input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="Submit">
</form>
</div>
</div>
</div>
</div>
</section>
<footer class="text-center text-lg-start" style="background-color: #ffffff;">
</footer>
</body>
</html>
