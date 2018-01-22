<?php 
include 'dbc.php';
?>
<div style="background-color:white;" id="divform1">
<a class="btn btn-default btn-warning" href="home.php?home"><strong>Home &raquo;</strong></a><br><br>        
<FORM METHOD=POST ACTION="home.php?storage" id="form1" name="form1"
enctype="multipart/form-data" onsubmit="return validateFormOnSubmit(this)">
      <FIELDSET>
<LEGEND>The Storage Form</LEGEND> <table align="center">
      <tr> <td class="field-caption" >
            <div align="left">
                <span style="font-size: 14px">
                        <Strong>Spare Part Name:</Strong>
                </span>
            </div>
            </td>
 <td>
      <select name="partid">
      <option value="all">All</option>
            <?php
         $query2="select * from party_type  order by partName asc";
         $ex2=mysql_query($query2) or die("<div class='error'>Error! Not select 2</div>");
         while($row=mysql_fetch_array($ex2))
         {
          echo"<option value='".$row['partID']."'>".$row['partName']."</option>" ; 
         }
 ?>
      </select>
 </td>
</tr>
  
      <tr>
            <td colspan="2" align='left'> <INPUT TYPE="submit" name='storage' value='Search' class="btn-danger">
            </td>
      </tr>
</table>
</FIELDSET>
</FORM>
</div>
<?php
if(isset($_POST['storage']))
{
       $partid=$_POST['partid'];
       if($partid=="all")
       {
       $query2="select * from party_type order by partName asc";
       $ex2=mysql_query($query2) or die("<div class='error'>Error! Not select 2</div>");
       echo"<table align='center' id='storaget'>";
       echo"<tr>";
       echo"<th>Part Name</th>";
       echo"<th>Location</th>";
       echo"<th>Quantity</th>";
       echo"</tr> ";
       while($row=mysql_fetch_array($ex2))
       {
       $query3="select quantity, location from  part_store where partID='".$row['partID']."' ";
       $ex3=mysql_query($query3) or die("<div class='error'>Error! Not select 2</div>");
       $total=0;
       echo"<tr><td>".$row['partName']."</td>
       <td>";
       while($row3=mysql_fetch_array($ex3))
       {
            $local=$row3['location'];
       }
       echo $local;
       $query3="select quantity from  actual_storage where partID='".$row['partID']."' ";
       $ex3=mysql_query($query3) or die("<div class='error'>Error! Not select 2</div>");
       $row3=mysql_fetch_array($ex3);
      echo"</td>
      <td>".$row3['quantity']." </td>";
       }
       }
       else
       {
       $query2="select * from party_type where partID='".$partid."'";
       $ex2=mysql_query($query2) or die("<div class='error'>Error! Not select 2</div>");
       $row=mysql_fetch_array($ex2);
       $query3="select quantity, location from  part_store where partID='".$partid."' ";
       $ex3=mysql_query($query3) or die("<div class='error'>Error! Not select 2</div>");
       $total=0;
       while($row3=mysql_fetch_array($ex3))
       {
            $total=$total+$row3['quantity'];
            $local=$row3['location'];
       }
       echo"<h3 align='center'>There is <strong>".$total." </strong> of <strong>".$row['partName']." </strong>in the storage at location ".$local."</h3>";
       }
}
?>