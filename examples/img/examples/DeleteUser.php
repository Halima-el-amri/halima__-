
<!DOCTYPE html>
<html lang="en">
    <head>
</head>

<Form  action ="DeleteUser.php?Id=<?php echo  $_REQUEST['Id']  ?>" method="post"> 
<?php

$conn=mysqli_connect('localhost','root','','class')or die (mysqli_error());

$query="delete from users where Id=".$_REQUEST['Id']." ";

 $query_run=mysqli_query($conn,$query);



header("Location: http://localhost/d1_c1/halima/examples/Utilisateur.php");
exit();
?>
</form>
</body>
</html>




