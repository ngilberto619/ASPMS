<?php
if(isset($_POST['report']))
{
include"reportfrom.php";
$partid=$_POST['partid'];
$from=$_POST['from'];
$to=$_POST['to'];
if(isset($_POST['type']))
{
 foreach ($_POST['type'] as $value)
    {
        if($value=='out')
        {
$jquery1="SELECT count(*)  from transaction_full join transaction_details on transaction_details.transactionID=transaction_full.transactionID where (transaction_details.partID=".$partid." and ".$from.">=time<=".$to.")";

$jsend1=mysql_query($jquery1) or die("<div class='error'>Error! Not select 3</div>");
$jresult4=mysql_fetch_array($jsend1);
if($jresult4[0]!=0)
{
$jquery1="SELECT transaction_details.transactionID,transaction_full.userID,transaction_full.creditExpirationDate,transaction_full.time,transaction_full.paymentType,transaction_details.quantity,transaction_details.status
from transaction_full join transaction_details on transaction_details.transactionID=transaction_full.transactionID where (transaction_details.partID=".$partid." and ".$from.">=time<=".$to.")";
    $jsend1=mysql_query($jquery1) or die("<div class='error'>Error! Not select 3</div>");
    echo"<table align='center' id='reportO'>";
       echo"<tr>";
       echo"<th>Trasanction Number</th>";
       echo"<th>User Name</th>";
       echo"<th>Payment Type</th>";
       echo"<th>Quantity</th>";
       echo"<th>Status</th>";
       echo"<th>Time</th>";
       echo"</tr> ";
    while($jresult4=mysql_fetch_array($jsend1))
    {
      $query3="select * from loging where Id='".$jresult4['userID']."'";
      $ex3=mysql_query($query3) or die("<div class='error'>Error! Not select 2</div>");
      $row3=mysql_fetch_array($ex3);
     echo"<tr>";
       echo"<td>".$jresult4['transactionID']."</td>";
       echo"<td>".$row3['Username']."</td>";
       echo"<td>".$jresult4['paymentType']."";
       if($jresult4['paymentType']=="credit")
       {
        echo"<br>ExpDate: ".$jresult4['creditExpirationDate'];
       }
       echo"</td>";
       echo"<td>".$jresult4['quantity']."</td>";
       echo"<td>".$jresult4['status']."</td>";
       echo"<td>".$jresult4['time']."</td>";
       echo"</tr> ";
    }
    echo"</table>";
    }
    }
     if($value=='in')
        {
    
$jquery1="SELECT * from part_store where (partID=".$partid." and ".$from.">=time<=".$to.")";
    $jsend1=mysql_query($jquery1) or die("<div class='error'>Error! Not select 3</div>");
    echo"<table align='center' id='reportI'>";
       echo"<tr>";
       echo"<th>Boocking Number</th>";
       echo"<th>User Name</th>";
       echo"<th>location</th>";
       echo"<th>Quantity</th>";
       echo"<th>Status</th>";
       echo"<th>Time</th>";
       echo"</tr> ";
    while($jresult4=mysql_fetch_array($jsend1))
    {
      $query3="select * from loging where Id='".$jresult4['userID']."'";
      $ex3=mysql_query($query3) or die("<div class='error'>Error! Not select 2</div>");
      $row3=mysql_fetch_array($ex3);
     echo"<tr>";
       echo"<td>".$jresult4['storeID']."</td>";
       echo"<td>".$row3['Username']."</td>";
       echo"<td>".$jresult4['location']."</td>";
       echo"<td>".$jresult4['quantity']."</td>";
       echo"<td>".$jresult4['status']."</td>";
       echo"<td>".$jresult4['time']."</td>";
       echo"</tr> ";
    }
    echo"</table>";
    }
    }
}
else{
    $err="Please choose one of the Report Type";
    echo "<div class=\"alert alert-error\">";
    echo "<button type='button' class='close' data-dismiss='alert'>*</button>";
    echo "<strong> Error! </strong>";
    echo "$err <br>";
    echo "</div>";
}
}
?>