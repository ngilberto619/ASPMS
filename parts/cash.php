<?php
if(isset($_POST['save']))
{

$partid=$_POST['partid'];
$quantity=$_POST['quantity'];
if(!isset($_SESSION['Phone']))
{
if(isset($_POST['credit']))
{
$_SESSION['credit']=$_POST['credit'];
$_SESSION['date']=$_POST['date'];
}
$_SESSION['customer']=$_POST['customer'];
$_SESSION['district']=$_POST['district'];
$_SESSION['Phone']=$_POST['Phone'];

$query="create table t".$_SESSION['Phone']." (partID int,quantity int)";
$ex=mysql_query($query) or die("<div class='error'>Error! Not inserted</div>");
}
$SQL2="SELECT count(*) FROM  transaction_full WHERE customerPhone='".$_SESSION['Phone']."' and paymentType='credit'";
	$SQL2 =mysql_query($SQL2);
        $result2=mysql_fetch_array($SQL2);
	 if($result2[0]==0)
	 {
$SQL="SELECT quantity FROM actual_storage WHERE partID='".$partid."'";
	$SQL1 =mysql_query($SQL);
        $result=mysql_fetch_array($SQL1);
	 if($result[0]<$quantity){
            $err="not enorth in the storage";
    echo "<div class=\"alert alert-error\">";
    echo "<button type='button' class='close' data-dismiss='alert'>*</button>";
    echo "<strong> Error! </strong>";
    echo "$err <br>";
    echo "</div>";
    include"invoicenav.php";
     include"cashform2.php";

         }
else{
include"invoicenav.php";
include"cashform2.php";

$query1="select quantity from actual_storage where partID=".$partid."";
$ex1=mysql_query($query1) or die("<div class='error'>Error! Not select 2</div>");
$row1=mysql_fetch_array($ex1);
$difference=0;
$difference=$row1['quantity']-$quantity;
$query1="update actual_storage set quantity=".$difference." where partID=".$partid."";
$ex1=mysql_query($query1) or die("<div class='error'>Error! Not select 2</div>");

$query="INSERT INTO t".$_SESSION['Phone']." (partID,quantity) VALUES ('".$partid."','".$quantity."')";
$ex=mysql_query($query) or die("<div class='error'>Error! Not inserted</div>");
$query2="select * from t".$_SESSION['Phone']." ";
$ex2=mysql_query($query2) or die("<div class='error'>Error! Not select 2</div>");
echo"<table align='center' id='storaget'>";
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
      echo"<tr><td>".$row3['partName']."</td><td>".$row['quantity']."</td><td>".$total1." Frw</td></tr>";
}
echo"</table><h3>THe Sum is ".$total." Frws </h3>";
}
 }
else{
    $err="Please Conctact The Accountance. You have  Credit not paid";
    echo "<div class=\"alert alert-error\">";
    echo "<button type='button' class='close' data-dismiss='alert'>*</button>";
    echo "<strong> Error! </strong>";
    echo "$err <br>";
    echo "</div>";
    include"invoicenav.php";
    include"cashform.php";

}
}
?>