<?php
$username  =   "root";
$passDB     =   "";
$host       =   "127.0.0.1";
$database   =   "hasnur";
$connect = mysqli_connect ($host, $username, $passDB, $database);
if(!$connect){
    echo "Error connecting to database".$database;
}?>