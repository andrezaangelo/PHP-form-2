<!DOCTYPE html>
    <head>
        <title> Select data </title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1> Userinfo Details</h1>
</div>
<?php
require "connection.php";
//$sql="update userinfo set NAME='user1' where ID=1101 "; update query

//$sql="delete from userinfo where ID="1106"; delete query

if($conn->query($sql)===TRUE)
{
    echo"record updated";
}
else{
    echo"error";
}

$conn->close();
?>
</body>
</html>
