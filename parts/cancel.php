<?php
if(isset($_GET['cancel']))
{
if(isset($_SESSION['Phone']))
{
$query2="select * from t".$_SESSION['Phone']." ";
$ex2=mysql_query($query2) or die("<div class='error'>Error! Not select 2</div>");
while($row=mysql_fetch_array($ex2))
{

$add=0;
$query1="select quantity from actual_storage where partID=".$row['partID']."";
$ex1=mysql_query($query1) or die("<div class='error'>Error! Not select 2</div>");
$row1=mysql_fetch_array($ex1);
$add=$row['quantity']+$row1['quantity'];
$query1="update actual_storage set quantity=".$add." where partID=".$row['partID']."";
$ex1=mysql_query($query1) or die("<div class='error'>Error! Not select 2</div>");
}

$query="drop table IF EXISTS t".$_SESSION['Phone']."";
$ex=mysql_query($query) or die("<div class='error'>Error! Not drop</div>");
}

if(isset($_SESSION['credit']))
{
unset($_SESSION['credit']);
unset($_SESSION['date']); 
}
unset($_SESSION['customer']);
unset($_SESSION['district']);
unset($_SESSION['Phone']);
}
?>