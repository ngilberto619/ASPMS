<?php
if(isset($_POST['addUserButton'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['Email'];
    $gender=$_POST['Gender'];
    $username=$_POST['Username'];
    $password=$_POST['Password'];
    $picture=$_FILES['picture']['name'];
    $phone=$_POST['Phone'];
    $status=$_POST['type'];
    $jquery1="SELECT COUNT(*) from loging where Username='".$username."'";
    $jsend1=mysql_query($jquery1) or die("<div class='error'>Error! Not select 1</div>");
    $jresult=mysql_fetch_array($jsend1);
    if($jresult[0]==0)
    {
         move_uploaded_file($_FILES['picture']['tmp_name'],"uploads/".$_FILES['picture']['name']);
         $query="INSERT INTO user (Firstname,
         Lastname, Email, Gender, picture, Status, Phone) VALUES (
         '".$firstname."', '".$lastname."', '".$email."', '".$gender."',
         'uploads/".$_FILES['picture']['name']."', '".$status."', '+25".$phone."')";
        $ex=mysql_query($query) or die("<div class='error'>Error! Not inserted</div>");
        $query2="select Id from user where Phone='+25".$phone."' and Firstname='".$firstname."'";
         $ex2=mysql_query($query2) or die("<div class='error'>Error! Not select 2</div>");
         $row=mysql_fetch_array($ex2);
         while($row)
         {
          $id2= $row['Id'];
         $query3="INSERT INTO loging (Id, Username, PassWord) VALUES (
         '".$id2."', '".$username."', '".md5($password)."')";
         $ex3=mysql_query($query3) or die(" ");
         if($ex3)
         {
         $err="User registered";
           echo "<div class=\"alert alert-error\">";
           echo "<button type='button' class='close' data-dismiss='alert'>*</button>";
          echo "<strong> successful! </strong>";
         echo "$err <br>";
          echo "</div>";
		  echo'<div class="container">
		<a href="home.php" class="btn btn-primary">Menu</a>
		</div>'    ;
    
        }
         }
 }else{
    $err="Username is Used, Try To Use another Username";
           echo "<div class=\"alert alert-error\">";
           echo "<button type='button' class='close' data-dismiss='alert'>*</button>";
          echo "<strong> Error! </strong>";
         echo "$err <br>";
          echo "</div>";
    
 }
}
   
?>
