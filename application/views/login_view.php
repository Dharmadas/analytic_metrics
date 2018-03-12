<!DOCTYPE html>
<html> 
<head> 
<title>Bootstrap 101 Template</title> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<!-- Bootstrap --> 
<link href="normalize.css" rel="stylesheet">
<!--link href="http://localhost/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet"--> 
<link href="<?php echo base_url();?>assets/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet"> 
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --> 
<!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 
<!--[if lt IE 9]> <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/ html5shiv.js"></script> 
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/ respond.min.js"></script> 
<![endif]-->
<style>
.form-signin {
  margin-top: 60px;
}
</style>
</head> 
<body> 
<div class="container">
   <div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4 form-signin alert alert-info">		
		<?php echo form_open('home', array('role' => 'form'));?>
			<div class="form-group">
				<label for="username" class="control-label">Username</label>				
				<input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo set_value('username');?>">
				<span class="text-danger"><?php echo form_error('username'); ?></span>
			</div>
			
			<div class="form-group">
				<label for="password" class="control-label">Password</label>				
				<input type="password" class="form-control" name="password" id="password" placeholder="Password">
				<span class="text-danger"><?php echo form_error('password'); ?></span>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox"> Remember Me
				</label>
			</div>
			
			<div class="form-group">				
				<button type="submit" class="btn btn-primary center-block btn-block btn-lg" id="submit-button">Log In</button>
			</div>
			<div class="">
				<a href="#" class="alert-link">Forgot Password?</a>
			</div>
		</form>
		<div class="alert alert-danger alert-dismissable <?php if(!isset($error)){echo "hide";}?>">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<?php if(isset($error)){echo $error;}?>
		</div>
	</div>
	<div class="col-md-4"></div>
   </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="<?php echo base_url();?>assets/bootstrap-3.3.5-dist/jquery/jquery.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?= base_url();?>assets/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script> 
</body> 
</html>