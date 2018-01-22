<?php 
include 'dbc.php';
?>
<div style="background-color:white;" id="divform1">      
<FORM METHOD=POST ACTION="home.php?addpart" id="form1" name="form1"
enctype="multipart/form-data" onsubmit="return validateFormOnSubmit(this)">
      <FIELDSET>
<LEGEND>Update The Store Registration Form</LEGEND> <table align="center">
      <tr> <td class="field-caption" >
            <div align="left">
                <span style="font-size: 14px">
                        <Strong>Spare Part Name:</Strong>
                </span>
            </div>
            </td>
 <td>
      <select name="partname">
            <?php
         $query2="select * from party_type";
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
<td class="field-caption" >
<div align="left">
<span style="font-size: 14px">
                        <Strong>Spare Part Quantity:</Strong>
                </span>
        </div>
            </td>
      
            <td>
        <input name="quantity" type="number" id="phone" class="dc-input" value=""required='required' placeholder="  number " />
        &nbsp;<font class="star" color="Red">*</font>
            </td>
      </tr>
      
<tr> <td class="field-caption" ><div align="left"> <span
style="font-size: 14px">
        <Strong>Spare Part Location:</Strong>
</span> </div> </td> <td>
Local:   <input id="dateDay"   name="local"   type="text" size="2" />
almoire: <input id="dateMonth" name="almoire" type="text" size="2"/>
trihoire:  <input id="dateYear"  name="trihoire"  type="text" size="4"/>
&nbsp;<font color="Red">*</font>
 </td>
</tr>
     
 <INPUT name="user" type="hidden" class="dc-input" value="<?php echo $_SESSION['user_id']?>"/>
      
      <tr>
            <td colspan="2" align='left'> <INPUT TYPE="submit" name='update' value='REGISTER' class="btn-danger">
            </td>
      </tr>
</table>
</FIELDSET>
</FORM>
</div>
