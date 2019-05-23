<?php
$ID=$_GET['JobId'];
$con=mysql_connect("localhost","root","");
mysql_select_db("project",$con);
$o= "delete from Job_Master where JobId='".$ID."'";
mysql_query($o);
mysql_close ($con);
	echo '<script type="text/javascript">alert("Job Deleted Succesfully");window.location=\'delete_job.php\';</script>';

?>