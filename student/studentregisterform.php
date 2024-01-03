<?php
include('studentinsert.php');
?>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="studentinsert.php" method="post" enctype="multipart/form-data">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="name" placeholder="Name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="class" placeholder="Class">
        <span class="glyphicon  form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control"name="age"placeholder="Age">
        <span class="glyphicon form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <textarea  class="form-control" name="address" placeholder="Address"></textarea>
        <span class="glyphicon  form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="phone" placeholder="Phone">
        <span class="glyphicon  form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="file" class="form-control" name="photo" placeholder="Photo">
        <span class="glyphicon  form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="user" placeholder="Username">
        <span class="glyphicon  form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="pass" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
     
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <input type="submit" class="btn btn-primary btn-block btn-flat" name="sub" value="Register">
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>

    <a href="../loginform.php" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>  
<!-- </head>

<form action="" method="post" enctype="multipart/form-data">
<table>
<tr><td><label>Name</label></td><td><input type="text" name="name">
<?php
if($nerr!=1)
{
    echo $nerr;
}
?>
</td></tr>
<tr><td><label>Class</label></td><td><input type="text" name="class">
<?php
if($cerr!=1)
{
    echo $cerr;
}
?>
</td></tr>
<tr><td><label>Age</label></td><td><input type="text" name="age">
<?php
if($aerr!=1)
{
    echo $aerr;
}
?>
</td></tr>
<tr><td><label>Address</label></td><td><textarea name="address"></textarea>
<?php
if($aderr!=1)
{
    echo $aderr;
}
?>
</td></tr>
<tr><td><label>Email</label></td><td><input type="text" name="email">
<?php
if($eerr!=1)
{
    echo $eerr;
}
?>
</td></tr>
<tr><td><label>Phone</label></td><td><input type="text" name="phone">
<?php
if($perr!=1)
{
    echo $perr;
}
?>
</td></tr>
<tr><td><label>Photo</label></td><td><input type="file" name="photo">
<?php
if($pterr!=1)
{
    echo $pterr;
}
?>
</td></tr>
<tr><td><label>Username</label></td><td><input type="text" name="user">
<?php
if($uerr!=1)
{
    echo $uerr;
}
?>
</td></tr>
<tr><td><label>Password</label></td><td><input type="password" name="pass">
<?php
if($pserr!=1)
{
    echo $pserr;
}
?>
</td></tr>
<tr><td><input type="submit" name="sub" value="Register"></td></tr>
</table>
</form>
</body> -->
</html>





