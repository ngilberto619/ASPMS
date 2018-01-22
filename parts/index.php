<!doctype html>
<html>
  
  <head>
    <title>AUTO Spare Parts Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
	<script src="js/jquery.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.validate.js"></script>
  	<script>
  		$(document).ready(function(){
    	$("#logForm").validate();
  		});
  	</script>


</head>
<body>

		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<i class="icon-unlock-alt"></i>
							Sign in to access your account</small>
					</a><!--/.brand-->				
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>
        <!-- login box---->         
<table width="100%" border="0" cellspacing="0" cellpadding="5" class="main">
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" valign="top"><p>&nbsp;</p>
      <p>&nbsp; </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    <td width="732" valign="top">  
		<p>
        	<?php
			  /******************** ERROR MESSAGES*************************************************
			  This code is to show error messages 
			  **************************************************************************/
			  if(!empty($err))
			  {
				  
			   echo "<div class=\"alert alert-error\">";
			   echo "<button type='button' class='close' data-dismiss='alert'>×</button>";
			  
				  echo "<strong> Error! </strong>";
				  echo "$err <br>";
				
			  echo "</div>";	
			   }
			  /******************************* END ********************************/	  
			?>
        </p>
		<div class="container">
		<a href="../index.php" class="btn btn-primary">Home</a>
		</div>
      <form action="home.php" method="post" name="logForm" id="logForm" >
        <table width="65%" border="0" cellpadding="4" cellspacing="4" class="loginform" align="center">
          <tr> 
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr> 
            <td width="28%">Username / Email</td>
            <td width="72%"><input name="username" type="text" class="required" id="txtbox"></td>
          </tr>
          <tr> 
            <td>Password</td>
            <td><input name="Password" type="Password" class="required password" id="txtbox" ></td>
	  </tr>
          <tr> 
            <td colspan="2"> <div align="center"> 
                <p> 
                  <input name="UserLogin" type="submit" id="doLogin3" value="Login">
                </p>
                </p>
                <p><span style="font: normal 20px verdana">Welcome to <a href="http://php-login-script.com">ASPMS</a></span></p>
              </div></td>
          </tr>
        </table>
        <div align="center"></div>
        <p align="center">&nbsp; </p>
      </form>
      <p>&nbsp;</p>
	   
      </td>
    <td width="196" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>

</body>
</html>
