<?php

session_start();
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




?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: linear-gradient(to right, white , #2b75ff);
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  border-radius:15px;
  background-image: linear-gradient(to right, white ,white);
}
.content {
  padding: 10%;
  
}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #2b75ff;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>



<?php
// If form submitted, insert values into the database.
if (isset($_POST['submit'])){
        // removes backslashes
 $name = stripslashes($_POST['name']);
 $password = stripslashes($_POST['password']);
 
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `Student` WHERE name='".$name."' and password='".$password."'";

//  $result = mysqli_query($conn,$query) or die(mysql_error());
//  $rows = mysqli_num_rows($result);
 $result = $conn->query($query);
        if($result->num_rows==1){
     $_SESSION['username'] = $name;
            // Redirect user to index.php
     header("Location: homepage.php");
         }else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
 }
    }else{
?>


<div class="content">
<form action="" method="post" name="login">
  <div class="container">
    <h1 align="center">Login</h1>
    
    <hr>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="name" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <button type="submit"  name="submit"class="registerbtn">Login</button>
  </div>
  <br>
  <div class="container signin">
    <p>Don't have an account? <a href="index.php">Register</a>.</p>
  </div>
</form>
</div>
    <?php }?>
</body>
</html>
