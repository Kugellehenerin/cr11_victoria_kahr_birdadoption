<?php
ob_start();
session_start();
require_once 'actions/db_connect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['user' ]) ) {
 header("Location: index.php");
 exit;
}
// select logged-in users details
$res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<!-- Add Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
<title>Welcome - <?php echo $userRow['userEmail' ]; ?></title>

<style type ="text/css">
       .manageUser {
           width : 50%;
           margin: auto;
       }

        table {
           width: 100%;
            margin-top: 20px;
       }

   </style>

</head>
<body >
<!-- Add Navbar -->
<nav class="navbar navbar-light bg-light">
  <ul class="nav">
  <li class="nav-item">
    <a class="navbar-brand" href="../cr11_victoria_kahr_birdadoption/home.php">Bird Adoption</a>
  </li>
  <li class="nav-item">
  <a class="nav-link active" href="general.php">General Birds</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="seniors.php">Seniors Bird</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="birds.php">Admin Panel</a>
  </li>
</ul>
</nav>

<br>
<h3> Hi <?php echo $userRow['userEmail' ]; ?> and welcome to My Blog:</h3>
<br>
<div class="row" id="row">
<br>
    <div class="col-sm-12 col-md-3 col-lg-3">
        <img class="mr-3 img-fluid rounded" src="img/parrot_1.jpg" alt="Generic placeholder image Responsive image" width="300px" height="auto">
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="media-body">
        <br>
            <h5 class="mt-0 mb-1" id="text">Lorem ipsum</h5>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fermentum leo vel orci porta non. Vel turpis nunc eget lorem dolor sed viverra ipsum. Dui ut ornare lectus sit amet est placerat in egestas. Nisl tincidunt eget nullam non nisi est. Turpis egestas maecenas pharetra convallis posuere morbi leo urna. Ornare aenean euismod elementum nisi quis eleifend quam adipiscing. Sapien et ligula ullamcorper malesuada. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Mauris ultrices eros in cursus turpis massa. Euismod in pellentesque massa placerat. Malesuada fames ac turpis egestas integer eget aliquet nibh praesent. In hac habitasse platea dictumst. Pellentesque dignissim enim sit amet venenatis urna. Vitae congue eu consequat ac felis donec et. Cras ornare arcu dui vivamus. Sit amet luctus venenatis lectus magna fringilla urna porttitor rhoncus. Euismod lacinia at quis risus sed vulputate odio ut.
            Consequat mauris nunc congue nisi. Commodo nulla facilisi nullam vehicula ipsum a. Integer enim neque volutpat ac tincidunt vitae. Odio ut enim blandit volutpat maecenas volutpat blandit. Tortor at risus viverra adipiscing at in. Aliquet lectus proin nibh nisl condimentum. Sit amet nulla facilisi morbi tempus iaculis. Blandit massa enim nec dui nunc. Mauris pellentesque pulvinar pellentesque habitant morbi tristique. At volutpat diam ut venenatis tellus in metus vulputate.
        </div>
    </div>
</div>
<br>
<div class="row" id="row">
<br>
    <div class="col-sm-12 col-md-3 col-lg-3">
        <img class="mr-3 img-fluid rounded" src="img/parrot_2.jpg" alt="Generic placeholder image Responsive image" width="300px" height="auto">
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="media-body">
        <br>
            <h5 class="mt-0 mb-1" id="text">Lorem ipsum</h5>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fermentum leo vel orci porta non. Vel turpis nunc eget lorem dolor sed viverra ipsum. Dui ut ornare lectus sit amet est placerat in egestas. Nisl tincidunt eget nullam non nisi est. Turpis egestas maecenas pharetra convallis posuere morbi leo urna. Ornare aenean euismod elementum nisi quis eleifend quam adipiscing. Sapien et ligula ullamcorper malesuada. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Mauris ultrices eros in cursus turpis massa. Euismod in pellentesque massa placerat. Malesuada fames ac turpis egestas integer eget aliquet nibh praesent. In hac habitasse platea dictumst. Pellentesque dignissim enim sit amet venenatis urna. Vitae congue eu consequat ac felis donec et. Cras ornare arcu dui vivamus. Sit amet luctus venenatis lectus magna fringilla urna porttitor rhoncus. Euismod lacinia at quis risus sed vulputate odio ut.
            Consequat mauris nunc congue nisi. Commodo nulla facilisi nullam vehicula ipsum a. Integer enim neque volutpat ac tincidunt vitae. Odio ut enim blandit volutpat maecenas volutpat blandit. Tortor at risus viverra adipiscing at in. Aliquet lectus proin nibh nisl condimentum. Sit amet nulla facilisi morbi tempus iaculis. Blandit massa enim nec dui nunc. Mauris pellentesque pulvinar pellentesque habitant morbi tristique. At volutpat diam ut venenatis tellus in metus vulputate.
        </div>
    </div>
</div>
<br>
<div class="row" id="row">
<br>
    <div class="col-sm-12 col-md-3 col-lg-3">
        <img class="mr-3 img-fluid rounded" src="img/parrot_3.jpg" alt="Generic placeholder image Responsive image" width="300px" height="auto">
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="media-body">
        <br>
            <h5 class="mt-0 mb-1" id="text">Lorem ipsum</h5>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fermentum leo vel orci porta non. Vel turpis nunc eget lorem dolor sed viverra ipsum. Dui ut ornare lectus sit amet est placerat in egestas. Nisl tincidunt eget nullam non nisi est. Turpis egestas maecenas pharetra convallis posuere morbi leo urna. Ornare aenean euismod elementum nisi quis eleifend quam adipiscing. Sapien et ligula ullamcorper malesuada. Vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Mauris ultrices eros in cursus turpis massa. Euismod in pellentesque massa placerat. Malesuada fames ac turpis egestas integer eget aliquet nibh praesent. In hac habitasse platea dictumst. Pellentesque dignissim enim sit amet venenatis urna. Vitae congue eu consequat ac felis donec et. Cras ornare arcu dui vivamus. Sit amet luctus venenatis lectus magna fringilla urna porttitor rhoncus. Euismod lacinia at quis risus sed vulputate odio ut.
            Consequat mauris nunc congue nisi. Commodo nulla facilisi nullam vehicula ipsum a. Integer enim neque volutpat ac tincidunt vitae. Odio ut enim blandit volutpat maecenas volutpat blandit. Tortor at risus viverra adipiscing at in. Aliquet lectus proin nibh nisl condimentum. Sit amet nulla facilisi morbi tempus iaculis. Blandit massa enim nec dui nunc. Mauris pellentesque pulvinar pellentesque habitant morbi tristique. At volutpat diam ut venenatis tellus in metus vulputate.</div>
    </div>
</div>
<br>
<!-- Add Footer-Navbar -->
<nav class="navbar navbar-light bg-dark">
<ul class="nav">
</ul>
<a href="logout.php?logout"><button type="button">Sign Out</button></a>
</nav>
</body>
</html>
<?php ob_end_flush(); ?>