<?php 
include 'dbc.php';
?>
<script language="javascript">
function reload2(passwoord, passwoord2){
if (passwoord!=passwoord2) {
      alert("the passwoord are not the Same please correct");
      document.getElementById('passwoord').focus();
      document.getElementById('passwoord').value="";
      document.getElementById('passwoord2').focus();
      document.getElementById('passwoord2').value="";
}
}
</script>
<div style="background-color:white;" id="divform1">
<a class="btn btn-default btn-warning" href="home.php?home"><strong>Home &raquo;</strong></a><br><br>        
<FORM METHOD=POST ACTION="home.php?adduser" id="form1" name="form1"
enctype="multipart/form-data" onsubmit="return validateFormOnSubmit(this)">
      <FIELDSET>
<LEGEND>User Registration Form</LEGEND> <table align="center">
      <tr> <td class="field-caption" >
            <div align="left">
                <span style="font-size: 14px">
                        <Strong>Enter Your Last Name:</Strong>
                </span>
            </div>
            </td>
 <td><input name="lastname" id="phone" type="text" class="dc-input" value="" required='required' placeholder="enter your last name"/>
      &nbsp;<font color="Red">*</font></td>
</tr>
      <tr>
            <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>Enter Your First Name:</Strong>
                </span>
        </div>
            </td>
         
            <td>
        <input name="firstname" id="phone" type="text" class="dc-input" value=""required='required' placeholder="enter your first name"/>
        &nbsp;<font class="star" color="Red">*</font>
            </td>
      </tr>
      
      <tr>
            <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>Enter Your Email: </Strong>
                </span>
        </div>
            </td>
      
            <td>
        <input name="Email" type="email" id="phone" class="dc-input" value=""required='required' placeholder="example@yahoo.com" />
        &nbsp;<font class="star" color="Red">*</font>
            </td>
      </tr>
      
      <tr>
            <td class="field-caption" >
        <div align="right">
                <span style="font-size: 14px">
                        <Strong>Male:</Strong>
                </span> <input type="radio" name="Gender" value="1">
        </div>
            </td>
     
            <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>Female:</Strong>
                </span> <input type="radio" name="Gender" value="0" checked>
        </div>
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
        </select>
    &nbsp;<font class="star" color="Red">*</font>
</td>
</tr>
      <tr>
            <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>Enter Your Username: </Strong>
                </span>
        </div>
            </td>
     
            <td>
        <input name="Username" id="phone" type="text" class="dc-input" value=""required='required' placeholder="enter your user name"/>
        &nbsp;<font class="star" color="Red">*</font>
            </td>
      </tr>

      <tr>
            <td class="field-caption" >
                  <div align="left"> <span style="font-size: 14px">
                        <Strong>Enter Your PassWord:</Strong>
                              </span>
                  </div>
            </td>
      
            <td>
        <INPUT NAME="Password" id="passwoord" type="password" class="dc-input" value=""required='required' placeholder="enter your password">
            &nbsp;<font class="star" color="Red">*</font>
            </td>
      </tr>
      
      <tr>
            <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>Confirm Your PassWord:</Strong>
                </span>
        </div>
            </td>
      
            <td>
 <INPUT id="passwoord2" type="password" class="dc-input" value=""required='required' placeholder="retype your password"
        onchange="return reload2(document.getElementById('passwoord').value, document.getElementById('passwoord2').value)">
    &nbsp;<font class="star" color="Red">*</font>
            </td>
      </tr>
      
      <tr>
            <td class="field-caption" > <div align="left"><span
style="font-size: 14px">
<Strong>Choose Your Profile Picture:</Strong> </span>
</div>
            </td>
        <td>
        <input name="picture" type="file" class="dc-input"
        value=""/> &nbsp;<font class="star" color="Red">*</font>
            </td>
      </tr>

      <tr>
            <td class="field-caption" >
        <div align="left">
                <span style="font-size: 14px">
                        <Strong>Your Phone Number:</Strong>
                </span>
        </div>
            </td>
     
            <td>
                
   <INPUT   maxlength="15" name="Phone" id="phone" type="tel" pattern="^\d{10}$"  class="dc-input" value="" required='required' placeholder="Phone Number" >
    &nbsp;<font class="star" color="Red">*</font>              

      </tr> 

      <tr>
            <td colspan="2" align='left'> <INPUT TYPE="submit" name='addUserButton' value='REGISTER_USER' class="btn-danger">
            </td>
      </tr>
</table>
</FIELDSET>
</FORM>
</div>
