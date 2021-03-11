<?php 
        include("header.php");

      
?>

<div align="center">


<?php 

if (!isset($_COOKIE['count']))
{
	?> 
Welcome! This is the first time you have viewed this page. 
<?php 
	$cookie = 1;
	setcookie("count", $cookie);
}
else
{
	$cookie = ++$_COOKIE['count'];
	setcookie("count", $cookie);
	?> 
You have viewed this page <?= $_COOKIE['count'] ?> times. 
<?php  }// end else  ?>
<form method="GET">
    <input type="button" class="btn btn-primary" onclick="mobile(this.value)"  value="mobile" >
    <input type="button" class="btn btn-primary" onclick="camera(this.value)" value="camera" >
	<br>
</form>

</div>


<script type="text/javascript">
	function camera(str) {
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     document.getElementById("show").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("GET", "process.php?n="+str, true);
	  xhttp.send();
     
	}
	function mobile(str) {
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	     document.getElementById("show").innerHTML = this.responseText;
	    }
	  };
	  xhttp.open("GET", "process.php?n="+str, true);
	  xhttp.send();
     
	}
</script>
<br><br><div class="container">
<div class='row' id="show"></div>
</div><br><br>
<?php include("footer.php");?>