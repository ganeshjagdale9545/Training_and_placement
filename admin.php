<?php

$u=$_GET['u'];
$p=$_GET['p'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tandp";


    // Create connection
    $conn = new mysqli($servername , $username , $password , $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM admint where user='$u'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $passt=$row["pass"] ;
    }
if($p==$passt)
{
echo "<style onload=\"parent.admin()\"></style>";
}
else
{
echo "<style onload=\"parent.ivp()\"></style>";
}
}
 else {
    echo "<style onload=\"parent.ivu()\"></style>";
}
$conn->close();


?>