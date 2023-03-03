<?php
define('HOST','localhost');
define('USERNAME','root');
define('PWD', '');
define('DB', 'bus');

$connection=mysqli_connect(HOST,USERNAME,PWD,DB);
if($connection){
	//echo "DatabaseConnect";
}
else{
	die("DatabassNotconnect".mysqli_connect_error());
}

?>