<?php
include('linking.php');
$emailaddress=$_POST['Email'];
$password=$_POST['password'];

$sql="select * from user where user_email='$emailaddress' and user_password='$password'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
  $data=mysqli_fetch_array($result);
   $_SESSION['user_email']=$data['user_email'];
   $_SESSION['user_password']=$data['user_password'];
   $_SESSION['data']=$data;
   echo'<script>
   window.location="../user_dashboard.html";
   </script>';
}
else
{
echo'<script>
alert("Invalid Username and Password");
window.location="../";
</script>';
}
?>