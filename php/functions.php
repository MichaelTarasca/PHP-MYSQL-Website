<?php
function createButton($btnID, $btnStyle, $btnText, $btnName){
    $btn = "<button name='$btnName' class='$btnStyle' id='$btnID' >$btnText</button>";
    echo $btn; 
}
function insertTableHead(){
    ?>
    <thead class="thead-dark justify-content-center">
    <tr>
       <th>ID</th>
       <th>Name</th>
       <th>Actor</th>
       <th>Director</th>
       <th>Genre</th>
       <th>Location</th>
   </tr>
   </thead>
   <?php
}

function createData(){ // TODO: make this one function work for either movie or show
    $movieName = filter_var($_POST['movie_name'], FILTER_SANITIZE_STRING);
    $movieActor = filter_var($_POST['movie_actor'], FILTER_SANITIZE_STRING);
    $movieDirector = filter_var($_POST['movie_director'], FILTER_SANITIZE_STRING);
    $movieType = filter_var($_POST['movie_type'], FILTER_SANITIZE_STRING);
    $movieLocation = filter_var($_POST['movie_location'], FILTER_SANITIZE_STRING);


    $sql = "INSERT INTO movies (movie_name, movie_actor, movie_director, movie_type, movie_location)
    VALUES('$movieName', '$movieActor', '$movieDirector', '$movieType', '$movieLocation') ";
    if(mysqli_query($GLOBALS['con'], $sql)){
        echo "Movie $movieName successfully added!"; //TODO: better alert messages either alert/modal/ dissapearing message
    }
    else{
        echo "It didnt work!";
    }
}

function getTable(){ //TODO: make work for movie and show
    $sql = "SELECT * FROM movies";
    return $result = mysqli_query($GLOBALS['con'], $sql);
}

function getRow($name){
    $sql = "SELECT * FROM movies WHERE movie_name = '$name'";
    return $result = mysqli_query($GLOBALS['con'], $sql);
}

function updateData(){
    $movieID = $_POST['id'];
    $movieName = filter_var($_POST['name_update'], FILTER_SANITIZE_STRING);
    $movieActor = filter_var($_POST['actor_update'], FILTER_SANITIZE_STRING);
    $movieDirector = filter_var($_POST['director_update'], FILTER_SANITIZE_STRING);
    $movieType = filter_var($_POST['type_update'], FILTER_SANITIZE_STRING);
    $movieLocation = filter_var($_POST['location_update'], FILTER_SANITIZE_STRING);
    $sql = "UPDATE movies SET movie_name='$movieName', movie_actor='$movieActor', movie_director='$movieDirector', movie_type='$movieType', movie_location='$movieLocation' WHERE movie_id = $movieID";
    if(mysqli_query($GLOBALS['con'], $sql)){
        echo "Movie Updated Successfully!";
    }
    else{
        echo $movieID;
        echo "something wrong...";
    }
}

function deleteData(){
    $movieID = $_POST['id'];
    $sql = "DELETE FROM movies WHERE movie_id= $movieID";
    if(mysqli_query($GLOBALS['con'], $sql)){
        echo "Movie Deleted Successfully!";
    }
    else{
        echo $movieID;
        echo "something wrong...";
    }
}
?> 