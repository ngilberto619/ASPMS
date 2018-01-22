
<?php
if(isset($_POST['receipt']))
{
include"invoicenav.php";
$_SESSION['transactionID']=$_POST['receiptID'];
$query3="select * from transaction_full where transactionID='".$_SESSION['transactionID']."'";
$ex3=mysql_query($query3) or die("<div class='error'>Error! Not select 2</div>");
$row3=mysql_fetch_array($ex3);
$query2="select * from transaction_details where transactionID='".$_SESSION['transactionID']."'";
$ex2=mysql_query($query2) or die("<div class='error'>Error! Not select 2</div>");
if(isset($row3['customerName'])){
      echo "<br>Customer Name: ".$row3['customerName']."</h3><br>";
echo "Customer Address: ".$row3['customerAdress']."</h3><br>";
echo "Customer Phone Number: 0". $row3['customerPhone']."</h3><br>";
echo "Receipt Identification Number: ". $row3['transactionID']."<br>";
echo "Done on: ". $row3['time']."</h3>";
echo"<table align='center' id='receiptT'>";
       echo"<tr>";
       echo"<th>cloth Name</th>";
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
}
else{
    $err="Receipt Identification number not find in the system";
           echo "<div class=\"alert alert-error\">";
           echo "<button type='button' class='close' data-dismiss='alert'>*</button>";
          echo "<strong> Error! </strong>";
         echo "$err <br>";
          echo "</div>";
    include"receiptform.php";
}

}
?>