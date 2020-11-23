<?php require_once 'actions/db_connect.php';?>

<!DOCTYPE html>
<html>
<head>
<!-- Add Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
   <title>General</title>

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
<h3>General Bird Page:</h3>

<div class ="manageBirds table">
   <table  border="1" cellspacing= "0" cellpadding="0">
       <thead class="thead-dark">
           <tr>
               <th>Image</th>
               <th>Breed</th>
               <th>Name</th>
               <th>Age</th>
               <th>Description</th>
           </tr>
       </thead>
       <tbody>
       <?php
           $sql = "SELECT * FROM `birds` WHERE bird_age < 41";
           $result = $conn->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                   <td><img src='" . $row['bird_img'] . "' /></td>
                   <td>" .$row['bird_breed']."</td>
                   <td>" .$row['bird_name']."</td>
                   <td>" .$row['bird_age']."</td>
                   <td>" .$row['bird_description']."</td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>
       </tbody>
   </table>
</div>
<!-- Add Footer-Navbar -->
<nav class="navbar navbar-light bg-dark">
<ul class="nav">
</ul>
<a href="logout.php?logout"><button type="button">Sign Out</button></a>
</nav>
</body>
</html>