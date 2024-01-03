<?php
$con=new mysqli("localhost","root","","library_mang_db");
if($con->connect_error)
{
    echo "error";
}
$user=$_POST['user'];
$email=$_POST['email'];
$query="select * from admin_tb where Username='$user' and Email='$email'";
$re=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($re);
if(mysqli_num_rows($re)>0)
{
    session_start();
    $_SESSION['table']='admin_tb';
  $_SESSION['email']=$email;
    header('location:newpasswordform.php');
}
else
{
    $query="select * from student_reg_tb where Username='$user' and Email='$email'";
    $re=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($re);
    if(mysqli_num_rows($re)>0)
    {
        session_start();
      $_SESSION['table']='student_reg_tb';
      $_SESSION['email']=$email;
        header('location:newpasswordform.php');
    }

else
{
    header('location:emailcheckform.php');
}
}