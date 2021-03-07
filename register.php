<?php
$q=$_GET['q'];
$s=$_GET['s'];
$c=$_GET['c'];
$n=$_GET['n'];
$e=$_GET['e'];
$m=$_GET['m'];
$s1=$_GET['s1'];
$s2=$_GET['s2'];
$s3=$_GET['s3'];
$c1=$_GET['c1'];
$c2=$_GET['c2'];
$c3=$_GET['c3'];
$tm=$_GET['tm'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tandp";
switch($q){
    case "Post Graduate":
        $pm=$_GET['pm'];
        $pgm=$_GET['pgm'];
        $pqt=$_GET['pqt'];
        $ptm=$_GET['ptm'];
        
    // Create connection
    $conn = new mysqli($servername , $username , $password , $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * from pg where mobiles='$m'";
     if ($result=mysqli_query($conn,$query))
  {
   if(mysqli_num_rows($result) > 0)
    {
      echo "<style onload=\"parent.exist()\"></style>";
 }
  else{
$sql = "INSERT INTO pg (names,mobiles,emails,states, citys,quali,qualitype,pgmarks,gradumarks,_12marks,_10marks,state1,city1,state2,city2,state3,city3)
VALUES ('$n','$m','$e','$s', '$c','$q','$pqt','$pm','$pgm','$ptm','$tm','$s1','$c1','$s2','$c2','$s3','$c3')";

if ($conn->query($sql) === TRUE) {

echo "<style onload=\"parent.suc()\"></style>";
    
} 
else
 {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
        }
}
else
    echo "Query Failed.";

        break;

        case "Under Graduate":
            $gm=$_GET['gm'];
            $gqt=$_GET['gqt'];
            $gtm=$_GET['gtm'];
            
            // Create connection
    $conn = new mysqli($servername , $username , $password , $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * from ug where mobiles='$m'";
     if ($result=mysqli_query($conn,$query))
  {
   if(mysqli_num_rows($result) > 0)
    {
      echo "<style onload=\"parent.exist()\"></style>";
 }
  else{
$sql = "INSERT INTO ug (names,mobiles,emails,states, citys,quali,qualitype,gradumarks,_12marks,_10marks,state1,city1,state2,city2,state3,city3)
VALUES ('$n','$m','$e','$s', '$c','$q','$gqt','$gm','$gtm','$tm','$s1','$c1','$s2','$c2','$s3','$c3')";

if ($conn->query($sql) === TRUE) {

echo "<style onload=\"parent.suc()\"></style>";
    
} 
else
 {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
}
else
    echo "Query Failed.";

            break;

            case "Diploma":
                $dm=$_GET['dm'];
                   // Create connection
    $conn = new mysqli($servername , $username , $password , $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT * from diplo where mobiles='$m'";
     if ($result=mysqli_query($conn,$query))
  {
   if(mysqli_num_rows($result) > 0)
    {
      echo "<style onload=\"parent.exist()\"></style>";
 }
  else{
$sql = "INSERT INTO diplo (names,mobiles,emails,states, citys,quali,diplomarks,_10marks,state1,city1,state2,city2,state3,city3)
VALUES ('$n','$m','$e','$s', '$c','$q','$dm','$tm','$s1','$c1','$s2','$c2','$s3','$c3')";

if ($conn->query($sql) === TRUE) {

echo "<style onload=\"parent.suc()\"></style>";
    
} 
else
 {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
}
else
    echo "Query Failed.";

                break;

    }
    ?>