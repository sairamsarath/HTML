<?php

include_once('conn.php')
$query="select * from student";
$result=mysql_query($query);
?>

<!DOCTYPE html>
<html>
<head>

<title> Available flights </title>
<body>

<table align="center" border="1px" style="width:600px; line-height:40px;">
<tr>
<th colspan="4"><h2> Student Record </h2></th>
</tr>
<t>

<th> Name </th>
<th> Duraion </th>
<th> Price </th>
<th> Total Price </th>
</t>
<?php
 while($rows=mysql_fetch_assoc($result))
 {
 ?>
 <tr>
 <td><? php echo $rows ['Name']; ?></td>
 <td><? php echo $rows ['Duration']; ?></td>
 <td><? php echo $rows ['Price']; ?></td>
 <td><? php echo $rows ['Total Price']; ?></td>
 
 </table>
 </body>