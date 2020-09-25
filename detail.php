
<?php
$conn=mysqli_connect("localhost","ankita","orion2001","grno") or die("error in connection");

$grno=mysqli_real_escape_string($conn,$_POST['grno']);

$result=mysqli_query($conn,"select * from details where grno='$grno'");
while($rowval = mysqli_fetch_array($result))

 {

$grno1= $rowval['grno'];

$name1= $rowval['name'];

$dept1= $rowval['dept'];

$year1= $rowval['year'];



}

mysqli_close($conn);


?>


<!DOCTYPE html>
<html>
<head>
<title>  Student Details </title>
<link rel="stylesheet" type="text/css" href="voyager.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<style type="text/css">
<!--
.style2 {font-family: Verdana, Arial, Helvetica, sans-serif}
-->
</style>
<link rel="stylesheet" type="text/css" href="default.css">

<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style11 {color: #FF0000}
.style17 {color: #000000}
.style18 {
	color: #CCCCCC;
	font-style: italic;
}
.style20 {color: #CCCCCC}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #006678;
	
}

li {
	float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 18px 16px;
    text-decoration: none;
	width: 70%;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #000000;
}

.image { 
   position: relative; 
   width: 100%; /* for IE 6 */
}

h2 { 
color: white; 
   font: bold 124px/45px Helvetica, Sans-Serif;
   position: absolute; 
   top: 10px; 
   left: 0; 
   width: 100%; 
   text-align:center;
   background: rgb(0, 0, 0); /* fallback color */
   background: rgba(0, 0, 0, 0.5);
}

}

</style><!DOCTYPE html>
<html>
<head>
<title>  Voyager </title>
<link rel="stylesheet" type="text/css" href="voyager.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<style type="text/css">
<!--
.style2 {font-family: Verdana, Arial, Helvetica, sans-serif}
-->
</style>
<link rel="stylesheet" type="text/css" href="default.css">

<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style11 {color: #FF0000}
.style17 {color: #000000}
.style18 {
	color: #CCCCCC;
	font-style: italic;
}
.style20 {color: #CCCCCC}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #006678;
	
}

li {
	float: left;
}

li a {
	display: block;
	color: white;
	text-align: center;
	text-decoration: none;
	width: 70%;
	padding-top: 18px;
	padding-right: 16px;
	padding-bottom: 18px;
	padding-left: 16px;
}

li a:hover:not(.active) {
	background-color: #000000;
}

.active {
    background-color: #000000;
}

body {margin:0}

.icon-bar {
    width: 285px;
    text-align: center;
    background-color: #FFFFFF;
}

.icon-bar a {
	padding: 16px;
	display: block;
	transition: all 0.3s ease;
	color: #FFF;
	font-size: 36px;
	width: 100%;
	margin-top: 30%;
	margin-right: 3px;
	margin-bottom: 4px;
	margin-left: 0px;
	background-color: #009688;
	border-top-color: #000;
	border-right-color: #000;
	border-bottom-color: #000;
	border-left-color: #000;
	font-style: oblique;
	height: 100%;
}

.icon-bar a:hover {
	background-color: #096;
}



</style>
</head>


<body>


<div id= "header" align="center" class="style3"> <h6>VISHWAKARMA INSTITUTE OF INFORMATION TECHNOLOGY PUNE </h6> 
<h1 align="center" class="style1">LIBRARY MANAGEMENT SYSTEM </h1>
</div></td>
</tr>

<div id= "navbar">

<ul>
  <li ><a  href="#hp.html">Home</a></li>
  
  <li ><a href="books.html">Books </a></li>
  
  <li ><a href="Gr_no.html">Students </a></li>
  <li ><a href="#about">About </a></li>
  <li style="float:right"><a  href="#Logout">Logout</a></li>
</ul>

</div>

<div class="icon-bar">
  <a href="detail.html">Student Details</a>
  <a href="issue.php">Issue Book</a>
  <a href="return.html">Return Book</a>
  
</div>

<div class="static2">
<center><br><label for="gr_no">GR NO :</label>
  <input name="gr_no" type="text" id="textboxid"  width="650px" height="40px" value='<?php echo $grno1; ?>'/>
  <br><br>
                    <label for="name">NAME :</label>
                    <input type="text" id="textboxid" name="name" value='<?php echo $name1; ?>'>
                    
                    <br><br>
                    <label for="dept">DEPT :</label>
                    <input type="text" id="textboxid" name="dept" value='<?php echo $dept1; ?>'>
                    
                    <br><br>
                    <label for="year">YEAR :</label>
                    <input type="text" id="textboxid" name="year" value='<?php echo $year1; ?>'>
                    <br><br>
                    
                    <input type="submit" id="savebtnid" value="Save Changes" >
                    <br>
                    
                    </center>

</div>

<div class="static1">Student Details</div>

<body>

</html>
