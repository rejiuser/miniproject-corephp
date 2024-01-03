<?php
$con=new mysqli("localhost","root","","library_mang_db");
if($con->connect_error)
{
    echo "error";
}
$cerr=$nerr=$coerr=$newerr='';
if(isset($_POST['sub']))
{

session_start();
$id=$_SESSION['id'];
$current=$_POST['cu'];
$new=$_POST['new'];
$confirm=$_POST['con'];
if(empty($current))
{
  $cerr="Password Required";  
}
else
{
    $cerr=true;
}
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
if(empty($confirm))
{
    $coerr="Password Required";
}
else
{
    $coerr=true;
}
if($new!=$confirm)
{
    $newerr="Mismatch Password";
}
else
{
    $newerr=true;
}
if($cerr==1 & $nerr==1 & $coerr==1 & $newerr==1)
{
$query="select * from admin_tb where Password='$current' and id='$id'";
$re=mysqli_query($con,$query);
if(mysqli_num_rows($re)>0)
{
    if($new==$confirm)
    {
        $query2="update admin_tb set Password='$new' where id=$id";
        $res=mysqli_query($con,$query2);
    }
    else
    {
      echo "Password Mismatch";
    }

}
else
{
    echo "Invalid Password";
}
}
}