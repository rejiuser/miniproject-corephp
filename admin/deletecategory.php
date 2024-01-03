<?php
$con=new mysqli("localhost","root","","library_mang_db");
if($con->connect_error)
{
    echo "error";
}
$id=$_GET['id'];
$query="delete from  category_tb where id=$id";
$re=mysqli_query($con,$query);
if($re==true)
{
    header('location:viewcategory.php');
}