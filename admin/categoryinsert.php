<?php
$con=new mysqli("localhost","root","","library_mang_db");
if($con->connect_error)
{
    echo "error";
}
$cterr='';
if(isset($_POST['sub']))
{
    $cate=$_POST['cate'];
    if(empty($cate))
    {
    $cterr="Category Required";
    }

   
    else
    {
        $cterr=true;
    }
    if($cterr==1)
    {
    $query="insert into category_tb(category_name)values('$cate')";
    $re=mysqli_query($con,$query);
    if($re==true)
    {
        header('location:category.php');
    }
    }
}