<?php
if(isset($_POST['update'])){
    $id2=$_POST['partname'];
    $quantity=$_POST['quantity'];
    $user=$_POST['user'];
    $local=$_POST['local'];
    $almoire=$_POST['almoire'];
    $trihoire=$_POST['trihoire'];
         $query3="INSERT INTO part_store (partID, userID, quantity, location) VALUES (
         '".$id2."', '".$user."', '".$quantity."' , '".$local."/".$almoire."/".$trihoire."')";
         $ex3=mysql_query($query3) or die(" ");
         $query2="select quantity from actual_storage where partID='".$id2."'";
         $ex2=mysql_query($query2) or die("<div class='error'>Error! Not select 2</div>");
         $row2=mysql_fetch_array($ex2);
         $total1=0;
         $total1=$quantity+$row2['quantity'];
        $query3=" update actual_storage set quantity='".$total1."' where partID='".$id2."'";
         $ex3=mysql_query($query3) or die(" ");
         if($ex3)
         {
         echo "<div class='error'>the store is Updated</div>";
        }
         
 
}
       
?>
