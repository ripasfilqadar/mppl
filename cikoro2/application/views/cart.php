<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Your Cart</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="themes/bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="themes/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">		
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		<link rel="icon" type="image/x-icon" href="themes/images/logo.jpg" />
		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="themes/bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="themes/js/respond.min.js"></script>
		<![endif]-->
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
							<li><a href="cart.html">Your Cart</a></li>					
							<li><a href="register.html">Login</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.html" class="logo pull-left"><img src="themes/images/logo.jpg" width="50" height="35" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./products.html">About</a>					
								<ul>
									<li><a href="./cikoro.html">Cikoro Farm</a></li>									
									<li><a href="./lp3m.html">LP3M</a></li>									
								</ul>
							</li>															
							<li><a href="./products.html">How to Order</a></li>			
							<li><a href="./products.html">Contact Us</a></li>							
							<li><a href="./products.html">Best Seller</a></li>
						</ul>
					</nav>
				</div>
			</section>			
			<section class="main-content">				
				<div class="row">
					<div class="span12">					
						<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Remove</th>
									<th>Image</th>
									<th>Product Name</th>
									<th>Quantity</th>
									<th>Unit Price</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><input type="checkbox" value="option1"></td>
									<td><a href="product_detail.html"><img alt="" src="themes/images/ladies/9.jpg"></a></td>
									<td>Sirup Markisa</td>
									<td><input type="text" placeholder="1" class="input-mini"></td>
									<td>$2,350.00</td>
									<td>$2,350.00</td>
								</tr>			  
								<tr>
									<td><input type="checkbox" value="option1"></td>
									<td><a href="product_detail.html"><img alt="" src="themes/images/ladies/1.jpg"></a></td>
									<td>Buah</td>
									<td><input type="text" placeholder="2" class="input-mini"></td>
									<td>$1,150.00</td>
									<td>$2,450.00</td>
								</tr>
								<tr>
									<td><input type="checkbox" value="option1"></td>
									<td><a href="product_detail.html"><img alt="" src="themes/images/ladies/3.jpg"></a></td>
									<td>Sayur-sayuran</td>
									<td><input type="text" placeholder="1" class="input-mini"></td>
									<td>$1,210.00</td>
									<td>$1,123.00</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td><strong>$3,600.00</strong></td>
								</tr>		  
							</tbody>
						</table>
						<h4>Apa langkah selanjutnya?</h4>
						<p>Pilih salah satu metode pembayaran</p>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
							Transfer
						</label>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							Credit Card
						</label>
						<hr>
						<p class="cart-total right">
							<strong>Sub-Total</strong>:	$100.00<br>
							<strong>Eco Tax (-2.00)</strong>: $2.00<br>
							<strong>VAT (17.5%)</strong>: $17.50<br>
							<strong>Total</strong>: $119.50<br>
						</p>
						<hr/>
						<p class="buttons center">				
							<button class="btn" type="button">Update</button>
							<button class="btn" type="button">Continue</button>
							<button class="btn btn-inverse" type="submit" id="checkout">Checkout</button>
						</p>					
					</div>
					
				</div>
			</section>			
			
			<section id="copyright">
				
				<span class="span11" >Copyright 2015</span>
			
				<span class="social_icons">
					<a class="facebook" href="#"><img src="themes/images/fb.jpg" style="width:30px; " class="site_logo" alt=""></a>
					<a class="twitter" href="#"><img src="themes/images/twit.jpg" style="width:30px" class="site_logo" alt=""></a>
				</span>	
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script>		
    </body>
</html>