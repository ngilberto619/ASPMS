<?php
$true="false";
if(isset($_POST['UserLogin']))
{
$SQL="SELECT count(*) FROM loging WHERE username='".$_POST['username']."'
	 AND password='".md5($_POST['Password'])."'";
	$SQL1 =mysql_query($SQL);
        $result=mysql_fetch_array($SQL1);
	 if($result[0]==0){ 
          $err="Enter Correct username and password";
	 }
	 else{  
            $SQL="SELECT * FROM loging  WHERE username='".$_POST['username']."'
	 AND password='".md5($_POST['Password'])."'";
	 $date=mysql_fetch_array(mysql_query($SQL));
	 $_SESSION['user_id']=$date['Id'];
         $SQL2="SELECT * FROM user WHERE Id='".$_SESSION['user_id']."'";
	 $date2=mysql_fetch_array(mysql_query($SQL2));
	 $_SESSION['Last_Name']=$date2['Lastname'];
	 $_SESSION['First_Name']=$date2['Firstname'];
	 $_SESSION['picture']=$date2['Picture'];
         $_SESSION['Status']=$date2['Status'];
	 if($_SESSION['Status']!="Not a User")
	 {
	 header("Location: home.php");
	 }
	 else{
	  $err=$_SESSION['Last_Name']." ".$_SESSION['First_Name']." user not allowed to entre in the system";
	 }
	 }
}
?>