<?php

function searchBar(){

if (isset($_GET['SubmitSearch']) ){
	$search = $_GET['search'];
}

	
echo "
	<FORM NAME ='searchbar' METHOD ='GET' ACTION = 'select.php'>
	<INPUT TYPE = 'Text'  NAME = 'search'>
	<INPUT TYPE = 'Submit' Name = 'SubmitSearch' VALUE = 'Search'>
	</FORM>";
}
?>