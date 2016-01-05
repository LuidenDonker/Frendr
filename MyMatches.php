<!DOCTYPE html>
		<html lang="en">
		<head>
		
		<title> Find Friends </title>
		 <meta charset = "utf-8">

												
														<link href="css/bootstrap.css" rel="stylesheet"/>
														<link href="css/MatchesStyles.css" rel="stylesheet"/>		
													
															
					<?PHP
require_once("./include/membersite_config.php");
 
if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
function CheckLogin()
{
     session_start();
 
     $sessionvar = $this->GetLoginSessionVar();
      
     if(empty($_SESSION[$sessionvar]))
     {
        return false;
     }
     return true;
}
?>									
															
									
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
</div>
</body>

	