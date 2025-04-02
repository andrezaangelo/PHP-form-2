<!DOCTYPE html>
<html>
    <body>
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


$ID=$_POST ['ID'];
$NAME=$_POST ['NAME'];
$EMAIL=$_POST ['EMAIL'];

$sql="INSERT INTO userinfo (ID, NAME, EMAIL) VALUES ('$ID', '$NAME', '$EMAIL')";


if($conn->query($sql) ===TRUE)

{
    echo"records inserted";
}

else {
    echo"error: " .$sql. "<br>" .$conn->error;

}

$conn->close();

   ?>
    </body>
    </html>