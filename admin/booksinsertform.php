<?php
$con=new mysqli("localhost","root","","library_mang_db");
if($con->connect_error)
{
    echo "error";

}
$terr=$derr=$perr=$aerr=$qerr=$caerr='';
if(isset($_POST['sub']))
{
 $title=$_POST['title'];
 $des=$_POST['desc'];
 $pub=$_POST['pub'];
 $author=$_POST['auth'];
 $qua=$_POST['qua'];
 $cate=$_POST['cate'];
 $filename=$_FILES['photo']['name'];
 $filepath=$_FILES['photo']['tmp_name'];
 if(empty($title))
 {
    $terr="Title Required";
 }
 else 
 {
    $terr=true;
 }
 if(empty($des))
 {
    $derr='Description Required';
 }
 else
 {
    $derr=true;
 }
 if(empty($pub))
 {
    $perr="Publisher Name Required";
 }
 else
 {
    $perr=true;
 }
 if(empty($author))
 {
    $aerr="Author Name Required";
 }
 else
 {
    $aerr=true;
 }
 if(empty($qua))
 {
    $qerr="Quantity Required";
 }
 else
 {
    $qerr=true;
 }
 if($cate=='')
 {
    $caerr="Category Required";
   
 }
 else
 {
    $caerr=true;
    
 }
 if($terr==1 & $derr==1 & $perr==1 & $aerr==1 & $qerr==1 & $caerr==1)
 {

 

$query="insert into books_tb(Title,Category,Description,Publisher,Author,Quantity,Photo)values('$title','$cate','$des','$pub','$author','$qua','$filename')";
$re=mysqli_query($con,$query);
if($re==true)
{
    move_uploaded_file($filepath,'..images/'.$filename);
header('location:booksform.php');
}


}
}