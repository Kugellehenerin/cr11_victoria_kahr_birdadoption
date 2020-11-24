<?php 
ob_start();
session_start();
require_once '../helper/helper.php';

if (isAdmin()) {
    echo "Hello admin and welcome to your admin panel!";
} else {
    die('No Admin ;) Back to home: <a href="../cr11_victoria_kahr_birdadoption/home.php">Bird Adoption</a>');
}

require_once 'db_connect.php';

?>
<!DOCTYPE html>
<html>
<head>
<!-- Add Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
   <title>Birdadoption Add Birds</title>

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
<body>
<!-- Add Navbar -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="../cr11_victoria_kahr_birdadoption/birds.php">Bird Adoption</a>
  <a href= "create.php"><button type="button" >Add Bird</button></a>
</nav>

<?php 

if ($_POST) {
   $img = $_POST['bird_img'];
   $breed = $_POST['bird_breed'];
   $name = $_POST['bird_name'];
   $age = $_POST[ 'bird_age'];
   $des = $_POST[ 'bird_description'];

   $sql = "INSERT INTO birds (bird_img, bird_breed, bird_name, bird_age, bird_description) VALUES ('$img', '$breed', '$name', '$age','$des')";
    if($conn->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../birds.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $conn->conn_error;
   }

   $conn->close();
}
?>
</body>
</html>