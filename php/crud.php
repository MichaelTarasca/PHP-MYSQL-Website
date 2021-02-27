<?php
require_once("db.php");
require_once("functions.php");

//catch connection to database

$con = createDB();

// add data when  create data->submit is clicked

if(isset($_POST['submitAdd'])){
    createData();
}

if((isset($_POST['submitUpdate']))){
    updateData();
}
if((isset($_POST['deleteMovie']))){
    deleteData();
}
?>