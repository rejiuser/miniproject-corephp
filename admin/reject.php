<?php
$con=new mysqli("localhost","root","","library_mang_db",);
if($con->connect_error)
{
    echo "error";
}
$id=$_GET['id'];
$query="update student_reg_tb set status='Rejected' where id=$id";
$re=mysqli_query($con,$query);
if($re==true)
{
    echo "updated successfully...";
    header('location:viewstudent.php');
}