<!DOCTYPE html>
<html>
<head>
<title>Create Account</title>


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
<?php

    if(isset($_POST["submit"])){

        $naam = $_POST['fname'];
        $achternaam = $_POST['lname'];
        $mail = $_POST['email'];
        $loc = $_POST['loc'];
        $login = $_POST['login'];
        $pass = $_POST['password'];
        
        if($naam != "" AND $achternaam != "" AND $mail != "" AND $loc !=""){

            $servername = "localhost";
            $username = "jelletd163_user";
            $password = "jellek95";
            $dbname = "jelletd163_frendr";

            // Create connection
            $conn = mysql_connect($servername, $username, $password) or die("Unable to connect to MySQL");

            $selected = mysql_select_db($dbname,$conn) or die("Could not select examples");

            $sql = "INSERT INTO accounts (fname, lname, email, loc, LoginName, password) VALUES ( '".$naam."' , '".$achternaam."' , '" .$mail. "' , '" .$loc."' , '".$login."' , '".$pass."')";
            $result = mysql_query($sql, $conn);
            if(!$result) {
                die("Database query failed: " . mysql_error());
            }

            mysql_close($conn);
                echo "Success!";
        }else{

          echo "no succes";
        }


    }

    ?>
<form method="POST">
    Your first name:   <input type="text" name="fname" maxlength="50"><br>
    Your last name:    <input type="text" name="lname"><br>
    Your emailaddress: <input type="text" name="email"><br>
    Your location:     <input type="text" name="loc"><br>  
    Your login name:   <input type="text" name="login"><br>
    Your password:     <input type="text" name="password"><br>
    <input type="submit" name="submit" class="btn btn-xl" value="Stuur!"/><br?
    </form>
</body>
</html>
