<?php
$con=new mysqli("localhost","root","","library_mang_db");
if($con->connect_error)
{
    echo "error";
}
$user=$_POST['user'];

$query="select * from admin_tb where Username='$user'";
$re=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($re);
if(mysqli_num_rows($re)>0)
{
    session_start();
    $_SESSION['user']=$row['Username'];
    $_SESSION['id']=$row['id'];
    header('location:emailcheckform.php');
}
else
{
    $query="select * from student_reg_tb where Username='$user'";
    $re=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($re);
    if(mysqli_num_rows($re)>0)
    {
        session_start();
        $_SESSION['user']=$row['Username'];
        $_SESSION['id']=$row['id'];
        header('location:emailcheckform.php');
    }

else
{
    header('location:forgotpassword.php');
 
}
}