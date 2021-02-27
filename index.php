<?php
    require_once("../database/php/functions.php");
    require_once("../database/php/crud.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!-- Bootstap icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="style.css">
    <title>Database</title>
</head>

<body>

<?php include 'header.php'; ?>

<main>
<!-- BUTTONS -->
<div class="d-flex justify-content-center mt-5em ">
  <form action="" method="post">
    <?php createButton("btn-create","btn btn-dark fs-2", "Add Movie", "create")?>
    <?php createButton("btn-create", "btn btn-dark fs-2", "Request Table", "request")?>
    <?php createButton("btn-create", "btn btn-dark fs-2", "Update Table", "update")?>
    <?php createButton("btn-create", "btn btn-dark fs-2", "Delete Table", "delete")?>
  </form>
</div>
<!-- ADD MOVIE -->
<?php
//TODO: create function to check this process rather than repeat the code
  if(isset($_POST['create'])){
    ?>
<div class="d-flex justify-content-center p-2" style="display: block">
  <?php
  }else {
  ?>
<div style="display: none">
  <?php
  }
  ?>
  <form action="" method="post"> 
      <input type="text" class="form-control" name ="movie_name" autocomplete="off" placeholder="Enter Movie Name" required autofocus> <br>
      <input type="text" class="form-control" name="movie_actor" autocomplete="off" placeholder="Enter Star Actor Name" required autofocus> <br>
      <input type="text" class="form-control" name="movie_director" autocomplete="off" placeholder="Enter Director Name" required autofocus> <br>
      <input type="text" class="form-control" name="movie_type" autocomplete="off" placeholder="Enter Movie Genre" required autofocus> <br>
      <input type="text" class="form-control" name="movie_location" autocomplete="off" placeholder="Enter Movie Location" required autofocus> <br>
      <?php createButton("btn-create","btn btn-success", "Submit", "submitAdd")?>
    </form>
</div>
<!-- DISPLAY DATA -->
  <?php
  if(isset($_POST['request'])){
    ?>
<div class="d-flex justify-content-center" style="display: block">
  <?php
  }else {
  ?>
<div style="display: none">
  <?php
  }
  ?>
 <div class="d-flex table-data justify-content-center w-50">
 <table class="table table-dark">
 <?php insertTableHead(); ?>
 <tbody>
 <?php
  $result = getTable();
  if($result){

    while($row=mysqli_fetch_assoc($result)){?>
    <tr>
    <td><?php echo $row['movie_id'];?></td> <!-- TO DO: make this into a function that works for shows and movies -->
    <td><?php echo $row['movie_name'];?></td>
    <td><?php echo $row['movie_actor'];?></td>
    <td><?php echo $row['movie_director'];?></td>
    <td><?php echo $row['movie_type'];?></td>
    <td><?php echo $row['movie_location'];?></td>
    </tr>
    <?php
    }
  }
 ?>
 </tbody>
 </table>
 </div>
 </div>

 <!-- Update Existing Entry -->
 <?php
//TODO: create function to check this process rather than repeat the code
if(isset($_POST['update'])){
    ?>
    <div class="d-flex"  style="display: block">
<?php
}else {
?>
    <div style="display: none">
<?php
}
?>
<form action="" method="post">
<input type="text" name="name_update"autocomplete="off" placeholder="Enter Movie Name" required autofocus > <br>
<?php createButton("btn-create","btn btn-warning", "Submit", "fetchUpdate")?> <br>
</form>
</div>
<div class="container justify-content-center">
<?php
if((isset($_POST['fetchUpdate']))){
    $name = $_POST['name_update'];
    $tableRow = mysqli_fetch_assoc(getRow($_POST['name_update']));
    if ($tableRow){
?>
<table class="table">
<?php insertTableHead(); ?>
<tbody>
<tr>
    <td><?php echo $tableRow['movie_id'];?></td> <!-- TO DO: make this into a function that works for shows and movies -->
    <td><?php echo $tableRow['movie_name'];?></td>
    <td><?php echo $tableRow['movie_actor'];?></td>
    <td><?php echo $tableRow['movie_director'];?></td>
    <td><?php echo $tableRow['movie_type'];?></td>
    <td><?php echo $tableRow['movie_location'];?></td>
</tbody>
</tr>
</table>
<div class="container-sm">
  <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $tableRow['movie_id']; ?>">
    Current Name: <?php echo $tableRow['movie_name'];?> <br>
    <input type="text"  class="form-control" name="name_update"autocomplete="off" placeholder="Enter New Movie Name" required autofocus> 
    Current Actor: <?php echo $tableRow['movie_actor'];?> <br>
    <input type="text"  class="form-control" name="actor_update"autocomplete="off" placeholder="Enter New Actor Name" required autofocus> 
    Current Director: <?php echo $tableRow['movie_director'];?> <br>
    <input type="text"  class="form-control" name="director_update"autocomplete="off" placeholder="Enter New Director Name" required autofocus>
    Current Genre: <?php echo $tableRow['movie_type'];?> <br>
    <input type="text"  class="form-control" name="type_update"autocomplete="off" placeholder="Enter New Genre" required autofocus> 
    Current Location: <?php echo $tableRow['movie_location'];?> <br>
    <input type="text"  class="form-control" name="location_update"autocomplete="off" placeholder="Enter New Location" required autofocus> 
    <?php createButton("btn-create","btn btn-warning", "Submit", "submitUpdate")?> <br>
  </form>
</div>
<?php
    }else{
        echo "Movie no existo";
    }
}
?>
</div>
<!-- Delete Entry -->
<?php
//TODO: create function to check this process rather than repeat the code
if(isset($_POST['delete'])){
    ?>
    <div class="d-flex" style="display: block">
<?php
}else {
?>
    <div style="display: none">
<?php
}
?>
<form action="" method="post">
<input type="text" name="name_update"autocomplete="off" placeholder="Enter Movie Name" required autofocus > <br>
<?php createButton("btn-create","btn btn-danger", "Submit", "fetchDelete")?> <br>
</form>
</div>
<div>
<?php
if((isset($_POST['fetchDelete']))){
    $name = $_POST['name_update'];
    $tableRow = mysqli_fetch_assoc(getRow($_POST['name_update']));
    if ($tableRow){
?>
<div class="container">
<table class="table">
<?php insertTableHead(); ?>
  <tbody>
      <tr>
        <td><?php echo $tableRow['movie_id'];?></td> <!-- TO DO: make this into a function that works for shows and movies -->
        <td><?php echo $tableRow['movie_name'];?></td>
        <td><?php echo $tableRow['movie_actor'];?></td>
        <td><?php echo $tableRow['movie_director'];?></td>
        <td><?php echo $tableRow['movie_type'];?></td>
        <td><?php echo $tableRow['movie_location'];?></td>
      </tr>
    </tbody>
  </table>
</div>
<div class="container pl-4">
  <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $tableRow['movie_id']; ?>">
    Are you Sure? <?php createButton("btn-create","btn btn-danger", "Yes", "deleteMovie");?>
    <?php createButton("btn-create","btn btn-warning", "No", "");?> <br> <!-- should link back to base page -->
  </form>
<?php
    }else{
        echo "Movie no existo";
    }
}  
?>
</div>
</div>
</main>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>