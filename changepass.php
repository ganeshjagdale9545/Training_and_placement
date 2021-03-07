<?php
$op = $_GET['op'];
$p = $_GET['p'];
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
    $sql = "SELECT * FROM admint where pass='$op'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
     {
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "UPDATE admint SET pass='$p' WHERE user='admin'";

if ($conn->query($sql) === TRUE) {
    echo "<style onload=\"parent.pcs()\"></style>";
} else {
    echo "Error updating record: " . $conn->error;
}
    }
else
{
    echo "<style onload=\"parent.ivp()\"></style>";
}

?>