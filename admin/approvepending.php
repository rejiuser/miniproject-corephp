<?php
$con=new mysqli("localhost","root","","library_mang_db");
if($con->connect_error)
{
    echo "error";
}
$id=$_GET['id'];
$query1="select * from request_tb where id=$id";
$d=mysqli_query($con,$query1);
$row=mysqli_fetch_array($d);
$bid=$row['book_id'];
$query2="update books_tb set Quantity=quantity-1 where id=$bid";
$re=mysqli_query($con,$query2);
$query="update request_tb set status='Approved' where id=$id";

$re=mysqli_query($con,$query);
if($re==true)
{
    header('location:viewpending.php');
}