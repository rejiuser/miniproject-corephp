<?php
$con=new mysqli("localhost","root","","library_mang_db");
if($con->connect_error)
{
    echo "error";
}

$id=$_GET['id'];
session_start();
$user=$_SESSION['id'];
$query="insert into request_tb(book_id,student_id,status)values($id,$user,'pending')";

$re=mysqli_query($con,$query);

if($re==true)
{
    header('location:viewstudentbooks.php');

}
