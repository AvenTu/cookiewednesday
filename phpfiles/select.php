<?php
require('connection.php');

mysql_select_db("cookiewednesday",$con);

if (isset($_GET['SubmitSearch']) ){
	$query = $_GET['search'];
	$result = mysql_query("SELECT * FROM recipe WHERE rtitle LIKE '$query' ");
}

if ($result = 'resource(5, mysql result)'){
	echo 'nothing found';
}

else{
	while($row = mysql_fetch_assoc($result)){
		echo $row['rtitle'];
		echo $row['rating'];
		echo ' I work ';
	}
}



mysql_close($con);