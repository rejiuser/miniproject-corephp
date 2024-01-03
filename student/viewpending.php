<?php
$con=new mysqli("localhost","root","","library_mang_db");
if($con->connect_error)
{
    echo "error";
}
session_start();
$user=$_SESSION['id'];
$query="select request_tb.id as rid,request_tb.*,books_tb.*,student_reg_tb.* from request_tb inner join books_tb on request_tb.book_id=books_tb.id inner join student_reg_tb on request_tb.student_id=student_reg_tb.id where request_tb.status='pending'";
$re=mysqli_query($con,$query);
?>
<html>
    <head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    </head>
<body>
<table border=1>
       <!-- /.box-header -->
       <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                 
                <tbody>

<thead>
<th>Student Name</th>
<th>Book Name</th>
</thead>
<tbody>
<?php 
while($row=mysqli_fetch_array($re))
{
    ?>
    <tr>
        <td><?php echo $row['Name'];?></td>
        <td><?php echo $row['Title'];?></td>
        <td><a href="pendingdetails.php?id=<?php echo $row['rid'];?>">Details</a></td>

</tr>
<?php
}
?>
</tbody>
</table>
</body>
</html>