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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/Highcharts/js/highcharts.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/Highcharts/js/modules/exporting.js"></script>
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script>
$(function(){
  $('a').each(function() {
    if ($(this).prop('href') == window.location.href) {
      $(this).closest("li").addClass('active');
		$(this).removeAttr('href');
    }
  });
});
</script>
</head> 
<body>
<div class="container-fluid">
	<div class="nav">
	<div class="pull-right">		
		<span class="glyphicon glyphicon-user"></span>		
		<?php echo $username;?> | 
		<span class="glyphicon glyphicon-off"></span>
		<a style="color: inherit;" href="<?php echo base_url()."home/end"?>">Logout</a>
	</div>
	</div>
	<h1 class="text-center">Metrics</h1>
	<hr/>
<?php $this->view('menu_and_target_view');?>
