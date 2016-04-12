<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CourseSDD | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url('styles/bootstrap/css/bootstrap.min.css')?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('styles/dist/css/AdminLTE.min.css')?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('styles/plugins/iCheck/square/blue.css')?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <b>Course</b>SDD</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <div class="social-auth-links text-center">
          <a href="#" class="btn btn-block btn-social btn-github btn-flat"><i class="fa fa-github"></i> Sign in to Student Dash Board</a>
          <a href="#" class="btn btn-block btn-social btn-github btn-flat"><i class="fa fa-github"></i> Sign in to Lecturer Dash Board</a>
          <a href="#" class="btn btn-block btn-social btn-github btn-flat"><i class="fa fa-github"></i> Sign in to Lecturer Report Console</a>
          <a href="#" class="btn btn-block btn-social btn-github btn-flat"><i class="fa fa-github"></i> Sign in to Admin Application Log Console</a>
          <a href="#" class="btn btn-block btn-social btn-github btn-flat"><i class="fa fa-github"></i> Sign in to Admin Security Log Console</a>
        </div><!-- /.social-auth-links -->

        <a href="#">I forgot my password</a><br>
        <a href="#" class="text-center">Register a new membership</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
	
	<div>
		<b>Date:</b> <?php print_r($date[0])?>
		<table>
			<tr>
				<td>Date</td>
				<td>User ID</td>
				<td>User IP</td>
				<td>Session ID</td>
				<td>Detail</td>
			</tr>
			
		</table>
		
		
		<?php
			print_r($logs[0][0]);
		?>
	</div>
	
	
	
    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url('styles/plugins/jQuery/jQuery-2.1.4.min.js')?>"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url('styles/bootstrap/js/bootstrap.min.js')?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('styles/plugins/iCheck/icheck.min.js')?>"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
