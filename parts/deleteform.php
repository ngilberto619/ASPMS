<div style="background-color:white;" id="divform1">
<form METHOD=POST ACTION="home.php" id="form1" name="form1" enctype="multipart/form-data" onsubmit="return validateFormOnSubmit(this)">
      <FIELDSET>
<LEGEND>Delete Unvalids Receipt</LEGEND>
<table align="center">
<tr> <td
class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>Receipt Identification number:</Strong>
                </span>
        </div>
</td> <td>
        <input name="receiptID" id="phone" type="text" class="dc-input" value="" required='required' placeholder=" Receipt ID" />
        &nbsp;<font class="star" color="Red">*</font>
</td>
</tr>
<tr>
<td colspan="2" align='right'> <INPUT TYPE="submit" name='delete' value='search' class="btn-danger"> </td> </tr> </table>
</FIELDSET>
</form>
</div>