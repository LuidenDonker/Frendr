<!DOCTYPE html>
<html lang="en">

<head>
  <?php

  //zet dit boven aan in de header
  $servername = "localhost";
  $username = "jelletd163_user";
  $password = "jellek95";
  $dbname = "jelletd163_frendr";

  // Create connection
  $conn = mysql_connect($servername, $username, $password) or die("Unable to connect to MySQL");

  $selected = mysql_select_db($dbname,$conn) or die("Could not select examples");

  $sql = "SELECT * FROM accounts WHERE fname='Jelle Kiers'";
  $result = mysql_query($sql, $conn);
  if(!$result) {
  die("Database query failed: " . mysql_error());
  }
  //$query_select = "SELECT id FROM GuestBOOK WHERE naam=Jesse";
  //$query = "INSERT INTO GuestBook (name, message) VALUES ( ".$naam." , ".$bericht." )";
  //$send = mysql_query($query_select, $conn) or die("niet gelukt");

  mysql_close($conn);

  ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Find friends!</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper">
<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><img style="width:20px; height:20px;" src="http://activeshowcase.s3.amazonaws.com/activelab/files/538c8604b16a8.jpg"></img></a>

        <!-- Sidebar -->
        <div id="sidebar-wrapper">

            <ul class="sidebar-nav">

                <li class="sidebar-brand">
                    <h1 class= "profileHeader">
                        My Profile
                    </h1>
                </li>
              <p class="profile">Username:
                <?php
                while($row = mysql_fetch_array($result)) { //opmaak items
                    echo " <h4>" . $row["fname"]. "</h4><br>";
                  }
                  ?>



              </p>
			  <p class="profile"> email: </p>
				<p class="profile"> Area: </p>
                 <hr>
				 <h1 class= "profileHeader">
                        My Interests
                    </h1>
						 <br>
				<form class="checkInterest" action="">
<input type="checkbox" name="Cooking" value="Cooking">Cooking	<br>
<input type="checkbox" name="Sports" value="Sports">Sports	<br>
<input type="checkbox" name="Walking" value="Walking">Walking	<br>
<input type="checkbox" name="Culture" value="Culture">Culture	<br>
<input type="checkbox" name="Movies" value="Movies">Movies	<br>
<input type="checkbox" name="Music" value="Music">Music	<br>
<input type="checkbox" name="Theatre" value="Theatre">Theatre	<br>
<input type="checkbox" name="Dance" value="Dance">Dance	<br>
<input type="checkbox" name="Books" value="Books">Books	<br>
<input type="checkbox" name="Parties" value="Parties">Parties	<br>
<input type="checkbox" name="Shopping" value="Shopping">Shopping	<br>
<input type="checkbox" name="Fashion" value="Fashion">Fashion	<br>
<input type="checkbox" name="Handicrafts" value="Handicrafts">Handicrafts	<br>
<input type="checkbox" name="Drugs" value="Drugs">Drugs
</form>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="headProf">My Matches</h1>
						<div id="my-div">
    <a href="#" class="fill-div"></a>
</div>
<div id="my-div">
    <a href="#" class="fill-div"></a>
</div>
<div id="my-div">
    <a href="#" class="fill-div"></a>
</div>
<div id="my-div">
    <a href="#" class="fill-div"></a>
</div>
<div id="my-div">
    <a href="#" class="fill-div"></a>
</div>
<div id="my-div">
    <a href="#" class="fill-div"></a>
</div>
<div id="my-div">
    <a href="#" class="fill-div"></a>
</div>
<div id="my-div">
    <a href="#" class="fill-div"></a>
</div>
<div id="my-div">
    <a href="#" class="fill-div"></a>
</div>
<div id="my-div">
    <a href="#" class="fill-div"></a>
</div>
<div id="my-div">
    <a href="#" class="fill-div"></a>
</div>
<div id="my-div">
    <a href="#" class="fill-div"></a>
</div>
<div id="my-div">
    <a href="#" class="fill-div"></a>
</div>
<div id="my-div">
    <a href="#" class="fill-div"></a>
</div>
<div id="my-div">
    <a href="#" class="fill-div"></a>
</div>


                    </div>
                </div>
				<hr>
				<h1 class="headProf">
				Chats
				</h1>
				<div class="inner">

				</div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
