<?php

//Database conncetion 
$con = new mysqli("localhost","root","","ultimate");

 // Registration
extract($_POST);

if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['username'])&& isset($_POST['phone'])&& isset($_POST['email'])&& isset($_POST['dob']))
{
    $sql="insert  into `usersr` (name,surname,username,phone,email,dob)values('$name','$surname','$username','$phone','$email','$regusername')";
    header("Location:Well done.html");
    $result=mysqli_query($con,$sql);
    
    
}
else
{
    
   header("Location:registration form.html");
}
?>