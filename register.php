<?php

include('linking.php');
$username=$_post['name'];
$password=$_post['password'];
$mobilenumber=$_post['mobile'];
$address=$_post['address'];
$gender=$_post['gender'];
$Emailaddress=$_post['Emailaddress'];
$Confirmpassword=$_post['c_password'];



if ($password!=$Confirmpassword)
{
    echo'<script>
alert("password did not  match");
window.location="../online voting system/database/register.html";
</script>';//redirects to register(1).html page
}
else{
    $sql="insert into 'user'(user_email,user_password,user_phone,user_name,user_address,user_gender,confirm password) values('$username','$password','$mobilenumber','$address','$gender','$Emailaddress','$Confirmpassword')";
    $result=mysqli_query($con,$sql);
    if ($result)
{
    echo'<script>
alert("registration is succesful");
</script>';
}
}
?>
