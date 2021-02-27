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
    <title>Database</title>
</head>
<body>
<!-- header -->
<?php include 'header.php'; ?>

<main>
<div class="d-flex">
<form action="" method="post">
<?php createButton("btn-create","btn btn-success", "Add Movie", "create")?>
<?php createButton("btn-create", "btn btn-primary", "Request Table", "request")?>
<?php createButton("btn-create", "btn btn-warning", "Update Table", "update")?>
<?php createButton("btn-create", "btn btn-danger", "Delete Table", "delete")?>
</form>
</div>
<?php
//TODO: create function to check this process rather than repeat the code
if(isset($_POST['create'])){
    ?>
<div style="display: block">
<?php
}else {
?>
<div style="display: none">
<?php
}
?>
<form action="" method="post">
    <input type="text" name ="movie_name" autocomplete="off" placeholder="Enter Movie Name" required autofocus> <br>
    <input type="text" name="movie_actor" autocomplete="off" placeholder="Enter Star Actor Name" required autofocus> <br>
    <input type="text" name="movie_director" autocomplete="off" placeholder="Enter Director Name" required autofocus> <br>
    <input type="text" name="movie_type" autocomplete="off" placeholder="Enter Movie Genre" required autofocus> <br>
    <input type="text" name="movie_location" autocomplete="off" placeholder="Enter Movie Location" required autofocus> <br>
    <?php createButton("btn-create","btn btn-success", "Submit", "submitAdd")?>
    </form>
</div>

<?php
if(isset($_POST['request'])){
    ?>
<div style="display: block">
<?php
}else {
?>
<div style="display: none">
<?php
}
?>
 <!-- Bootstrap Table -->
 <div class="d-flex table-data">
 <table class="table">
 <thead class="thead-dark">
 <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Actor</th>
    <th>Director</th>
    <th>Genre</th>
    <th>Location</th>
</tr>
 </thead>
 <tbody>
 <?php
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
</main>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>