<div align="center">
    <?php
    if($_SESSION['on']==0)
    {
        include("menus.php");
    }
    else
    {
        
        if(isset($_GET['invoice']))
        {
            include"invoicenav.php";
            include"cashform.php";
        }
        if(isset($_GET['cash']))
        {
            include"invoicenav.php";
            include"cashform.php";
        }
        if(isset($_GET['credit']))
        {
            include"invoicenav.php";
            include"creditform.php";
        }
       
        include"adduser.php";
         if(isset($_GET['adduser']))
        {
            
            include"userform.php";
        }
           if(isset($_GET['addpart1']))
        {
            
            include"enquirenav.php";
            include"storeform.php";
        }
        include"updatestore.php";
         if(isset($_GET['addpart']))
        {
             include"enquirenav.php";
            include"storeform.php";
        }
        include"addparts.php";
        if(isset($_GET['newenquire']))
        {
            include"enquirenav.php";
            include"partsform.php";
        }
          if(isset($_GET['storage']))
        {
            
            include"storage.php";
        }
        include"cash.php";
         if(isset($_GET['delete']))
        {
            include"invoicenav.php";
            include"deleteform.php";
        }
        include"delete.php";
         if(isset($_GET['report']))
        {
            
            include"reportfrom.php";
        }
        include"report.php";
         if(isset($_GET['updateuser']))
        {
            
            include"userupdateform.php";
        }
        include"updateuser.php";
        if(isset($_GET['receipt']))
        {
            include"invoicenav.php";
            include"receiptform.php";
        }
        include"receipt.php";
         
    }
    ?>
</div>