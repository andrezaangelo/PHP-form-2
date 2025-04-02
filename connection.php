<?php

$servername="localhost";
$username="root";
$password="";
$database="php";

//create connection

$conn= new mysqli($servername,$username, $password, $database);

//checking connection
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
else
{
    echo"Connection Succesfully";
}


//create table
$sql="create table userinfo(ID, int, NAME varchar(30), email varchar(30))";
if ($conn->query($sql)===TRUE)
{
    echo"userinfo created succesfully";
}

else {
    echo"error creating userinfo: " .$conn->error;

}




//create Database
$sql="create database php";

//Checking

if ($conn->query($sql)===TRUE)
{
    echo"Database php created succesfully";
}

else {
    echo"error creating database: " .$conn->error;

}

$conn->close();

?>