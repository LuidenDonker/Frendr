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


function Login()
{
    if(empty($_POST['username']))
    {
        $this->HandleError("UserName is empty!");
        return false;
    }
     
    if(empty($_POST['password']))
    {
        $this->HandleError("Password is empty!");
        return false;
    }
     
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
     
    if(!$this->CheckLoginInDB($username,$password))
    {
        return false;
    }
     
    session_start();
     
    $_SESSION[$this->GetLoginSessionVar()] = $username;
     
    return true;
}

function CheckLoginInDB($username,$password)
{
    if(!$this->DBLogin())
    {
        $this->HandleError("Database login failed!");
        return false;
    }          
    $username = $this->SanitizeForSQL($username);
    $pwdmd5 = md5($password);
    $qry = "Select name, email from $this->tablename ".
        " where username='$username' and password='$pwdmd5' ".
        " and confirmcode='y'";
     
    $result = mysql_query($qry,$this->connection);
     
    if(!$result || mysql_num_rows($result) <= 0)
    {
        $this->HandleError("Error logging in. ".
            "The username or password does not match");
        return false;
    }
    return true;
}
?>
  
                <form id='login' action='login.php' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Login</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>
 
<label for='username' >UserName*:</label>
<input type='text' name='username' id='username'  maxlength="50" />
 
<label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="50" />
 
<input type='submit' name='Submit' value='Submit' />
 
</fieldset>
</form>
                 
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

	