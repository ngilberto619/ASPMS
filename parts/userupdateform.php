<div style="background-color:white;" id="divform1">
<a class="btn btn-default btn-warning" href="home.php?home"><strong>Home &raquo;</strong></a><br><br>   
<form METHOD=POST ACTION="home.php" id="form1" name="form1" enctype="multipart/form-data" onsubmit="return validateFormOnSubmit(this)">
      <FIELDSET>
<LEGEND>Update User Status</LEGEND> <table align="center">
<tr> <td class="field-caption" >
            <div align="left">
                <span style="font-size: 14px">
                        <Strong>UserName:</Strong>
                </span>
            </div>
            </td>
 <td>
      <select name="userid">
            <?php
         $query2="select * from loging order by Username asc";
         $ex2=mysql_query($query2) or die("<div class='error'>Error! Not select 2</div>");
         while($row=mysql_fetch_array($ex2))
         {
          echo"<option value='".$row['Id']."'>".$row['Username']."</option>" ; 
         }
 ?>
      </select>
 </td>
</tr>
<tr> <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>The User Status:</Strong>
                </span>
        </div>
</td> <td>
 <select name="type">
            <option value="Seller">Seller</option>
            <option value="Supervisor">Supervisor</option>
            <option value="Manager">Manager</option>
            <option value="Not a User">Not a User</option>
        </select>
    &nbsp;<font class="star" color="Red">*</font>
</td>
</tr>

<tr>
<td colspan="2" align='right'> <INPUT TYPE="submit" name='save2' value='Save' class="btn-danger"> </td> </tr> </table>
</FIELDSET>
</form>
</div>