<div style="background-color:white;" id="divform1">
 <a class="btn btn-default btn-warning" href="home.php?home"><strong>Home &raquo;</strong></a><br><br>        
<form METHOD=POST ACTION="home.php" id="form1" name="form1" enctype="multipart/form-data" onsubmit="return validateFormOnSubmit(this)">
      <FIELDSET>
<LEGEND>Report form Entry</LEGEND> <table align="center">
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
                        <Strong>Report From: </Strong>
                </span>
        </div>

        <input name="from" type="date" id="phone"class="dc-input" value="" required='required'placeholder="number" />
        &nbsp;<font class="star" color="Red">*</font>
</td>
<td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong> To : </Strong>
                </span>
        </div>

        <input name="to" type="date" id="phone"class="dc-input" value="" required='required'placeholder="number" />
        &nbsp;<font class="star" color="Red">*</font>
</td>

</tr>
<tr>
<td>
      
                <span style="font-size: 14px">
                        <Strong>Report Type: </Strong>
                </span>
        

       Part INPUT:
       <input name="type[]" id="phone" type="checkbox" class="dc-input" value="in" />
       </td>
<td>
       Part OUTPUT :
       <input name="type[]" id="phone" type="checkbox" class="dc-input" value="out" />
       </td>

</tr>
<tr>
<td colspan="2" align='right'> <INPUT TYPE="submit" name='report' value='Search' OnClientClick="callPrint("strid")" class="btn-danger"> </td> </tr> </table>
</FIELDSET>
</form>
</div>