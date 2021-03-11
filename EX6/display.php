<!DOCTYPE html>
<html>
<head><head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-image: linear-gradient(to right, white , #2b75ff);
}

.content {
  padding: 10%;
  text-align: center;
  
}
</style>
</head>
<body>

<div class="content">
    <div class="card">
        <div class="card-body">
        <?php

            $name= $_REQUEST["name"];
            echo "<b>Name</b>&emsp;&emsp;&emsp;:".$name."&nbsp;&emsp;&emsp;&emsp;&emsp;<br><br>";
            $email= $_REQUEST["email"];
            echo "<b>Email</b>&emsp;&emsp;&emsp;: ".$email."<br><br>";
            $password= $_REQUEST["password"];
            echo "<b>Password</b>&emsp;: ".$password."<br><br>";

        ?>
        </div>
    </div>
</div>

</body>
</html>
