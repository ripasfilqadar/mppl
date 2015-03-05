<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>About | LP3M</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<link rel="icon" type="image/x-icon" href="<?php echo base_url('themes/images/logo.jpg');?>" />
		<link href="<?php echo base_url('themes/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('themes/bootstrap/css/bootstrap-responsive.min.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('themes/css/bootstrappage.css');?>" rel="stylesheet"/>
		<link href="<?php echo base_url('themes/css/flexslider.css');?>" rel="stylesheet"/>
		<link href="<?php echo base_url('themes/css/main.css');?>" rel="stylesheet"/>
		<script src="<?php echo base_url('themes/js/jquery-1.7.2.min.js');?>"></script>
		<script src="<?php echo base_url('themes/bootstrap/js/bootstrap.min.js');?>"></script>				
		<script src="<?php echo base_url('themes/js/superfish.js');?>"></script>	
		<script src="<?php echo base_url('themes/js/jquery.scrolltotop.js');?>"></script>
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="Cari Nama Produk">
					</form>
				</div>
				<div >
					<div class="account pull-right">
							<ul class="user-menu">									
							<li><a href="#">Login</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="#" class="logo pull-left"><img src="<?php echo base_url('themes/images/logo.jpg');?>" width="50" height="35" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="#">About</a>					
								<ul>
									<li><a href="<?php echo base_url()?>index.php/main/cikoro">Cikoro Farm</a></li>									
									<li><a href="<?php echo base_url()?>index.php/main/lp3m">LP3M</a></li>									
								</ul>
							</li>															
							<li><a href="#">How to Order</a></li>			
							<li><a href="#">Contact Us</a></li>							
							<li><a href="#">Best Seller</a></li>
						</ul>
					</nav>
				</div>
			</section>
			<section class="main-content" style="margin-bottom:100px">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">About <strong>LP3M</strong></span></span></span>
									
								</h4>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">

								<p>
									Memfasilitasi proses agar dapat mendorong persamaan persepsi yang berdampak terhadap berkurangnya kesenjangan di dan diantara masyarakat pesisir, laut dan pulau-pulau kecil, masyarakat dataran tinggi, Desa dan Kota.
								</p>
							</div>
						</div>
						<div class="row">
						<div class="span1"></div>
							<div class="span5">
						  		<h5>Kerjasama LP3M dengan Canadian Co-operative Association</h5>            
						  		<img src="<?php echo base_url('themes/images/gbr1.jpg');?>" class="img-rounded" width="304" height="236"> 
							</div>
							<div class="span1"></div>
							<div class="span5">
						  		<h5>Aksi Penanaman Bibit Mahoni</h5>            
						  		<img src="<?php echo base_url('themes/images/gbr2.jpg');?>" class="img-rounded" width="304" height="236"> 
							</div>
						</div>


									
						</div>	
					</div>				
				</div>
			</section>
			
			<section class="our_client">
				<h4 class="title"><span class="text">Clients</span></h4>
				<div class="row">					
					<div class="span2">
						<a href="#"><img alt="Pemkot Makassar" src=""></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="Dinas Pekerjaan Umum" src=""></a>
					</div>
				</div>
			</section>

			<section id="copyright" style="margin-top:20px">
				<span class="span6"> </span>
				<span class="span6" >Copyright 2015</span>
			
				<span class="social_icons">
					<a class="facebook" href="https://www.facebook.com/pages/Lembaga-Pengkajian-Pedesaan-Pantai-dan-Masyarakat-LP3M-Makassar/155812491140375?fref=ts"><img src="<?php echo base_url('themes/images/fb.jpg');?>" style="width:30px; " class="site_logo" alt=""></a>
					<a class="twitter" href="#"><img src="<?php echo base_url('themes/images/twit.jpg');?>" style="width:30px" class="site_logo" alt=""></a>				</span>	
			</section>
		</div>
		<script src="<?php echo base_url('themes/js/common.js');?>"></script>
		<script src="<?php echo base_url('themes/js/jquery.flexslider-min.js');?>"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container"
				});
			});
		</script>
    </body>
</html>