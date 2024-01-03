<?php

$con=new mysqli("localhost","root","","library_mang_db");
if($con->connect_error)
{
    echo "error";
}
$uerr=$perr='';
if(isset($_POST['sub']))
{

$user=$_POST['user'];
$pass=$_POST['pass'];
if(empty($user))
{
    $uerr='Username is Required';
}
else if(!preg_match('/^[a-zA-Z]+$/',$user))
{
    $uerr='Invalid Username';
}
else
{
    $uerr=true;
}
if(empty($pass))
{
    $perr='Password is Required';
}
else if(!preg_match('/^[a-zA-Z,@0-9]{8}/',$pass))
{
    $perr='Invalid Password';

}
else
{
    $perr=true;
}
if($uerr==1 & $perr==1)
{


$query="select * from admin_tb where Username='$user' and Password='$pass'";
$re=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($re);
if(mysqli_num_rows($re)>0)
{
    session_start();
    $_SESSION['user']=$row['Username'];
    $_SESSION['id']=$row['id'];
    header('location:admin/adminhome.php');
    
}

    else 
    {
       
    $query="select * from student_reg_tb where username='$user' and password='$pass' and status='Approved'";
    
    $r=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($r);
    if(mysqli_num_rows($r)>0)
    {
        session_start();
        $_SESSION['user']=$row['Username'];
      
        $_SESSION['id']=$row['id'];
        header('location:student/studenthome.php');
    } 
    else
{
    header('location:loginform.php');
}
    }
}
}
?>