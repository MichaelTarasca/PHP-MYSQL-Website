<?php
function createDB(){ // for creating database + table and establishing connection to DB
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "media";
//connect to mysql server
    //return $con = mysqli_connect($serverName, $userName, $password, $dbName);
   
   return $con = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//check if connection fails
//     if (!$con){
//         die("Connection Failed:".mysqli_connect_error());
//     }
//     $sql = "CREATE DATABASE IF NOT EXISTS $dbName";
// //run command on connection
//     if(mysqli_query($con, $sql)){
//         $con = mysqli_connect($serverName, $userName, $password, $dbName);
//        //create table here
//        $sql = "CREATE TABLE IF NOT EXISTS movies(
//             movie_id INT(11)NOT NULL AUTO_INCREMENT PRIMARY KEY,
//             movie_name VARCHAR(25) NOT NULL,
//             movie_actor VARCHAR(25),
//             movie_director VARCHAR(25),
//             movie_type VARCHAR(25) NOT NULL,
//             movie_location VARCHAR(25) NOT NULL
//             );
//             ";
//             //check if table created correctly and return the connection
//             if(mysqli_query($con,$sql)){
//                 return $con;
//             }else{
//                 echo "Cannot Create Table.";
//             }   
//     }
//     else {
//         echo "ERROR:".mysqli_error($con);
//     }
}
?>