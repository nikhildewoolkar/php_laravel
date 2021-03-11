<?php
$myfile = fopen("file.txt", "r+") or die("Unable to open file!");

if(isset($_POST['submit']))
{
    $txt = $_POST['area1'];
    fwrite($myfile, $txt);
    
    header('Location:index.php');
}

fclose($myfile); 
?>
<html>
<head>
   <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
 
  <script type="text/javascript">
//<![CDATA[
  bkLib.onDomLoaded(function() {
      
        new nicEditor({fullPanel : true,maxHeight : 200}).panelInstance('area1');
  });
  //]]>
  </script>
</head>
<body>
<?php
$myfile = fopen("file.txt", "r+") or die("Unable to open file!");
?>
<form method="post" action="" >
<div id="sample"> 
<textarea name="area1" id="area1" style="width:70%;height:200px;">
<?php echo fread($myfile,filesize("file.txt"));
?></textarea>
</div>
<input type="submit" name="submit">
</form>
<?php 
fclose($myfile); 
?>
</body>
</html>