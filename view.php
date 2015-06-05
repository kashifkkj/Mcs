<?php
   include "connection.php";
   if (isset ($_GET['del']))
      {
		  $cnic = $_GET['del'];
		  $table = mysql_query("select * from clg where cnic ='$cnic'");
		  $row = mysql_fetch_array($table);
		  $picaddress =  $row[6];
		  unlink($picaddress);
		  mysql_query("delete from clg where cnic ='$cnic'");
	  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.sze {
	font-size: 24px;
	font-weight: bold;
}
</style>
</head>

<body bgcolor="#00FF33">
   <table width="75%" border="1" align="center">
  <tr class="sze">
    <td height="37" bgcolor="#00CCFF">Name</td>
    <td bgcolor="#00CCFF">Father Name</td>
    <td bgcolor="#00CCFF">CNIC</td>
    <td bgcolor="#00CCFF">Last Degree</td>
    <td bgcolor="#00CCFF">Marks</td>
     <td bgcolor="#00CCFF">Address</td>
      <td bgcolor="#00CCFF">Photo</td>
        <td bgcolor="#00CCFF">Update</td>
        <td bgcolor="#00CCFF"><a href="student.php">Home</a></td>
  </tr>
   
  <?php
  $table = mysql_query("select * from clg");
  while ($row = mysql_fetch_array($table))
  {
    echo "<tr>
    <td>".$row[0]."</td>
    <td>".$row[1]."</td>
    <td>".$row[2]."</td>
	<td>".$row[3]."</td>
	<td>".$row[4]."</td>
	<td>".$row[5]."</td>
	<td><img src ='".$row[6]."' width='100' height='80'></td>
	<td><a href ='view.php?del=".$row[2]."'>Delete</a></td>
	  
   
  </tr>";
  }
  
  ?>
</table>


</body>
</html>