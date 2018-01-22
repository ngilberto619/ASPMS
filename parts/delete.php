<?php
if(isset($_POST['delete']))
{
include"invoicenav.php";
$_SESSION['transactionID']=$_POST['receiptID'];
$query3="select * from transaction_full where transactionID='".$_SESSION['transactionID']."'";
$ex3=mysql_query($query3) or die("<div class='error'>Error! Not select 2</div>");
$row3=mysql_fetch_array($ex3);
$query2="select * from transaction_details where transactionID='".$_SESSION['transactionID']."'";
$ex2=mysql_query($query2) or die("<div class='error'>Error! Not select 2</div>");
if(isset($row3['customerName']))
{
echo "<br>Customer Name: ".$row3['customerName']."</h3><br>";
echo "Customer Address: ".$row3['customerAdress']."</h3><br>";
echo "Customer Phone Number: ". $row3['customerPhone']."</h3><br>";
echo "Recut Identification Number: ". $row3['transactionID']."</h3>";

echo"<table align='center' id='receiptT'>";
       echo"<tr>";
       echo"<th>Part Name</th>";
       echo"<th>Quantity</th>";
       echo"<th>Price</th>";
       echo"</tr> ";
       $total1=0;
       $total=0;
while($row=mysql_fetch_array($ex2))
{
      $query3="select * from party_type where partID='".$row['partID']."'";
      $ex3=mysql_query($query3) or die("<div class='error'>Error! Not select 2</div>");
      $row3=mysql_fetch_array($ex3);
      $total1=$row3['price']*$row['quantity'];
      $total=$total+$total1;
      echo"<tr><td align='left'>".$row3['partName']."</td><td align='center'>".$row['quantity']."</td><td align='right'>".$total1." Frw</td></tr>";
}
echo"<tr><td>Total <td> <td align='right' colspan='2'>".$total." Frw</td></tr>";
echo"</table>";
echo"
<div style='background-color:white;' id='divform1'>
<form METHOD=POST ACTION='home.php' id='form1' name='form1' >
<INPUT TYPE='submit' name='remove' value='Remove' class='btn-danger'>
<form>
</div>
";
}
else{
    $err="Receipt Identification number not find in the system";
           echo "<div class=\"alert alert-error\">";
           echo "<button type='button' class='close' data-dismiss='alert'>*</button>";
          echo "<strong> Error! </strong>";
         echo "$err <br>";
          echo "</div>";
          include"deleteform.php";
    
 
}
}
if(isset($_POST['remove']))
{
$query2="select * from transaction_details where  transactionID='".$_SESSION['transactionID']."'";
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
$query="DELETE FROM `transaction_full` WHERE transactionID=".$_SESSION['transactionID']."";
$ex=mysql_query($query) or die("<div class='error'>Error! Not drop</div>");
if($ex)
echo"<h2>the transaction is successfull</h2>";
unset($_SESSION['transactionID']);
include"menus.php";
}
?>