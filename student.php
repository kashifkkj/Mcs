
<?php
error_reporting(0);
$message='';
	include "connection.php";
	if(isset($_POST['btn']))
	{
	$nme=$_POST['nm'];
	$fnme=$_POST['fnm'];
	$cn=$_POST['cnc'];
	$lstdg=$_POST['dgree'];
	$mrk=$_POST['mks'];
	$adrs=$_POST['address'];	
	$filename =basename( $_FILES['fild']['name']);
	$destination = "img/".uniqid().$filename;	
	$query="insert into clg values ('$nme', '$fnme', '$cn', '$lstdg','$mrk','$adrs','$destination')";
	 
			$rs 	= 	mysql_query($query);
		
		if($rs== 1 )
		{
			move_uploaded_file($_FILES['fild']['tmp_name'],$destination);

		echo "Data has been inserted Successfully!";
		}
		else
		echo "Sorry! Your data has not been inserted Successfully!".mysql_errno();
			
			
			
		
	
		
			
		}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body form table tr th {
	color: #00C;
}
</style>
</head>

<body><form action="" method="post" enctype="multipart/form-data">
<table width="412" border="0" align="center">
  <tr bgcolor="#330033">
    <th colspan="2" scope="row">student form</th>
    </tr>
  <tr>
    <th width="64" height="32" scope="row">name</th>
    <td width="336"><input type="text" name="nm" id="nm" /></td>
  </tr>
  <tr>
    <th scope="row">father name</th>
    <td><input type="text" name="fnm" id="fnm" /></td>
  </tr>
  <tr>
    <th height="38" scope="row">cnic</th>
    <td><input type="text" name="cnc" id="cnc" /></td>
  </tr>
  <tr>
    <th scope="row">last degree</th>
    <td><input type="text" name="dgree" id="dgree" /></td>
  </tr>
  <tr>
    <th height="42" scope="row">marks</th>
    <td><input type="text" name="mks" id="mks" /></td>
  </tr>
  <tr>
    <th height="42" scope="row">address</th>
    <td><textarea name="address" id="address" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <th height="42" scope="row">photo</th>
    <td><input type="file" name="fild" id="fild" /></td>
  </tr>
  <tr>
    <th height="42" scope="row">&nbsp;</th>
    <td><input type="submit" name="btn" id="btn" value="Submit" /></td>
  </tr>
  <tr>
    <th height="42" scope="row">&nbsp;</th>
    <td bgcolor="#00CCFF"><a href="view.php">View</a></td>
  </tr>
</table>


</form>
</body>
</html>