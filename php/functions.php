<?php
function createButton($btnID, $btnStyle, $btnText, $btnName){
    $btn = "<button name='$btnName' class='$btnStyle' id='$btnID' >$btnText</button>";
    echo $btn; 
}
function insertTableHead(){ //to de clutter the main html file
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
    $stmt = $GLOBALS['con']->prepare("INSERT INTO movies (movie_name, movie_actor, movie_director, movie_type, movie_location) VALUES (:movie_name, :movie_actor, :movie_director, :movie_type, :movie_location)");
    $movieName = $_POST['movie_name'];
    $movieActor = $_POST['movie_actor'];
    $movieDirector = $_POST['movie_director'];
    $movieType = $_POST['movie_type'];
    $movieLocation = $_POST['movie_location'];

    $stmt->bindParam(':movie_name', $movieName);
    $stmt->bindParam(':movie_actor', $movieActor);
    $stmt->bindParam(':movie_director', $movieDirector);
    $stmt->bindParam(':movie_type', $movieType);
    $stmt->bindParam(':movie_location', $movieLocation);

  
    
    if($stmt->execute()){
        echo "Movie $movieName successfully added!"; //TODO: better alert messages either alert/modal/ dissapearing message  
    }
    else{
        echo "It didn't work!";
    }
}

function getTable(){ //TODO: make work for movie and show
   return $stmt = $GLOBALS['con']->query("SELECT * FROM movies");
   
}

function getRow($name){
    $stmt = $GLOBALS['con']->prepare("SELECT * FROM movies WHERE movie_name=:movie_name");
    $stmt->bindParam('movie_name', $name);
    $stmt->execute();
    return $stmt->fetch();
    
}

function updateData(){
    $stmt = $GLOBALS['con']->prepare("UPDATE movies SET movie_name=:mName, movie_actor=:mActor, movie_director=:mDirector, movie_type=:mType, movie_location=:mLocation WHERE movie_id =:id");
    $movieID = $_POST['id'];
    $movieName = $_POST['name_update'];
    $movieActor = $_POST['actor_update'];
    $movieDirector = $_POST['director_update'];
    $movieType = $_POST['type_update'];
    $movieLocation = $_POST['location_update'];
    
    $stmt->bindParam('id', $movieID);
    $stmt->bindParam('mName', $movieName);
    $stmt->bindParam('mActor', $movieActor);
    $stmt->bindParam('mDirector', $movieDirector);
    $stmt->bindParam('mType', $movieType);
    $stmt->bindParam('mLocation', $movieLocation);


    if($stmt->execute()){
        echo "Movie $movieName Updated Successfully!"; //TODO: better alert messages either alert/modal/ dissapearing message  
    }
    else{
        echo "something wrong..."; //TODO: learn to try catch errors for more meaningful error messages
    }
}

function deleteData(){
    $stmt = $GLOBALS['con']->prepare("DELETE FROM movies WHERE movie_id=:id");
    $movieID = $_POST['id'];

    $stmt->bindParam('id', $movieID);
    
    if($stmt->execute()){
      echo "Movie Deleted Successfully!";
     }
     else{
     echo "something wrong...";
     }
}
?> 