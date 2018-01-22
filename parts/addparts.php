<?php
if(isset($_POST['addpart'])){
    $partname=$_POST['partname'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $user=$_POST['user'];
    $local=$_POST['local'];
    $almoire=$_POST['almoire'];
    $trihoire=$_POST['trihoire'];
    $SQL="SELECT count(*) FROM party_type WHERE partName='".$_POST['partname']."'";
	$SQL1 =mysql_query($SQL);
        $result=mysql_fetch_array($SQL1);
	 if($result[0]==0){ 
         $query="INSERT INTO party_type (partName,price) VALUES (
         '".$partname."', '".$price."')";
        $ex=mysql_query($query) or die("<div class='error'>Error! Not inserted</div>");
        $query2="select partID from party_type where partName='".$partname."' and price='".$price."'";
    
         $ex2=mysql_query($query2) or die("<div class='error'>Error! Not select 2</div>");
         $row=mysql_fetch_array($ex2);
        $id2= $row['partID'];
         $query3="INSERT INTO part_store (partID, userID, quantity, location) VALUES(
         '".$id2."', '".$user."', '".$quantity."' , '".$local."/".$almoire."/".$trihoire."')";
         $ex3=mysql_query($query3) or die(" ");
         $query3="INSERT INTO actual_storage (partID, quantity) VALUES(
         '".$id2."','".$quantity."')";
         $ex3=mysql_query($query3) or die(" ");
         if($ex3)
         {
         echo "<div class='alert alert-error'>Part Registered</div>";
        }
         }else{
            $err="Please the part is registred";
    echo "<div class=\"alert alert-error\">";
    echo "<button type='button' class='close' data-dismiss='alert'>*</button>";
    echo "<strong> Error! </strong>";
    echo "$err <br>";
    echo "</div>";
         }
}
       
?>
