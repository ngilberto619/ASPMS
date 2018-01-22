<div align="center">
<a class="btn btn-default btn-warning" href="home.php?home"><strong>Home &raquo;</strong></a><br><br>
<?php
if($_SESSION['Status']=="Manager")
{
?>
<a class="btn btn-default btn-success" href="home.php?newenquire"><strong>New Spare Part &raquo;</strong></a>
<?php
}
?>

<a class="btn btn-default btn-success" href="home.php?addpart"><strong>UpDate The Store &raquo;</strong></a>
</div>