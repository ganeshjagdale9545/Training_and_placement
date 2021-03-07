<?php
$t = $_GET['t'];
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
    $sql = "SELECT * FROM ug where qualitype='$t'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border=\"1\" style=\"width:100%;\">
        <tr>
        
        <th>
            <br><center>
            NAME
        </th>
        <th>
            <br><center>
            MOBILE</center>
        </th>
        <th>
            <br><center>
            EMAIL</center>
        </th>
        
        <th>
            <br><center>
            STATE</center>
        </th>
        <th>
            <br><center>
            CITY</center>
        </th>
        <th>
            <br><center>
            QUALIFICATION</center>
        </th>
        <th>
            <br><center>
            QUALIFICATION TYPE</center>
        </th>
        
    <th>
    <br>
    UG MARKS
    </th>
    <th>
    <br>
    12TH MARKS
    </th>
    <th>
    <br>
    10TH MARKS
    </th>
    <th>
    <br>
    STATE 1
    </th>
    <th>
    <br>
    CITY 1
    </th>
    <th>
    <br>
    STATE 2
    </th>
    <th>
    <br>
    CITY 2
    </th>
    <th>
    <br>
    STATE 3
    </th>
    <th>
    <br>
    CITY 3
    </th>
    </tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $names=$row["names"] ;
            $mobiles=$row["mobiles"] ;
            $emails=$row["emails"] ;
            $states=$row["states"] ;
            $citys=$row["citys"] ;
            $quali=$row["quali"] ;
            $qualitype=$row["qualitype"] ;
            
            $gradumarks=$row["gradumarks"] ;
            $_12marks=$row["_12marks"] ;
            $_10marks=$row["_10marks"] ;
            $state1=$row["state1"] ;
            $city1=$row["city1"] ;
            $state2=$row["state2"] ;
            $city2=$row["city2"] ;
            $state3=$row["state3"] ;
            $city3=$row["city3"] ;
            
        
    echo"<tr >
        <td style=\"text-transform:uppercase;\">
            <br>
           $names
        </td>
        <td>
            <br>
           $mobiles
        </td>
        <td>
            <br>
           $emails
        </td>
        <td >
            <br>
           $states
        </td>
        
        <td>
            <br>
           $citys
        </td>
        <td>
            <br>
            $quali
        </td>
        <td>
            <br>
            $qualitype
        </td>
        
        <td>
    <br>
    $gradumarks
    </td>
    <td>
    <br>
    $_12marks
    </td>
    <td>
    <br>
    $_10marks
    </td>
    <td>
    <br>
    $state1
    </td>
    <td>
    <br>
    $city1
    </td>
    <td>
    <br>
    $state2
    </td>
    <td>
    <br>
    $city2
    </td>
    <td>
    <br>
    $state3
    </td>
    <td>
    <br>
    $city3
    </td>
    </tr>";
        }
        echo"</table>";
    }
    else
    {
        echo "NO DATA FOUND!";
    }
        ?>