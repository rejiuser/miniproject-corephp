<?php
$con=new mysqli("localhost","root","","library_mang_db");
if($con->connect_error)
{
    echo "error";
}
session_start();
session_destroy();


header('location:../loginform.php');
