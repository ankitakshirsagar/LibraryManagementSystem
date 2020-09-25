<?php

$loginid = mysqli_real_escape_string($conn, $_POST['loginid']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

session_start();

$_SESSION['loginid'] = $loginid;

if (isset($_SESSION['loginid']))
{
echo "User:" . $_SESSION['loginid'];
}


echo "<tr><td> <a href=Homepage.html> Homepage </a></td></tr>";
mysqli_close($conn);

?>

