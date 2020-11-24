<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM birds WHERE id = {$id}" ;
   $result = $conn->query($sql);

   $data = $result->fetch_assoc();

   $conn->close();

?>

<!DOCTYPE html>
<html>
<head>
<!-- Add Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
   <title >Edit Bird</title>

   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 20px;
       }
   </style>

</head>
<body>
<!-- Add Navbar -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="../cr11_victoria_kahr_birdadoption/birds.php">Bird Adoption</a>
  <a href= "create.php"><button type="button" >Add Bird</button></a>
</nav>

<fieldset>
   <legend>Update Bird</legend>

   <form action="actions/a_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
            <tr>
               <th>Image</th >
               <td><input  type="text" name="bird_img"  placeholder="Image" value="<?php echo $data['bird_img'] ?>"/></td >
           </tr> 
           <tr>
               <th>Breed</th>
               <td><input type="text"  name="bird_breed" placeholder ="Breed" value="<?php echo $data['bird_breed'] ?>"/></td>
           </tr >    
           <tr>
               <th>Name</th>
               <td><input type= "text" name="bird_name"  placeholder="Name" value ="<?php echo $data['bird_name'] ?>"/></td >
           </tr>
           <tr>
               <th>Age</th>
               <td><input type ="text" name= "bird_age" placeholder= "Age" value= "<?php echo $data['bird_age'] ?>"/></td>
           </tr>
           <tr>
               <th>Description</th>
               <td><input type ="text" name= "bird_description" placeholder= "Description" value= "<?php echo $data['bird_description'] ?>"/></td>
           </tr>
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['id']?>"/>
               <td><button type= "submit">Save Changes</button ></td>
               <td><a href= "birds.php"><button type="button" >Back</button></a></td >
           </tr>
       </table>
   </form>

</fieldset>

</body>
</html>

<?php
}
?>