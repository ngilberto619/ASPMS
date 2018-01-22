<?php 
include 'dbc.php';
?>
<div style="background-color:#7BA7E1;" id="divform1">        
<FORM METHOD=POST ACTION="home.php?newenquire" id="form1" name="form1"
enctype="multipart/form-data" onsubmit="return validateFormOnSubmit(this)">
      <FIELDSET>
<LEGEND>Parts Registration Form</LEGEND> <table align="center">
      <tr> <td class="field-caption" >
            <div align="left">
                <span style="font-size: 14px">
                        <Strong>Spare Part Name:</Strong>
                </span>
            </div>
            </td>
 <td><input name="partname" id="phone" type="text" class="dc-input" value=""required='required' placeholder="enter your part name"/>
      &nbsp;<font color="Red">*</font></td>
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
      
      <tr>
            <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>Spare Parts'Price:</Strong>
                </span>
        </div>
            </td>
     
            <td>
        <input name="price" id="phone" type="number" class="dc-input" value=""required='required' placeholder="  number  "/>
        &nbsp;Frw<font class="star" color="Red">*</font>
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
            <td colspan="2" align='left'> <INPUT TYPE="submit" name='addpart' value='REGISTER' class="btn-danger">
            </td>
      </tr>
</table>
</FIELDSET>
</FORM>
</div>
