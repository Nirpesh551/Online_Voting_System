<?php
include('linking.php');
$username=$_POST['name'];
$password=$_POST['password'];
$mobilenumber=$_POST['mobile'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$Emailaddress=$_POST['Emailaddress'];
$Confirmpassword=$_POST['c_password'];
if ($password!=$Confirmpassword)
{
    echo'<script>
alert("password did not  match");
window.location="../register.html";
</script>';//redirects to register(1).html page
}
else{
    $sql="insert into user(user_email,user_password,user_phone,user_name,user_address,user_gender) values('$Emailaddress','$password','$mobilenumber','$username','$address','$gender')";
    $result=mysqli_query($con,$sql);
    if ($result)
{
    echo'<script>
alert("registration is succesful");
window.location="../index.html";
</script>';
}
}
?>
