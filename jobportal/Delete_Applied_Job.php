<?php
$ApplicationId=$_GET['ApplicationId'];
$con=mysql_connect("localhost","root","");
mysql_select_db("project",$con);
					  
					  
					  $o="delete from application_master where ApplicationId='".$ApplicationId."'";
					  mysql_query($o);
					  echo '<script type="text/javascript">alert("Succesfully Delete  Job");window.location=\'Applied_Job.php\';</script>';
					 
?>
