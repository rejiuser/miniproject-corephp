<?php
$con=new mysqli("localhost","root","","library_mang_db");
if($con->connect_error)
{
    echo "error";
}
session_start();
$user=$_SESSION['id'];
$name=$_POST['name'];
$age=$_POST['age'];
$class=$_POST['class'];
$add=$_POST['add'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$filename=$_FILES['photo']['name'];
$filepath=$_FILES['photo']['tmp_name'];
if($filename)
{
    $query="update student_reg_tb set Name='$name',Age='$age',Class='$class',Address='$add',Email='$email',Phone='$phone',photo='$filename' where id='$user'";
}
else{
    $query="update student_reg_tb set Name='$name',Age='$age',Class='$class',Address='$add',Email='$email',Phone='$phone' where id='$user'";

}
$re=mysqli_query($con,$query);
if($re==true)
{
    move_uploaded_file($filepath,'../images/'.$filename);
    
    header('location:viewprofile.php');
}