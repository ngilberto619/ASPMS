<?php
 $_SESSION['on']=0;
if(isset($_GET['invoice'])||isset($_GET['adduser'])||isset($_GET['addpart1'])
   ||isset($_GET['addpart'])||isset($_GET['newenquire'])||isset($_GET['storage'])
   ||isset($_GET['cash']) || isset($_POST['save'])||isset($_GET['delete'])|| isset($_POST['delete'])|| isset($_POST['remove'])
   ||isset($_GET['credit'])||isset($_GET['report'])||isset($_POST['report'])||isset($_GET['updateuser'])||isset($_POST['save2'])
   ||isset($_GET['receipt'])||isset($_POST['receipt'])
   
   )
{
    $_SESSION['on']=1;
}
else if(isset($_GET['home']))
{
    $_SESSION['on']=0;
}
?>