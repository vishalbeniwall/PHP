<?php
include 'database.php';
$customerObj = new database();
if(isset($_GET['deleteId']) && !empty($_GET['deleteId']))
{
$deleteId = $_GET['deleteId'];
$customerObj->deleteRecord($deleteId);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Profile Page</title>
<meta name="description" content="Assignment 3">
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
<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
<div class="bd-example">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="./img/instagram.jpg" class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block">
<h5>Instgarm</h5>
<p>Instagram is a photo and video sharing social networking service owned by American company Meta Platforms. The app allows users to upload media that can be edited with filters and organized by hashtags and geographical tagging. Posts can be shared publicly or with preapproved followers. Users can browse other users' content by tag and location, view trending content, like photos, and follow other users to add their content to a personal feed.</p>
</div>
</div>
<div class="carousel-item">
<img src="./img/Influ.jpg" class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block">
<h5>How to make money from Instgram</h5>
<p>Genzio connects top-level influencers  with companies looking to create engaging online communities around their products. Our Influencers  have generated followings on Twitter, Discord, Instagram, Twitch, and more.  Highlighted here are a few of our key influencers. </p>
</div>
</div>
<div class="carousel-item">
<img src="./img/founders.jpg" class="d-block w-100" alt="...">
<div class="carousel-caption d-none d-md-block">
<h5>Founders</h5>
<p>Michel Krieger (born March 4, 1986) is a Brazilian-American entrepreneur and software engineer who co-founded Instagram along with Kevin Systrom, and served as its CTO. Instagram expanded from a few million users to 1 billion monthly active users while Krieger served as CTO.</p>
</div>
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>
<br>
<div  class="heading">
<h3>Instgram Top Features</h3>
</div>
<section class="down">
<div class="card-group">
<div class="card">
<img src="./img/reels.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">Instagram Reels</h5>
<p class="card-text">Reels are entertaining, immersive videos where you can creatively express your brand story, educate your audience, and get discovered by people who may love your business.People come to Reels to participate in cultural trends, collaborate with the community and discover new ideas. With creative tools like effects, music, and stickers, your business can create entertaining videos that inspire your audience.</p>
<p class="card-text"><small class="text-muted">STAY TUNED FOR MORE UPDATES</small></p>
</div>
</div>
<div class="card">
<img src="./img/story.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">Instagram Stories</h5>
<p class="card-text">Instagram Story feature was built to help brands share quick photos and videos with their followers to highlight what makes them unique. Plus, Stories give your audience a small peek into what goes on behind the scenes—and followers love that.</p>
<p class="card-text"><small class="text-muted"></small>STAY TUNED FOR MORE UPDATES</p>
</div>
</div>
<div class="card">
<img src="./img/iigtv.jpg" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title">IGTV</h5>
<p class="card-text">Introduce Instagram Video which brings audiences closer to the creators they love. We are re-envisioning mobile video with a new standalone surface that features longer videos and easy discoverability through channels, all in a vertical format that sits upright, in the palm of your hand.</p>
<p class="card-text"><small class="text-muted">STAY TUNED FOR MORE UPDATES</small></p>
</div>
</div>
</section>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<main class="container">
<?php
if (isset($_GET['msg1']) == "insert")
{
echo "<div class='alert alert-success alert-dismissible'>
<button type='button' class='close' data-dismiss='alert'>×</button>
Your Registration added successfully
</div>";
}
if (isset($_GET['msg2']) == "update")
{
echo "<div class='alert alert-success alert-dismissible'>
<button type='button' class='close' data-dismiss='alert'>×</button>
Your Registration updated successfully
</div>";
}
if (isset($_GET['msg3']) == "delete")
{
echo "<div class='alert alert-success alert-dismissible'>
<button type='button' class='close' data-dismiss='alert'>×</button>
Record deleted successfully
</div>";
}
?>
<section>
<h2>Add Information Here
<a href="add.php" style="float:right;"><button class="btn btn-success"><i class="fas fa-plus"></i></button></a>
</h2>
<table class="table table-hover table-dark table-striped">
<thead>
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Bio</th>
</tr>
</thead>
<tbody>
<?php
$login = $customerObj->displayData();
foreach ($login as $customer)
{
?>
<tr>
<td><?php echo $customer['id'] ?></td>
<td><?php echo $customer['name'] ?></td>
<td><?php echo $customer['email'] ?></td>
<td><?php echo $customer['bio'] ?></td>
<td>
<button class="btn btn-primary mr-2"><a href="edit.php?editId=<?php echo $login['id'] ?>">
<i class="fa fa-pencil text-white" aria-hidden="true"></i></a></button>
<button class="btn btn-danger"><a href="index.php?deleteId=<?php echo $login['id'] ?>" onclick="Are you really want to delete this record')">
<i class="fa fa-trash text-white" aria-hidden="true"></i>
</a></button>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</section>
</main>
<footer class="text-center text-lg-start" style="background-color: #ffffff;">
</footer>
</body>
</html>
