<!DOCTYPE html>
		<html lang="en">
		<head>
		
		<title> Find Friends </title>
		 <meta charset = "utf-8">

												
														<link href="css/bootstrap.css" rel="stylesheet"/>
														<link href="css/login.css" rel="stylesheet"/>		
													
															
														
															
									
									</head>
		
		<body>
		<nav class="navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">Friends Finder</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
	  <!--Link to pages here!-->
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="findFriends.php">Find Friends</a></li> 
        <li><a href="MyMatches.php">My Matches</a></li> 
        <li><a href="login.php">Log In</a></li> 
      </ul>
    </div>
  </div>
</nav>

            <div class="col md-12 jumbotron">
                <?php
$log = $_POST['login'];
$pass = $_POST['password'];
//zet dit boven aan in de header
$servername = "localhost";
$username = "jelletd163_user";
$password = "jellek95";
$dbname = "jelletd163_frendr";

// Create connection
$conn = mysql_connect($servername, $username, $password) or die("Unable to connect to MySQL");

$selected = mysql_select_db($dbname,$conn) or die("Could not select examples");
$sql = "SELECT * FROM accounts WHERE LoginName = '$log' LIMIT 1";
$result = mysql_query($sql, $conn);
if(!$result) {
    die("Database query failed: " . mysql_error());
}
//$query_select = "SELECT id FROM GuestBOOK WHERE naam=Jesse";
//$query = "INSERT INTO GuestBook (name, message) VALUES ( ".$naam." , ".$bericht." )";
//$send = mysql_query($query_select, $conn) or die("niet gelukt");

mysql_close($conn);

?>
  
                <form method="POST">
    Your login name:   <input type="text" name="login"><br>
    Your password:     <input type="text" name="password"><br>
    <input type="submit" name="submit" class="btn btn-xl" value="Stuur!"/><br?
    </form><br><br><br>
                 
            </div>
                <div style = "position: absolute;right:100px; top:200px; height:500px; width:500px;"><?php
                      //zet dit waar je de items wilt hebben
                      while($row = mysql_fetch_array($result)) { //opmaak items
                          if (strcmp($pass, $row['password']) == 0) {
                            echo " <h4>" . $row['fname']. "</h4><br>";
                          }                          
                           }
                             
                    ?>
                </div>
</body>

	