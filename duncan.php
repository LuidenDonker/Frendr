<?php
header("Access-Control-Allow-Origin: *");
  //zet dit boven aan in de header
  $servername = "localhost";
  $username = "jelletd163_user";
  $password = "jellek95";
  $dbname = "jelletd163_frendr";

//open connection to mysql db
    $connection = mysqli_connect($servername,$username,$password,$dbname) or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "select * from interesses";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);
    //close the db connection
    mysqli_close($connection);
?>
<?php
    for($x=0; $x<$emparray.length; $x++){
    for($y=0; $y<$emparray[0].length; $y++){
        echo $emparray[x][y];
    }
    }

?>