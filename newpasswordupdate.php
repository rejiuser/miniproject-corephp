<?php


    $con=new mysqli("localhost","root","","library_mang_db");
if($con->connect_error)
{
    echo "error";
}
$nerr=$cerr=$merr='';
if(isset($_POST['sub']))
{
session_start();
$table=$_SESSION['table'];
$email=$_SESSION['email'];
$new=$_POST['new'];
$conn=$_POST['con'];
if(empty($new))
{
    $nerr="Password Required";
}
else if(!preg_match('/^[a-zA-Z0-9]{8}+$/',$new))
{
    $nerr="Invalid Password";
}
else 
{
    $nerr=true;
}
if(empty($conn))
{
$cerr="Password required";
}
else 
{
    $cerr=true;
    if($new!==$conn)
{
    $merr="Password Mismatch";
}
else
{
    $merr=true;
    $cerr=true;
}
}

if($nerr==1 & $cerr==1 & $merr==1)
{


if($table=='admin_tb')
{
$query="update admin_tb set Password='$new' where Email='$email'";

$re=mysqli_query($con,$query);
if($re==true)
{
    header('location:loginform.php');
}
}
else
{
    $query="update student_reg_tb set Password='$new' where Email='$email'";
    $res=mysqli_query($con,$query);
    if($res==true)
    {
        header('location:loginform.php');
    }
}
}
}