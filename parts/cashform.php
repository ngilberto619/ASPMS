<?php 
include 'dbc.php';
?>
<script language="javascript">
 function reload()
{
province=encodeURIComponent(document.getElementById("provincee").value);
if (province=="North") {
document.getElementById("district").innerHTML="<option value='Musanze'>Musanze</option><option value='Gakenke'>Gakenke</option>";
}
else if (province=="South") {
document.getElementById("district").
innerHTML="<option value='Ruhango'>Ruhango</option><option value='Nyanza'>Nyanza</option><option value='Huye'>Huye</option><option value='Nyamagabe'>Nyamagabe</option><option value='Nyaruguru'>Nyaruguru</option><option value='Gisagara'>Gisagara</option>";
}
else if (province=="East") {
document.getElementById("district").
innerHTML="<option value='Bugesera'>Bugesera</option><option value='Ngoma'>Ngoma</option>";
}
else if (province=="West") {
document.getElementById("district").
innerHTML="<option value='Ruhango'>Rubavu</option><option value='Nyamasheke'>Nyamasheke</option>";
}
else if (province=="Kigali")
{
document.getElementById("district").
//innerHTML="<option value='Ruhango'>Rubavu</option><option value='Nyamasheke'>Nyamasheke</option>";
innerHTML="<option value='Nyarugenge'>Nyarugenge</option><option value='Kicukiro'>Kicukiro</option><option value='Gasabo'>Gasabo</option>";	
}
}
</script>
<div style="background-color:white;" id="divform1">
         
<form METHOD=POST ACTION="home.php" id="form1" name="form1" enctype="multipart/form-data" onsubmit="return validateFormOnSubmit(this)">
      <FIELDSET>
<LEGEND>Payment Entry</LEGEND> <table align="center">

<tr> <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>Customer Name:</Strong>
                </span>
        </div>
</td> <td>
        <input name="customer" id="phone" type="text"  class="dc-input" value="" required='required' placeholder="Last Name" />
        &nbsp;<font class="star" color="Red">*</font>
</td>
</tr>
  <tr>
      <td class="field-caption" ><div align="left"><span
      style="font-size:14px"><Strong>PROVINCE</Strong>
      </span>
      </div>
      </td>
 <td> <select name="provincee" id="provincee" size="1" onchange="reload()">
      <font color="Red" >*</font>                                        
<option value="South">South</option>
<option value="Kigali">Kigali</option>
<option value="North">North</option>
<option value="East">East</option>
<option value="West">West</option>
</SELECT>
&nbsp;<font color="Red">*</font></td>
</tr>
 <tr>
      <td class="field-caption" ><div align="left"><span
      style="font-size:14px"><Strong>Districts</strong>
      </span>
      </div>
      </td>
 <td>
<select name='district' id='district' >
</select>
&nbsp;<font color="Red">*</font></td>
</tr>
                         
<tr> <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>Phone Number:</Strong>
                    
                </span>
        </div>
</td> <td>
 <INPUT   maxlength="15" name="Phone" id="phone" type="tel" pattern="^\d{10}$"  class="dc-input" value="" required='required' placeholder="Phone Number" >
    &nbsp;<font class="star" color="Red">*</font>
</td> 
</tr>
<tr> <td class="field-caption" >
            <div align="left">
                <span style="font-size: 14px">
                        <Strong>Part Name:</Strong>
                </span>
            </div>
            </td>
   
    
 <td>
      <select name="partid">
            <?php
         $query2="select * from party_type order by partName asc";
         $ex2=mysql_query($query2) or die("<div class='error'>Error! Not select 2</div>");
         while($row=mysql_fetch_array($ex2))
         {
          echo"<option value='".$row['partID']."'>".$row['partName']."</option>" ; 
         }
 ?>
      </select>
 </td>
</tr>
 <tr> <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>Parts Quantity: </Strong>
                </span>
        </div>
</td> <td>
        <input name="quantity" type="number" id="phone"class="dc-input" value="" required='required'placeholder="number" />
        &nbsp;<font class="star" color="Red">*</font>
</td>
</tr>         
          

<tr> <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>Price: </Strong>
                </span>
        </div>
</td> <td>
        <input name="Price" type="number" id="phone"class="dc-input" value="" required='required'placeholder="number" />
        &nbsp;<font class="star" color="Red">*</font>
</td>
</tr>


<tr>
<td colspan="2" align='right'> <INPUT TYPE="submit" name='save' value='Save' class="btn-danger"> </td> </tr> </table>
</FIELDSET>
</form>
</div>