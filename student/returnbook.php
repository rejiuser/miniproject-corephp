<?php
$con=new mysqli("localhost","root","","library_mang_db");
if($con->connect_error)
{
    echo "error";
}
$id=$_GET['id'];
$query="insert into return_tb(request_id,status)values('$id','Pending')";
$re=mysqli_query($con,$query);
if($re==true)
{
    header('location:approvedrequest.php');
}

