<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
    <link href="/Frendr/assets/css/bootstrap2.css" rel="stylesheet" />
    <!-- FONT AWESOME  CSS -->
    <link href="/Frendr/assets/css/font-awesome2.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="/Frendr/assets/css/style2.css" rel="stylesheet" />
  <?php
    $usname = $_POST['username'];
    $passw = $_POST['password'];
  //zet dit boven aan in de header
  $servername = "localhost";
  $username = "jelletd163_user";
  $password = "jellek95";
  $dbname = "jelletd163_frendr";

  // Create connection
  $conn = mysql_connect($servername, $username, $password) or die("Unable to connect to MySQL");

  $selected = mysql_select_db($dbname,$conn) or die("Could not select examples");

  $sql = "SELECT * FROM accounts WHERE LoginName ='".$usname."'";
    $sql2 = "SELECT * FROM interesses";
$result2 = mysql_query($sql2, $conn);
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
    <?php
  if (isset($_POST['submit'])) {
      $cooking = isset($_POST['Cooking']);
      $sports = isset($_POST['Sports']);
      $walking = isset($_POST['Walking']);
      $culture = isset($_POST['Culture']);
      $movies = isset($_POST['Movies']);
      $music = isset($_POST['Music']);
      $theatre = isset($_POST['Theatre']);
      $dance = isset($_POST['Dance']);
      $books = isset($_POST['Books']);
      $parties = isset($_POST['Parties']);
      $shopping = isset($_POST['Shopping']);
      $fashion = isset($_POST['Fashion']);
      $handicrafts = isset($_POST['Handicrafts']);
      $drugs = isset($_POST['Drugs']);
      
          $servername = "localhost";
          $username = "jelletd163_user";
          $password = "jellek95";
          $dbname = "jelletd163_frendr";

          
          // Create connection
          $conn = mysql_connect($servername, $username, $password) or die("Unable to connect to MySQL");

          $selected = mysql_select_db($dbname,$conn) or die("Could not select examples");

          $sql = "INSERT INTO interesses (name, cooking, sports, walking, culture, movies, music, theatre, dance, books, parties, shopping, fashion, handicrafts, drugs) VALUES ( '".$usname."' , '".$cooking."', '".$sports."', '".$walking."', '".$culture."', '".$movies."' , '".$music."' , '".$theatre."' , '".$dance."', '".$books."', '".$parties."', '".$shopping."', '".$fashion."', '".$handicrafts."', '".$drugs."')";
          $result = mysql_query($sql, $conn);
          if(!$result) {
              die("Database query failed: " . mysql_error());
          }
          //$query_select = "SELECT id FROM GuestBOOK WHERE naam=Jesse";
          //$query = "INSERT INTO GuestBook (name, message) VALUES ( ".$naam." , ".$bericht." )";
          //$send = mysql_query($query_select, $conn) or die("niet gelukt");

          mysql_close($conn);



     


  }
?>
    <div id="wrapper">
<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><img style="width:20px; height:20px;" src="http://activeshowcase.s3.amazonaws.com/activelab/files/538c8604b16a8.jpg"></img></a>

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
		
            <ul class="sidebar-nav">
			 
                <li class="sidebar-brand">
                   
                </li>
                 <?php
while($row = mysql_fetch_array($result)){
				 echo "<h1 class= \"profileHeader\">";
                        echo"My Profile";
                    echo"</h1>";
					echo"<br>";
              echo"<p class=\"profile\">Name:";   
                   $nam = $row['fname'];
                            echo "".$row["fname"]."";
    echo " </p>"; 
    echo "<p class=\"profile\"> Email: "; 
    echo "".$row['email']."";
    echo"</p>";
    echo "<p class=\"profile\"> Area: ";   
                    echo "".$row["Location"]."";
    echo "</p>";
                    }
                  ?>
                   
              <input id="ariaid" class="navbar-collapsed collapse"type="text" style="background-color:black;" name="location">

                 <hr>
				 <h1 class= "profileHeader">
                        My Interests
                    </h1>
						 <br>
                
                
                
				<form class="checkInterest" method="POST"action="/Frendr/login-home.php">
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
<input type="checkbox" name="Drugs" value="Drugs">Drugs <br>
<input type="submit" name="submit" value="Update" style = "color:black;"/>
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
    <h3 id="header1">Best Match: <var id="bestmatch1">.....</var> (<var id="bestcounter1">.....</var>)</h3>
<h3 id="header2">2nd Best Match: <var id="bestmatch2">.....</var> (<var id="bestcounter2">.....</var>)</h3>
<h3 id="header3">3rd Best Match: <var id="bestmatch3">.....</var> (<var id="bestcounter3">.....</var>)</h3>
</div>
<script>
                    $(document).ready(function(){

  $.getJSON( "http://jelletd163.163.axc.nl/Frendr/duncan.php", function( data ){
  


//Information about the person that makes the request
    var matchRequest = 0;
    for(var i=0;i<data.length;i++){
            if(data[i].name == "<?php echo $usname;?>"){
                matchRequest = i;
            }
        };
    var counter = 0;

    if (data[matchRequest].cooking==1){
      counter++;
    }
    if (data[matchRequest].sports==1){
      counter++;
    }
    if (data[matchRequest].walking==1){
      counter++;
    }
    if (data[matchRequest].culture==1){
      counter++;
    }
    if (data[matchRequest].movies==1){
      counter++;
    }
    if (data[matchRequest].music==1){
      counter++;
    }
    if (data[matchRequest].theatre==1){
      counter++;
    }
    if (data[matchRequest].dance==1){
      counter++;
    }
    if (data[matchRequest].books==1){
      counter++;
    }
    if (data[matchRequest].parties==1){
      counter++;
    }
    if (data[matchRequest].shopping==1){
      counter++;
    }
    if (data[matchRequest].fashion==1){
      counter++;
    }
    if (data[matchRequest].handicrafts==1){
      counter++;
    }
    if (data[matchRequest].drugs==1){
      counter++;
    }

//Matching the person that made the request with at most three others

    var bestmatch1 = "";
    var bestmatch2="";
    var bestmatch3="";

    var bestcounter1 = 0;
    var bestcounter2= 0;
    var bestcounter3= 0;

    var array1 = [];
    var array2 = [];
    var array3 = [];

      for (var i = 0; i <= data.length - 1; i++) {
        var match = 0;
        var array = [];

        if (data[matchRequest] != data[i]) {
          if (data[matchRequest].cooking==data[i].cooking && data[matchRequest].cooking==1){
            array.push(" cooking");
            match++;
          }
          if (data[matchRequest].sports==data[i].sports && data[matchRequest].sports==1 ){
            array.push(" sports");
            match++;
          }
          if (data[matchRequest].walking==data[i].walking  && data[matchRequest].walking==1 ){
            array.push(" walking");
            match++;
          }
          if (data[matchRequest].culture==data[i].culture && data[matchRequest].culture==1){
            array.push(" culture");
            match++;
          }
          if (data[matchRequest].movies==data[i].movies && data[matchRequest].movies==1){
            array.push(" movies");
            match++;
          }
          if (data[matchRequest].music==data[i].music && data[matchRequest].music==1){
            array.push(" music");
            match++;
          }
          if (data[matchRequest].theatre==data[i].theatre && data[matchRequest].theatre==1 ){
            array.push(" theatre");
            match++;
          }
          if (data[matchRequest].dance==data[i].dance  && data[matchRequest].dance==1 ){
            array.push(" dance");
            match++;
          }
          if (data[matchRequest].books==data[i].books && data[matchRequest].books==1){
            array.push(" books");
            match++;
          }
          if (data[matchRequest].parties==data[i].parties && data[matchRequest].parties==1){
            array.push(" parties");
            match++;
          }
          if (data[matchRequest].shopping==data[i].shopping && data[matchRequest].shopping==1){
            array.push(" shopping");
            match++;
          }
          if (data[matchRequest].fashion==data[i].fashion && data[matchRequest].fashion==1 ){
            array.push(" fashion");
            match++;
          }
          if (data[matchRequest].handicrafts==data[i].handicrafts  && data[matchRequest].handicrafts==1 ){
            array.push(" handicrafts");
            match++;
          }
          if (data[matchRequest].drugs==data[i].drugs && data[matchRequest].drugs==1){
            array.push(" drugs");
            match++;
          }
        

          if (bestcounter1 < match) {
            bestcounter3 = bestcounter2;
            bestcounter2 = bestcounter1;
            bestcounter1 = match;
            bestmatch3 = bestmatch2;
            bestmatch2 = bestmatch1;
            bestmatch1 = data[i].name;
            array3 = array2;
            array2 = array1;
            array1 = array;
          } else if (bestcounter1 >= match && bestcounter2 < match){
            bestcounter3 = bestcounter2;
            bestcounter2 = match;
            bestmatch3 = bestmatch2;
            bestmatch2 = data[i].name;
            array3 = array2;
            array2 = array;
          } else if (bestcounter2 >= match && bestcounter3 < match){
            bestcounter3 = match;
            bestmatch3 = data[i].name;  
            array3 = array;
          }

      };   
    };


  if(counter !=0){

    $('#bestmatch1').html(bestmatch1);
    $('#bestcounter1').html((Math.round((bestcounter1/counter)*1000)/10)+"%"+" "+array1);
    $('#bestmatch2').html(bestmatch2);
    $('#bestcounter2').html((Math.round((bestcounter2/counter)*1000)/10)+"%"+" "+array2);
    $('#bestmatch3').html(bestmatch3);
    $('#bestcounter3').html((Math.round((bestcounter3/counter)*1000)/10)+"%"+" "+array3);
  } else {
    $('#header1').html("No Matches Found"); 
    $('#header2').html("");  
    $('#header3').html("");  
  }
  });
});
</script>
                       
                       
                    </div>
                </div>
				<hr>
				<h1 class="headProf">
				Chats
				</h1>
				<div class="inner">
				    <embed wmode="transparent" src="http://www.xatech.com/web_gear/chat/chat.swf" quality="high" width="700" height="550" name="chat" FlashVars="id=216428299" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://xat.com/update_flash.php" /><br><small><a target="_BLANK" href="http://xat.com/web_gear/?cb"></a> <a target="_BLANK" href="http://xat.com/web_gear/chat/go_large.php?id=216428299"></a></small><br>



				</div>
            <!--
                <div class="container">
        <div class="row pad-top pad-bottom">
            <div class=" col-lg-6 col-md-6 col-sm-6">
                <div class="chat-box-div">
                    <div class="chat-box-head">
                        GROUP CHAT HISTORY
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class="fa fa-cogs"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#"><span class="fa fa-map-marker"></span>&nbsp;Invisible</a></li>
                                    <li><a href="#"><span class="fa fa-comments-o"></span>&nbsp;Online</a></li>
                                    <li><a href="#"><span class="fa fa-lock"></span>&nbsp;Busy</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><span class="fa fa-circle-o-notch"></span>&nbsp;Logout</a></li>
                                </ul>
                            </div>
                    </div>
                    <div class="panel-body chat-box-main">
                        <div class="chat-box-left">
                           
                        </div>
                        <div class="chat-box-name-left">
                            
                        </div>
                        <hr class="hr-clas" />
                        <div class="chat-box-right">
                           
                        </div>
                        <div class="chat-box-name-right">
                            
                        </div>
                        <hr class="hr-clas" />
                        <div class="chat-box-left">
                        </div>
                        <div class="chat-box-name-left">
                            
                        </div>
                        <hr class="hr-clas" />
                        <div class="chat-box-right">
                        </div>
                        <div class="chat-box-name-right">
                            
                        </div>
                        <hr class="hr-clas" />
                    </div>
                    <div class="chat-box-footer">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter Text Here...">
                            <span class="input-group-btn">
                                <button class="btn btn-info" type="button">SEND</button>
                            </span>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="chat-box-online-div">
                    <div class="chat-box-online-head">
                        ONLINE USERS 
                    </div>
                    <div class="panel-body chat-box-online">

                        <div class="chat-box-online-left">
                            
                            <br />
                        </div>
                        <hr class="hr-clas-low" />

                        <div class="chat-box-online-right">
                            
                            <br />
                        </div>
                        <hr class="hr-clas-low" />
                        <div class="chat-box-online-left">
                            
                            <br />
                        </div>
                        <hr class="hr-clas-low" />

                        <div class="chat-box-online-right">
                           
                            <br />
                        </div>
                        <hr class="hr-clas-low" />
                        <div class="chat-box-online-left">
                            
                            <br />
                        </div>
                        <hr class="hr-clas-low" />

                        <div class="chat-box-online-right">
                           
                            <br />
                        </div>
                        <hr class="hr-clas-low" />
                        <div class="chat-box-online-left">
                            
                            <br />
                        </div>
                        <hr class="hr-clas-low" />

                        <div class="chat-box-online-right">
                            
                            <br />
                        </div>
                        <hr class="hr-clas-low" />
                    </div>

                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="chat-box-new-div">
                    <div class="chat-box-new-head">
                        NEW CHATS (4)
                    </div>
                    <div class="panel-body chat-box-new">


                    </div>

                </div>

            </div>
        </div>
    </div>-->

    <!-- USING SCRIPTS BELOW TO REDUCE THE LOAD TIME -->
    <!-- CORE JQUERY SCRIPTS FILE -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- CORE BOOTSTRAP SCRIPTS  FILE -->
    <script src="assets/js/bootstrap.js"></script>
               
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


  