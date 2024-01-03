<?php
$con=new mysqli("localhost","root","","library_mang_db");
if($con->connect_error)
{
    echo "error";
}
$id=$_GET['id'];
$q1="select return_tb.id as rid,return_tb.*,request_tb.* from return_tb inner join request_tb on request_tb.id=return_tb.request_id where return_tb.id=$id";
$a=mysqli_query($con,$q1);
$row=mysqli_fetch_array($a);
$bid=$row['book_id'];
$q2="update books_tb set Quantity=quantity+1 where id=$bid";
$b=mysqli_query($con,$q2);
$query="update return_tb set status='Approved' where id=$id";
$c=mysqli_query($con,$query);
if($c==true)
{
    header('location:viewreturn.php');
}