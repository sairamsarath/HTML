<?php
include "conn.php";
$conn = openCon();

        $sql = "SELECT * FROM details  WHERE User_name='$Username'";
        $result = mysql_query ($sql) or die (mysql_error ());
        while ($row = mysql_fetch_array ($result)){

        ?>
<!doctype html>
<html>
<head>
<title>
Update Details
</title>
<style>
#login
{
margin-top: -20px;
margin-left:450px;
width: 450px;
text-align: center;
}
form fieldset input[type="text"], input[type="password"]
{
background-color: #e5e5e5; 
border: none;
border-radius: 30px;
color: #5a5656;
font-size: 14px;
height: 50px;
padding: 0px 10px;
width: 300px;
}
form fieldset input[type="textfield"]
{
background-color: #e5e5e5;
border: none;
border-radius: 30px;
color: #5a5656;
font-size: 14px;
height: 100px;
padding: 0px 10px;
width: 300px;
}
form fieldset input[type="submit"]
{
background-color: Orange;
border: 2px;
border-radius: 100px;
color: #f4f4f4;
cursor: pointer;
height: 50px;
text-transform: uppercase;
width: 225px;
}
form fieldset a
{
color: #c0c0c0;
font-size: 13px;
}
h2
{
font-size: 2em;
color:Black;
}
h2, p
{
margin-bottom: 10px;
}
strong
{
font-weight: bold;
}
.typecard
{
background-color: #f4f4f4;
border: none;
border: 2px;
border-radius: 100px;
color: #5a5656;
font-size: 14px;
height: 50px;
outline: none;
padding: 0px 10px;
width: 300px;
}
#main_para
{
color: #f4f4f4;
display: block;
font-size: 60px;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
height: 50px;
line-height: 20px;
margin: 170px 20px;
width: 750px;
float: left;
}
#navigationbar
{
margin-top: 24px;
margin-left:-800px;
float: left;
}
ul
{
list-style-type: none;
margin= 0;
padding= 0;
overflow: hidden;
background-color:Black;
}
li
{
float: left;
}
li a
{
display: block;
color: Black;
text-align: center;
padding: 10px 20px;
text-decoration: none;
}
li a:hover
{
background-color: Orange;
}
}
</style>
</head>
<body background="airplane-wallpaper-4.jpg">
<div id="main_para">
</br>
</div></center></ul>
<div id="navigationbar">
<ul>
<li><a href="home.html" style="color:white">Home</a></li>
<li><a href="availableflights.html" style="color:white">Available Flights</a></li>
<li><a href="offers.html" style="color:white">Offers</a></li>
<li><a href="contact_us.html"  style="color:white">Feedback</a></li>
<li><a href="customercare.html" style="color:white">Customer Care</a></li>
<li><a href="datagetting.php"  style="color:white">Full Details</a></li>
<li><a href="updatedetails.html"  style="color:white">Update Profile</a></li>
<li><a href="mainpage.html"  style="color:white">Log out</a></li>
</br></br>
</ul>
</br></br>
<div id="login">
<form  action="update.php"  method="post">
<fieldset>
<legend><h2><strong>Update Details!</strong></h2></legend>
<p><input id="1" type="text" name="name" value="<?php echo $row ['name']; ?> " onmouseover="zoom_in(this)" onmouseout="zoom_out(this)"></p>
<p><input id="2" type="text"  name="password" value=" <?php echo $row ['pwd']; ?> " onmouseover="zoom_in(this)" onmouseout="zoom_out(this)"></p>
<p><input id="3" type="text"  name="email" value=" <?php echo $row ['email']; ?> " onmouseover="zoom_in(this)" onmouseout="zoom_out(this)"></p>
<p><input id="3" type="text"  name="mobile" value=" <?php echo $row ['mobile']; ?> " onmouseover="zoom_in(this)" onmouseout="zoom_out(this)"></p>
<input type="submit" name="submit" class="Book1" value="Update" >
</fieldset>
</form>
</div>
</div>
<script>

function zoom_in(x)
{
x.style.height="59px"
x.style.width="350px"
}
function zoom_out(x)
{
x.style.height="50px"
x.style.width="300px"
}
</script>
</body>
</html>


  
