<!DOCTYPE html>
<html>
    <head>
        <title> Select data </title>
        <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="header">
        <h1> Userinfo Details</h1>
</div>
<?php
$servername="localhost";
$username="root";
$password="";
$database="php";

//create connection
$conn=new mysqli($servername, $username, $password, $database);

//checking connection

if($conn->connect_error)
{
    die("connection failed:" .$conn->connect_error);

}
else { 
    echo"connected to the database <br>";
}

$sql="SELECT * FROM userinfo";

$result = $conn->query($sql);

if($result ->num_rows>0)
{   echo"<table>";
    echo"<tr>";
    echo"<th> USER ID </th>";
    echo"<th> NAME </th>";
    echo"<th> EMAIL </th>";
    echo"</tr>";

    while($row= $result->fetch_assoc()) {
        echo"<tr>";
        echo"<td>" .row["ID"] . "</td>";
        echo"<td>" .row["NAME"] . "</td>";
        echo"<td>" .row["EMAIL"] . "</td>";
        echo"</tr>";

        echo" ID :" .$row["ID"]. "NAME : " .$row["NAME"]. "EMAIL: " .$row["EMAIL"]. "<br>";
    }
}
else {
    echo"0 result found";
}
$conn->close();
?>

</body>
</html>