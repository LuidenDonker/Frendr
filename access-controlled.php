<?PHP
require_once("./include/membersite_config.php");
require_once("./include/fg_membersite.php");


if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <?php

$usnam = $_SESSION['name_of_user'];
$servername = "localhost";
$username = "jelletd163_user";
$password = "jellek95";
$dbname = "jelletd163_frendr";  

// Create connection
$conn = mysql_connect($servername, $username, $password) or die("Unable to connect to MySQL");  
$selected = mysql_select_db($dbname,$conn) or die("Could not select examples");
$sql = "SELECT * FROM accounts WHERE LoginName = '$usnam' LIMIT 1 ";
$result = mysql_query($sql, $conn);
if(!$result) {
    die("Database query failed: " . mysql_error());
}
//$query_select = "SELECT id FROM GuestBOOK WHERE naam=Jesse";
//$query = "INSERT INTO GuestBook (name, message) VALUES ( ".$naam." , ".$bericht." )";
//$send = mysql_query($query_select, $conn) or die("niet gelukt");

mysql_close($conn);
echo "user name";
echo $usnam;

?>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>An Access Controlled Page</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
</head>
<body>
<div id='fg_membersite_content'>

<p><a href='login-home.php'>Home</a></p>
    <p><a href='access-controlled.php'>Profile</a></p>
    <p><a href='access-controlled2.php'>Matches</a></p>
    <p><a href='access-controlled3.php'>New people in your area</a></p>
    <p><a href='logout.php'>Logout</a></p>
<p>
Profile<br> 
<?php
//zet dit waar je de items wilt hebben
while($row = mysql_fetch_array($result)) { //opmaak items
        echo " Name: " . $row["fname"]. " <br>";
}

?>    
    </p>
</div>
</body>
</html>
