<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nisarg";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $input = $_REQUEST["n"];
    
    $query = "SELECT * FROM `Shopping` WHERE category='".$input."'";
    
    if($input=="camera")
    {
        $cookie = $_COOKIE["camera"]++;
        setcookie("camera", $cookie,time() + (86400 * 30), "/");
    }
    if($input=="mobile")
    {
        $cookie1 = $_COOKIE["mobile"]++;
        setcookie("mobile", $cookie1,time() + (86400 * 30), "/");
    }
    $result = $conn->query($query);
    
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
    echo     "
            <div class='col-md-4'>
            <div class='card'>
            <div class='card-header' align='center'>
            " . $row["product"]. "
            </div>
            <div class='card-body' align='center'><br>
            <img src='" . $row["category"]. ".jpg' style='width:200px;height:200px;'><br><br>
            " . $row["description"]. "
            </div>
            </div>
            </div>";
    }
}
?>