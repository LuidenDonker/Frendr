<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Search Engine - Search</title>
<link href="search.css" type="text/css" rel="stylesheet" />

</head>
<body class="holder">
	<center>
	<img src="http://www.360websolution.com/images/logo2.png" style="margin-top:50px; margin-bottom:20px;" />
	<form action='results.php' method='get'>
		<input type='text' name='input' size='50' value='<?php echo $_GET['input']; ?>' class="sarch-field" /> 
		<input type='submit' value='Search 360' class="seach-button">
	</form>
    </center>
    <br/>
    
	<?php
		$input = $_GET['input'];
		$terms = explode(" ", $input);
		$query = "SELECT * FROM search WHERE ";
		
		if ($i == 1){
            $query .= "keywords LIKE '%$each%' ";
        }
        else {
            $query .= "OR keywords LIKE '%$each%' ";
        }

		// connecting to our mysql database
		mysql_connect("localhost", "root", "");
		mysql_select_db("test");
		
		$query = mysql_query($query);
		$numrows = mysql_num_rows($query);
		if ($numrows > 0){
			
			while ($row = mysql_fetch_assoc($query)){
				$id = $row['id'];
				$title = $row['title'];
				$description = $row['description'];
				$keywords = $row['keywords'];
				$link = $row['link'];
				echo "<h2><a href='$link'>$title</a></h2>
				$description<br /><br />";

			}
			
		}
		else
			echo "No results found for \"<b>$input</b>\"";
		
		// disconnect
		mysql_close();
	?>
</body>
</html>