<?php
$con=new mysqli("localhost","root","","library_mang_db");
if($con->connect_error)
{
    echo "error";
}
$id=$_GET['id'];
$title=$_POST['title'];
$des=$_POST['desc'];
$pub=$_POST['pub'];
$aut=$_POST['auth'];
$qua=$_POST['qua'];
$cate=$_POST['cate'];
$filename=$_FILES['photo']['name'];
$filepath=$_FILES['photo']['tmp_name'];
if($filename)

{
    $query1="update books_tb set Title='$title',Category='$cate',Description='$des',Publisher='$pub',Author='$aut',Quantity='$qua',Photo='$filename' where id=$id";
}
else
{
    $query1="update books_tb set Title='$title',Category='$cate',Description='$des',Publisher='$pub',Author='$aut',Quantity='$qua' where id=$id";
}

$re=mysqli_query($con,$query1);
if($re==true)
{
    move_uploaded_file($filepath,'../images/'.$filename);
    header('location:viewbook.php');
}