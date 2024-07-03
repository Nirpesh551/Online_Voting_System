<?php
$con=mysqli_connect("localhost","root","","ovs");
if($con)
{
    echo"connection succesful";
}else{
    die(mysqli_error($con));
}



/*
$host="localhost";
$databaseName="ovs";
$username = "root";
$password = "";
$dsn="mysql:host=$host;dbname=$databaseName";
$databaseConnection=new PDO($dsn,$username,$password);*/
?>