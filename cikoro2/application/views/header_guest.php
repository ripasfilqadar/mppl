<!DOCTYPE html>
<html lang="en">
	<head>
		<style>
			#map-canvas 
			{
        	width: 100%;
        	height: 400px;
     		}
		</style>
		<meta charset="utf-8">
		<title>Guest</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<link rel="icon" type="image/x-icon" href="<?php echo base_url('themes/images/logo.png');?>" />
		<link href="<?php echo base_url('themes/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('themes/bootstrap/css/bootstrap-responsive.min.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('themes/css/bootstrappage.css');?>" rel="stylesheet"/>
		<link href="<?php echo base_url('themes/css/flexslider.css');?>" rel="stylesheet"/>
		<link href="<?php echo base_url('themes/css/main.css');?>" rel="stylesheet"/>
		<script src="<?php echo base_url('themes/js/jquery-1.7.2.min.js');?>"></script>
		<script src="<?php echo base_url('themes/bootstrap/js/bootstrap.min.js');?>"></script>				
		<script src="<?php echo base_url('themes/js/superfish.js');?>"></script>	
		<script src="<?php echo base_url('themes/js/jquery.scrolltotop.js');?>"></script>
		<script src="https://maps.googleapis.com/maps/api/js"></script>

		<script>
	      function initialize() {
	        var mapCanvas = document.getElementById('map-canvas');
	        var mapOptions = {
	          center: new google.maps.LatLng(-5.4173, 119.8709),
	          zoom: 8,
	          mapTypeId: google.maps.MapTypeId.ROADMAP
	        }
	        var map = new google.maps.Map(mapCanvas, mapOptions)
	      }
	      google.maps.event.addDomListener(window, 'load', initialize);
    	</script>
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="">
					<div class="account pull-right">
							<ul class="user-menu">								
							<li><a href="<?php echo base_url()?>login">Login</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="<?php echo base_url()?>" class="logo pull-left"><img src="<?php echo base_url('themes/images/logo_new.png');?>" width="100" height="85" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="#">About</a>					
								<ul>
									<li><a href="<?php echo base_url()?>index.php/main/cikoro">Cikoro Farm</a></li>									
									<li><a href="<?php echo base_url()?>index.php/main/lp3m">LP3M (Lembaga Pengkajian Pedesaan, Pantai dan Masyarakat) Makassar</a></li>									
								</ul>
							</li>															
							<li><a href="<?php echo base_url()?>index.php/main/hto">How to Order</a></li>													
							<li><a href="<?php echo base_url()?>main/kontak">Contact Us</a></li>							
						</ul>
					</nav>
				</div>
			</section>