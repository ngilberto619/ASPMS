<?php
if(isset($_GET['load']))
{
if(isset($_SESSION['Phone']))
{
?>
<script>
    window.print();
</script>
<?php
if(isset($_SESSION['Phone']))
{
$query2="select * from t".$_SESSION['Phone']." ";
$ex2=mysql_query($query2) or die("<div class='error'>Error! Not select 2</div>");
$total1=0;
$total=0;
while($row=mysql_fetch_array($ex2))
{
      $query3="select * from party_type where partID='".$row['partID']."'";
      $ex3=mysql_query($query3) or die("<div class='error'>Error! Not select 2</div>");
      $row3=mysql_fetch_array($ex3);
      $total1=$row3['price']*$row['quantity'];
      $total=$total+$total1;
     
}
if(isset($_SESSION['credit']))
{

$query="INSERT INTO  transaction_full (userID,customerName,customerAdress,customerPhone,paymentType,creditExpirationDate,totalMoney) VALUES
('".$_SESSION['user_id']."','".$_SESSION['customer']."','".$_SESSION['district']."','".$_SESSION['Phone']."','".$_SESSION['credit']."','".$_SESSION['date']."','".$total."')";

}
else
{
$query="INSERT INTO  transaction_full (userID,customerName,customerAdress,customerPhone,totalMoney) VALUES
('".$_SESSION['user_id']."','".$_SESSION['customer']."','".$_SESSION['district']."','".$_SESSION['Phone']."','".$total."')";
}
$ex=mysql_query($query) or die("<div class='error'>Error! Not inserted</div>");

$query3="select transactionID from transaction_full where customerPhone='".$_SESSION['Phone']."' order by time desc";
$ex3=mysql_query($query3) or die("<div class='error'>Error! Not select 2</div>");
$row3=mysql_fetch_array($ex3);
$query2="select * from t".$_SESSION['Phone']." ";
$ex2=mysql_query($query2) or die("<div class='error'>Error! Not select 2</div>");

while($row=mysql_fetch_array($ex2))
{
$query="INSERT INTO  transaction_details (transactionID,partID,quantity) VALUES
('".$row3['transactionID']."','".$row['partID']."','".$row['quantity']."')";
$ex=mysql_query($query) or die("<div class='error'>Error! Not inserted</div>"); 
}
?>
<h2>AUTO Spare Parts Receipt<br>
--------------------------------------------------------------------------------------------------------------------------------------------</h2>
<h3>Customer Name: <?php echo $_SESSION['customer'];?></h3><br>
<h3>Customer Address: <?php echo $_SESSION['district'];?></h3><br>
<h3>Customer Phone Number: <?php echo $_SESSION['Phone'];?></h3><br>
<h3>Receipt Identification Number: <?php ECHO $row3['transactionID'];?></h3>
------------------------------------------------------------------------------------------------------------------------------------------
<?php
$query2="select * from t".$_SESSION['Phone']." ";
$ex2=mysql_query($query2) or die("<div class='error'>Error! Not select 2</div>");
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
echo"-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------";
echo"<h3>The receipt is made on: ".date("m-d-y h:m:s")." <br> By: ".$_SESSION['First_Name']." ".$_SESSION['Last_Name']."</h3><br>";
echo"<h3>Approval: </h3>";
echo"<h3>Client Signatutre: </h3><br><br>";
echo"<h3>accountance Signatutre: </h3>";
}
}
?>

