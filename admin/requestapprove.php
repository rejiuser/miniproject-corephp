<?php
$con=new mysqli("localhost","root","","library_mang_db");
if($con->connect_error)
{
    echo "error";
}
$id=$_GET['id'];
$q1="select * from request_tb where id=$id";
$a=mysqli_query($con,$q1);
$row=mysqli_fetch_array($a);
$bid=$row['book_id'];
$q2="update books_tb set Quantity=quantity-1 where id=$bid";
$b=mysqli_query($con,$q2);
$q3="update request_tb set status='Approved' where id=$id";
$c=mysqli_query($con,$q3);
if($c==true)
{
    header('location:viewrequest.php');
}
