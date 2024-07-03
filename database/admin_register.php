<?php
include('linking.php');
$username=$_POST['name'];
$show=$_POST['show'];
$password=$_POST['password'];
$Emailaddress=$_POST['email'];
$Confirmpassword=$_POST['c_password'];
if ($password!=$Confirmpassword)
{
    echo'<script>
alert("password did not match");
window.location="onlinevotingsystem/database/admin_register.php";
</script>';//redirects to register(1).html page
}
else{
    $sql="insert into admin(admin_name,admin_email,admin_password,admin_show) values('$username','$Emailaddress','$password','$show')";
    $result=mysqli_query($con,$sql);
    if ($result)
{
    echo'<script>
alert("registration is succesful");
</script>';
}
}
?>
