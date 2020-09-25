<?php
 
$conn=mysqli_connect("localhost","ankita","orion2001","auth") or die("error in connection");

$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['password']);

$name=mysqli_query($conn,"select name from login where username ='$username' and password ='$password'");

if((mysqli_fetch_array($name))!=NULL)
{
echo "account exists<br><br>";

echo "<a href=\"hp.html\">Home Page</a><br><br>";

}
elseif ((mysqli_fetch_array($name))==NULL) 
{
echo "Invalid Account!!<br><br>";

}

elseif(!mysqli_query($conn,$sql))
{
die("error". mysqli_error($conn));
}

mysqli_close($conn);

?>


<html>
<head>

<form action="hp.html" method="post">
</head>
</html>
