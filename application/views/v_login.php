<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Isi CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/custom.css" rel="stylesheet">
    <!-- Custom Login CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/css/customlogin.css" rel="stylesheet"> 
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>template/backend/sbadmin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<center><h1>Silahkan Login<br/></h1></center>
	<center><form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
		<div class="container">
		<div class="row">
    	<div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-lock"></span> <strong>LOG in</strong>
            </div>
            <div class="panel-body">
				<div class="form-group">
                    <p class="col-sm-3">Username </p>
					<div class="col-sm-8">
						<input type="text" name="username" class="form-control" placeholder="Username">
					</div>
					
				<div class="form-group">
                    <p class="col-sm-3">Password </p>
					<div class="col-sm-8">
						<input type="password" name="Password" class="form-control" placeholder="******">
					</div>
				</div>
			<div class="form-group last">
                 <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" name="proses" class="btn btn-success btn-sm">Sign in</button>

                     <button><a href="<?= base_url(); ?>register/">Register</a></button>

                </div>
            </div>
	</form></center>

	 <!-- jQuery -->
	 <script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/jquery/jquery.min.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!-- Metis Menu Plugin JavaScript -->
	<script src="<?php echo base_url(); ?>template/backend/sbadmin/vendor/metisMenu/metisMenu.min.js"></script>
	<!-- Custom Theme JavaScript -->
	<script src="<?php echo base_url(); ?>template/backend/sbadmin/dist/js/sb-admin-2.js"></script>
</body>
</html>