<?php 
session_start();
include 'dbc.php';
if(isset($_GET['logout'])){
session_destroy();
unset($_SESSION['user_id']);
unset($_SESSION['Last_Name']);
unset($_SESSION['First_Name']);
unset($_SESSION['picture']);
unset($_SESSION['Status']);
}
include"cancel.php";
include"session.php";
?>
<!doctype html>
<html>
  <head>
    <title>AUTO Spare Parts Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <link rel="icon"  sizes="32x32" href="images/icon.jpg" />  
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <script src="html5shiv.min.js"></script>
    <script src="respond.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script language="JavaScript" type="text/javascript" src="js/jquery.validate.js"></script>
  	<script>
  		$(document).ready(function(){
    	$("#logForm").validate();
  		});
  	</script>
 
</head>
<body>
<?php
if(isset($_SESSION['user_id'])&& !isset($_GET['load'])&&($_SESSION['Status']!="Not a User"))
{
include "heard.php";
include "change.php";
include "container.php";
}
if(empty($_SESSION['user_id'])||$_SESSION['Status']=="Not a User")
{
  include "index.php";
}
 include"load.php";  

?>
</body>
</html>
