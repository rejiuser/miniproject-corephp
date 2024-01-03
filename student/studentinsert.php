<?php
$con=new mysqli("localhost","root","","library_mang_db");
if($con->connect_error)
{
    echo "error";

}
$nerr=$cerr=$aerr=$aderr=$eerr=$perr=$pterr=$uerr=$pserr='';

if(isset($_POST['sub']))
{
   
    $name=$_POST['name'];
    $class=$_POST['class'];
    $age=$_POST['age'];
    $add=$_POST['address'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $filename=$_FILES['photo']['name'];
    $filepath=$_FILES['photo']['tmp_name'];
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    if(empty($name))
    {
        $nerr="Name is Required";
    }
    else if(!preg_match('/^[a-zA-Z ]+$/',$name))
    {
        $nerr="Invalid Name";
    }
    else
    {
        $nerr=true;
    }
    if(empty($class))
    {
        $cerr="Value is Required";
    }
    else if(!preg_match('/^[0-9]+$/',$class))
    {
        $cerr="Invalid Number";
    }
    else
    {
        $cerr=true;
    }
    if(empty($age))
    {
        $aerr="Age is Required";
    }
    else if(!preg_match('/^[0-9]{2}+$/',$age))
    {
        $aerr="Invalid Number";
    }
    else
    {
        $aerr=true;
    }
    if(empty($add))
    {
        $aderr="Address is Required";
    }
    else if(!preg_match('/^[a-zA-Z0-9,.()]+$/',$add))
    {
        $aderr="Invalid Address";
    }
    else
    {
        $aderr=true;
    }
    if(empty($email))
    {
        $eerr="Email is Required";
    }
    else if(!preg_match('/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/',$email))
    {
        $eerr="Invalid Email";
    }
    else
    {
        $eerr=true;
    }
    if(empty($phone))
    {
        $perr="Phone Number is Required";
    }
    else if(!preg_match('/^[0-9]{10}+$/',$phone))
    {
        $perr="Invalid Number";
    }
    else
    {
        $perr=true;
    }
    if(empty($filename))
    {
        $pterr="Photo is Required";
    }
    
    else
    {
        $pterr=true;
    }
    if(empty($user))
    {
        $uerr="Username is Required";
    }
    else if(!preg_match('/^[a-zA-Z0-9]+$/',$user))
    {
        $uerr="Invalid Name";
    }
    else
    {
        $uerr=true;
    }
    if(empty($pass))
    {
        $pserr="Password is Required";
    }
    else if(!preg_match('/^[a-zA-Z0-9@%&]+$/',$pass))
    {
        $pserr="Invalid Password";
    }
    else
    {
        $pserr=true;
    }
     
   if($nerr==1 & $cerr==1 & $aerr==1 & $aderr==1 & $eerr==1 & $perr==1 & $pterr==1 & $uerr==1 & $pserr==1 )
   {

    $query="insert into student_reg_tb(Name,Class,Age,Address,Email,Phone,photo,Status,Username,Password)values('$name',$class,$age,'$add','$email','$phone','$filename','Pending','$user','$pass')";
    $re=mysqli_query($con,$query);
    if($re==true)
    {
        move_uploaded_file($filepath,'../images/'.$filename);
        header('location:studentregisterform.php');
    }
}
}