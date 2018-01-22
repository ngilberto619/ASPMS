
<?php
if(isset($_POST['save2']))
{
$user=$_POST['userid'];
$type=$_POST['type'];
$query1="update user set Status='".$type."' where Id=".$user."";
$ex1=mysql_query($query1) or die("<div class='error'>Error! Not select 2</div>");
$err="The Change Is Successful";
    echo "<div class=\"alert alert-error\">";
    echo "<button type='button' class='close' data-dismiss='alert'>*</button>";
    echo "<strong> Error! </strong>";
    echo "$err <br>";
    echo "</div>";
include"userupdateform.php";

}
?>