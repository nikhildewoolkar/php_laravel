<?php include("header.php");
?>
<br>
<?php 
    if(isset($_COOKIE["delete"]))
    {
        echo "Value is: " . $_COOKIE["delete"];
    }
?>
<br>
<div class="table-responsive" align="center">
<table class="table">
	<tr>
		<th>id</th>
		<th>Name</th>
		<th>Email</th>
		<th>password</th>
		<th>Delete</th>
	</tr>
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
		 $query = "SELECT * FROM `Student`";
		 $result = $conn->query($query);
		 
		if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			 ?>
			 <tr>
				<td><?php echo $row["id"];?></td>
				<td><?php echo $row["name"];?></td>
				<td><?php echo $row["email"];?></td>
				<td><?php echo $row["password"];?></td>
				<td><a href="delete.php?n=<?php echo $row["id"];?>"><input type="button" value="Delete" class="btn btn-danger"></a></td>
			 </tr>
			 
			 <?php
		 }
        }	 
	?>
</table>
</div>