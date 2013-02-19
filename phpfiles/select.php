<?php
require('connection.php');

mysql_select_db('cookiewednesday',$con);

if (isset($_GET['SubmitSearch']) ){
	$query = $_GET['search'];
	$sql = "SELECT * FROM recipe WHERE rtitle = '$query' ";
	$result = mysql_query($sql);
}

if (mysql_num_rows($result) == 0){
	echo 'Nothing found.';
}

else{
	while($row = mysql_fetch_assoc($result)){
		echo $row['rtitle'];
		echo $row['rating'];
		$column[] =$row['rtitle'];
		 
	}
	
}

mysql_close($con);