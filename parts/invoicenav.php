<div align="center">
<a class="btn btn-default btn-warning" href="home.php?home"><strong>Home &raquo;</strong></a><br><br>
<a class="btn btn-default btn-success" href="home.php?cash"><strong>Cash &raquo;</strong></a>
<a class="btn btn-default btn-info" href="home.php?credit"><strong>Credit&raquo;</strong></a>
<a class="btn btn-default btn-success" href="home.php?cancel"><strong>Cancel &raquo;</strong></a>
<a class="btn btn-default btn-info" href="home.php?load" target="_blank"><strong>Load&raquo;</strong></a>
<?php
if($_SESSION['Status']=="Manager")
{
?>
<a class="btn btn-default btn-success" href="home.php?delete"><strong>Delete &raquo;</strong></a>
<a class="btn btn-default btn-success" href="home.php?receipt"><strong>Receipt information &raquo;</strong></a>
<?php
}
?>
</div>